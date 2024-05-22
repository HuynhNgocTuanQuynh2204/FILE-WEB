<?php
session_start();
ob_start();
include "model/connectdb.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "view/admin_header.php";
connectdb();
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'quanly_danhmuc':
            //Add danh muc
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $TenDM = $_POST['TenDM'];
                $parent_id = $_POST['parent_id'];
                themdm($TenDM, $parent_id);
            }
            if (isset($_GET['iddel'])) {
                $id = $_GET['iddel'];
                deletdm($id);
            }
            // lấy 1 RECORD đúng với id truyền vào
            if (isset($_GET['idedit']) && ($_GET['idedit'] > 0)) {
                $id = $_GET['idedit'];
                $kqone = getonedm($id);
            }
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $TenDM = $_POST['TenDM'];
                $parent_id = $_POST['parent_id'];
                updatedm($id, $TenDM, $parent_id);
            }
            $kq = getall_dm();
            include "view/quanly_danhmuc.php";
            break;


        case 'quanly_sanpham':
            //load ds danh muc
            $dsdm = getall_dm();
            $dsdm_group = get_danhmuc_group();
            // Add sản phẩm 
            if ((isset($_POST['themmoi'])) && ($_POST['themmoi'])) {
                $TenSP = $_POST['TenSP'];
                $iddm = $_POST['iddm'];
                $loaithuoc = $_POST['loaithuoc'];
                $GiaCu = $_POST['GiaCu'];
                $GiaHienTai = $_POST['GiaHienTai'];
                $detail = $_POST['detail'];
                if ($_FILES['Img']['name'] != "") $Img = $_FILES['Img']['name'];
                else $Img = "";
                insert_sanpham($Img, $TenSP, $iddm, $loaithuoc, $GiaCu, $GiaHienTai, $detail);
            }
            // edit sản phẩm
            // lấy 1 RECORD đúng với id truyền vào
            if (isset($_GET['idedit']) && ($_GET['idedit'] > 0)) {
                $id = $_GET['idedit'];
                $kq_return = getonesp($id);
            }
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $TenSP = $_POST['TenSP'];
                $loaithuoc = $_POST['loaithuoc'];
                $GiaCu = $_POST['GiaCu'];
                $GiaHienTai = $_POST['GiaHienTai'];
                $detail = $_POST['detail'];
                updatesp($id, $TenSP, $loaithuoc, $GiaCu, $GiaHienTai, $detail);
            }
            //Xóa sản phẩm
            if (isset($_GET['iddel'])) {
                $id = $_GET['iddel'];
                deletsp($id);
            }
            //load ds sản phẩm
            $kq = getall_sanpham();
            include "view/quanly_sanpham.php";
            break;

        case 'quanly_taikhoan':
            // Thêm tài khoản
            if ((isset($_POST['themmoi'])) && ($_POST['themmoi'])) {
                $name = $_POST['name'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $address = $_POST['address'];
                $birthday = $_POST['birthday'];
                $level = $_POST['level'];
                $totalMoney = $_POST['totalMoney'];
                $points = $_POST['points'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $vaitro = $_POST['vaitro'];
                if ($_FILES['img']['name'] != "") $img = $_FILES['img']['name'];
                else $img = "";
                insert_taikhoan($img, $name, $mobile, $email, $gender, $address, $birthday, $level, $totalMoney, $points, $user, $password, $vaitro);
            }
            //Cập nhật tài khoản
            if (isset($_GET['idedit']) && ($_GET['idedit'] > 0)) {
                $id = $_GET['idedit'];
                $kq_user = getone_user($id);
            }
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $address = $_POST['address'];
                $birthday = $_POST['birthday'];
                $level = $_POST['level'];
                $totalMoney = $_POST['totalMoney'];
                $points = $_POST['points'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $vaitro = $_POST['vaitro'];
                if ($_FILES['img']['name'] != "") $img = $_FILES['img']['name'];
                else $img = "";
                update_user($img, $name, $mobile, $email, $gender, $address, $birthday, $level, $totalMoney, $points, $user, $password, $vaitro);
            }
            //Xóa tài khoản
            if (isset($_GET['iddel'])) {
                $id = $_GET['iddel'];
                delet_user($id);
            }
            $kq_user = getall_taikhoan();
            include "view/quanly_taikhoan.php";
            break;

        case 'quanly_donhang':
            include "view/quanly_donhang.php";
            break;

        default:
            include "view/admin_home.php";
            break;
    }
} else {
    include "view/admin_home.php";
}

include "view/admin_footer.php";
