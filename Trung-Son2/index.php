<?php
session_start();
ob_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
include "model/connectdb.php";
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/donhang.php";
include "model/global.php";

$load_danhmuc_home = get_Danhmuc_parent_home();
$dssp_sale_home = get_sanpham_sale_home();
$dssp_functionalfoods_home = sanpham_functionalfoods_home();
$dssp_group_home = sanpham_group_home();
$load_danhmuc_group = get_danhmuc_group();
include "view/header.php";
if (!isset($_GET['act'])) {

    include "view/home.php";
} else {
    $act = $_GET['act'];
    switch ($act) {
        case 'danh_sach_san_pham':
            if (!isset($_GET['iddm'])) {
                $iddm = 0;
            } else {
                $iddm = $_GET['iddm'];
            }
            $loaddssp_danhmuc = get_dssp_danhmuc($iddm, 10);

            include "view/danh_sach_san_pham.php";
            break;

        case 'chi_tiet_san_pham':
            if (isset($_GET['idsp'])) {
                $id = $_GET['idsp'];
                $sp_chi_tiet = get_sp_by_id($id);
                $iddm = $sp_chi_tiet['iddm'];
                //$namedanhmuc_by_chitiet = get_danhmuc_by_chitiet($iddm, $id);
                $splienquan = get_sanpham_lienquan($iddm, $id);
                include "view/chi_tiet_san_pham.php";
            } else {
                include "view/home.php";
            }
            break;

        case 'viewcart':
            include_once "view/viewcart.php";
            break;
        case 'addcart':
            // lấy dữ liệu về form lưu vào giỏ hàng
            if (isset($_POST['btnaddcart']) && ($_POST['btnaddcart'])) {
                $id = $_POST['id'];
                $soluong = $_POST['soluong'];
                $found = false;
                // kiểm tra xem sản phẩm đã có trong giỏ hàng hay không
                if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                    foreach ($_SESSION['giohang'] as &$item) {
                        // nếu sản phẩm đã tồn tại, thay đổi số lượng
                        if ($item['id'] == $id) {
                            $item['soluong'] += $soluong;
                            $found = true;
                            break;
                        }
                    }
                }
                // nếu sản phẩm chưa có trong giỏ hàng, thêm mới vào
                if (!$found) {
                    $TenSP = $_POST['TenSP'];
                    $Img = $_POST['Img'];
                    $GiaCu = $_POST['GiaCu'];
                    $GiaHienTai = $_POST['GiaHienTai'];
                    // khởi tạo sản phẩm mới và thêm vào giỏ hàng
                    $sp = ["id" => $id, "TenSP" => $TenSP, "Img" => $Img, "GiaCu" => $GiaCu, "GiaHienTai" => $GiaHienTai, "soluong" => $soluong];
                    $_SESSION['giohang'][] = $sp;
                }
                header('location: index.php?act=viewcart');
            }
            break;

        case 'delcart':
            if (isset($_GET['ind']) && ($_GET['ind'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['ind'], 1);
                header('location: index.php?act=viewcart');
            }
            break;

        case 'thanh_toan':
            include "view/thanh_toan.php";
            break;
        case 'chitietdonhang':
            if ((isset($_POST['thanhtoan'])) && ($_POST['thanhtoan'])) {
                //lấy dữ liệu
                $tongdonhang = $_POST['tongdonhang'];
                $hoten = $_POST['hoten'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $pt_thanhtoan = $_POST['pt_thanhtoan'];
                $madh = "TS" . rand(0, 9999999);
                //Tạo đơn hàng
                // và trả về 1 id đơn hàng
                $iddh = taodonhang($madh, $tongdonhang, $pt_thanhtoan, $hoten, $address, $email, $mobile);
                $_SESSION['iddh'] = $iddh;
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                    foreach ($_SESSION['giohang'] as $item) {
                        addtocart($iddh, $idpro, $TenSP, $Img, $GiaCu, $GiaHienTai, $soluong);
                    }
                    unset($_SESSION['giohang']);
                } 
            }
            include "view/chitietdonhang.php";
            break;
        case 'chitietdonhang':

            include "view/chitietdonhang.php";
            break;

        default:
            include "view/home.php";
            break;
    }
}

include "view/footer.php";
