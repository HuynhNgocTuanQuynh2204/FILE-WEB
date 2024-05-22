<?php
include("config.php");
include("menu.php");
 $sql_lietke = "SELECT * FROM tbl_diem ORDER BY id DESC";
 $query_lietke =   mysqli_query($mysqli,$sql_lietke);
?>
<h1 style="text-align: center;text-transform: uppercase;font-weight: bold;">Danh sách sinh viên có điểm</h1>
<table style="width: 100%;" border="1" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên sinh viên</th>
    <th>Điểm</th>
    <th>Quản lý</th>
    
  </tr>
  <?php 
    $i=0;
    while($row = mysqli_fetch_array($query_lietke)){
      $i++;  
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensv'] ?></td> 
    <td><?php echo $row['diem'] ?></td>
    <td><a  href="xuly.php?id=<?php echo  $row['id']?>">Xóa</a> | 
    <a   href="sua.php?id=<?php echo  $row['id']?>">Sửa</a></td>
  </tr>
  <?php } ?>
</table>