<?php
function getall_sanpham()
{

  $sql = "SELECT * FROM ts_sanpham";

  return get_all($sql);
}
function insert_sanpham($Img, $TenSP, $iddm, $loaithuoc, $GiaCu, $GiaHienTai, $detail)
{
  $conn = connectdb();
  $sql = "INSERT INTO ts_sanpham (Img, TenSP, GiaCu, GiaHienTai, iddm, loaithuoc, detail) VALUES ('$Img', '$TenSP' , '$GiaCu', '$GiaHienTai', '$iddm', '$loaithuoc', '$detail')";
  // use exec() because no results are returned   
  $conn->exec($sql);
}
function getonesp($id)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM ts_sanpham WHERE id=:id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}
function updatesp($id, $TenSP, $loaithuoc, $GiaCu, $GiaHienTai, $detail)
{
  $conn = connectdb();
  $sql = "UPDATE ts_sanpham SET TenSP=:TenSP, loaithuoc=:loaithuoc, GiaCu=:GiaCu, GiaHienTai=:GiaHienTai, detail=:detail WHERE id=:id";
  // Prepare statement
  $stmt = $conn->prepare($sql);
  // Bind parameters
  $stmt->bindParam(':TenSP', $TenSP);
  $stmt->bindParam(':loaithuoc', $loaithuoc);
  $stmt->bindParam(':GiaCu', $GiaCu);
  $stmt->bindParam(':GiaHienTai', $GiaHienTai);
  $stmt->bindParam(':detail', $detail);
  $stmt->bindParam(':id', $id);
  // Execute the query            
  $stmt->execute();
}
function deletsp($id)
{
  $conn = connectdb();
  $sql = "DELETE FROM ts_sanpham WHERE id=" . $id;
  // use exec() because no result are returned
  $conn->exec($sql);
}

//=====================            Giao diện chính           =======================//

function get_sanpham_sale_home()
{
  $sql = "SELECT * FROM ts_sanpham WHERE GiaCu > 0 ORDER BY GiaCu DESC";
  return get_all($sql);
}

function sanpham_functionalfoods_home()
{

  $sql = "SELECT * FROM ts_sanpham WHERE 1 order by id DESC";
  return get_all($sql);
}

function loadall_sanpham_dssp()
{
  $sql = "SELECT * FROM ts_sanpham";
  return get_all($sql);
}

function get_sanpham_group()
{
  $sql = "SELECT * FROM ts_sanpham_group";
  return get_all($sql);
}

function sanpham_group_home()
{
  $sql = "SELECT * FROM ts_sanpham";
  return get_all($sql);
}

function get_show_dssp($dssp)
{
  $html_dssp_show = '';
  foreach ($dssp as $sp) {
    if ($sp['GiaCu'] > 0) {
      $giacu = '<div class="ProductItem_original-price">' . number_format($sp['GiaCu'], 0, ",", ".") . ' đ</div>';
    } else {
      $giacu = '<div class="ProductItem_original-price"> </div> ';
    }
    extract($sp);
    $link_dssp = "index.php?act=chi_tiet_san_pham&idsp=" . $id;
    $html_dssp_show .= '<div class="swiper-slide">
        <div class="ProductCarousel_item">
          <a class="ProductItem-info_container" href="' . $link_dssp . '">
            <div class="ProductItem-image">
              <img src="images/product/' . $Img . '" alt="san-pham">
            </div>
            <div class="ProductItem-content">
              <div class="ProductItem_title">
                ' . $TenSP . '
              </div>
              <div class="ProductItem-reviews">
                <strong>4.7</strong>
                <div class="rating-summary">
                  <i class="iconcmt-starbuy"></i>
                </div>
                <span>(' . $binhluan . ')</span>
              </div>
              ' . $giacu . ' 
              <div class="ProductItem_discount-price">
              <span>' . number_format($GiaHienTai, 0, ",", ".") . ' đ/<span class="ProductItem_discount-price-style">Hộp</span></span>
              </div>
              <button class="ProductItem_add-to-card">
                <form action="index.php?act=addcart" method="post">
                  <input type="hidden" value="' . $sp['id'] . '" name="id">
                  <input type="hidden" value="' . $sp['Img'] . '" name="Img">
                  <input type="hidden" value="' . $sp['TenSP'] . '" name="TenSP">
                  <input type="hidden" value="' . $sp['GiaCu'] . '" name="GiaCu">
                  <input type="hidden" value="' . $sp['GiaHienTai'] . '" name="GiaHienTai">
                  <input type="hidden" value="1" name="soluong">
                  <input type="submit" value="Thêm vào giỏ hàng" name="btnaddcart">
              </form>
          </button>
            </div>
          </a>
        </div>
        </div>';
  }
  return $html_dssp_show;
}
?>



<?php
require_once 'pdo.php';

function get_dssp_danhmuc($iddm, $limi)
{
  $sql = "SELECT * FROM ts_sanpham WHERE 1";
  if ($iddm > 0) {
    $sql .= " AND iddm=" . $iddm;
  }
  $sql .= " order by id DESC limit " . $limi;
  return pdo_query($sql);
}

function get_sp_by_id($id)
{
  $sql = "SELECT * from ts_sanpham where id=?";
  return pdo_query_one($sql, $id);
}

function get_sanpham_lienquan($iddm, $id)
{
  $sql = " SELECT * from ts_sanpham where iddm=? AND id<>? order by detail DESC ";
  return pdo_query($sql, $iddm, $id);
}
