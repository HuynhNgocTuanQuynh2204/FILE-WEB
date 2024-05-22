<div class="quanlybaidang">
<h3 style="text-align: center;text-transform: uppercase;font-weight: bold;">ĐƠN PHẢN HỒI CHỜ DUYỆT</h3>
<?php
 $sql_lietke_bd = "SELECT * FROM tbl_donphonghoc,tbl_dangky WHERE tbl_donphonghoc.id_user = tbl_dangky.id_dangky ORDER BY tbl_donphonghoc.id_donphonghoc DESC";
 $query_lietke_bd =   mysqli_query($mysqli,$sql_lietke_bd);
 
?>

<table style="width: 100%;" border="1" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên người phản hồi</th>
    <th>Số phòng</th>
    <th>Ngày phản hồi</th>
    <th>Tình trạng</th>
    <th>Quyết định</th>
    <th>Quản lý</th>
  </tr>
  <?php 
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_bd)){
      $i++;
      if($row['tinhtrang'] == '1'){  
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td> 
    <td><?php echo $row['sophong'] ?></td> 
    <td><?php echo $row['thoigian'] ?></td>
    <td>Chờ xét duyêt</td>
    <td>
        <?php
            echo '<a class="btn btn-info" href="index.php?action=quanlydonphonghoc&query=xuly&tinhtrang=0&id='.$row['id_donphonghoc'].'">Duyệt đơn</a>
            || <a class ="btn btn-primary" href="index.php?action=quanlydonphonghoc&query=xuly&tinhtrang=2&id='.$row['id_donphonghoc'].'">Không duyệt</a>';
        ?>
    </td>
    <td> <a  class="btn btn-success" href="index.php?action=quanlydonphonghoc&query=xemphanhoi&id=<?php echo  $row['id_donphonghoc']?>">Xem phản hồi</a><br>
    <a  class="btn btn-danger" href="index.php?action=quanlydonphonghoc&query=phanhoi&id=<?php echo  $row['id_donphonghoc']?>">Phản hồi</a></td>
  </tr>
 
  <?php }} ?>
</table>
</div>
<div class="quanlybaidang">
<h3 style="text-align: center;text-transform: uppercase;font-weight: bold;">Phản hồi đã duyệt</h3>
<?php
 $sql_lietke_da_duyet = "SELECT * FROM tbl_donphonghoc,tbl_dangky WHERE tbl_donphonghoc.id_user = tbl_dangky.id_dangky  ORDER BY tbl_donphonghoc.id_donphonghoc DESC";
 $query_lietke_da_duyet =   mysqli_query($mysqli,$sql_lietke_da_duyet);
?>
<table style="width: 100%;" border="1" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên người đăng</th>
    <th>Số phòng</th>
    <th>Ngày phản hồi</th>
    <th>Tình trạng</th>
    <th>Quản lý</th>
  </tr>
  <?php 
    $i=0;
    while($row_dd = mysqli_fetch_array($query_lietke_da_duyet)){
      $i++;
      if($row_dd['tinhtrang'] == '0' || $row_dd['tinhtrang'] == '3'){  
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row_dd['tenkhachhang'] ?></td> 
    <td><?php echo $row_dd['sophong'] ?></td> 
    <td><?php echo $row_dd['thoigian'] ?></td>
    <td><?php 
     if($row_dd['tinhtrang'] == '0'){
      echo '<b style="color:darkblue">Đã duyệt đơn của bạn </b>'; 
     } else  if($row_dd['tinhtrang'] == '3'){
      echo '<b style="color:#F08080">Phản hồi đã được xác nhận giải quyết xong</b>'; 
     }
    ?></td>
    <td> <a  class="btn btn-success"  href="index.php?action=quanlydonphonghoc&query=xemphanhoi&id=<?php echo  $row_dd['id_donphonghoc']?>">Xem phản hồi</a></td>
 
  <?php }} ?>
</table>
</div>
<div class="quanlybaidang">
<h3  style="text-align: center;text-transform: uppercase;font-weight: bold;">Bài đăng đã hủy</h3>
<?php
 $sql_lietke_da_huy = "SELECT * FROM tbl_donphonghoc,tbl_dangky WHERE tbl_donphonghoc.id_user = tbl_dangky.id_dangky AND tbl_donphonghoc.tinhtrang = '2' ORDER BY tbl_donphonghoc.id_donphonghoc DESC";
 $query_lietke_da_huy =   mysqli_query($mysqli,$sql_lietke_da_huy);
?>
<table style="width: 100%;" border="1" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên người đăng</th>
    <th>Số phòng</th>
    <th>Ngày phản hồi</th>
    <th>Tình trạng</th>
    <th>Quản lý</th>
  </tr>
  <?php 
    $i=0;
    while($row_dh = mysqli_fetch_array($query_lietke_da_huy)){
      $i++;
      if($row_dh['tinhtrang'] == '2'){  
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row_dh['tenkhachhang'] ?></td> 
    <td><?php echo $row_dh['sophong'] ?></td> 
    <td><?php echo $row_dh['thoigian'] ?></td>
    <td>Đã hủy bài viết</td>
    <td>
    <td> <a  class="btn btn-success"  href="index.php?action=quanlydonphonghoc&query=xemphanhoi&id=<?php echo  $row_dd['id_donphonghoc']?>">Xem phản hồi</a></td>
    </td>
  </tr>
 
  <?php }} ?>
</table>
</div>
<style>
    div.quanlybaidang{
        padding: 10px 0px;
    }
</style>