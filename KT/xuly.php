<?php
include("config.php");
  $ten = $_POST['tensinhvien'];
  $diem = $_POST['diem'];
  $id =$_GET['id'];
  if(isset($_POST['suadiem'])){
    $sql_update = "UPDATE tbl_diem SET tensv='". $ten."',diem='".$diem."' WHERE id='$_GET[id]'";
    mysqli_query($mysqli,$sql_update);
    header('location:hienthi.php');
  }else{
   $id =$_GET['id'];
   $sql_xoa = "DELETE FROM tbl_diem WHERE id='".$id."'";
   mysqli_query($mysqli,$sql_xoa);
   header('location:hienthi.php');
  }
?>