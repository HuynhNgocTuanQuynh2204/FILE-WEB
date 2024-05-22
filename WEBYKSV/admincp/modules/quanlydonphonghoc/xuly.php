<?php
require("carbon/autoload.php");
 use Carbon\Carbon;

$now = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
if(isset($_GET['tinhtrang']) && isset($_GET['id'])){
    $tinhtrang = $_GET['tinhtrang'];
    $id = $_GET['id'];

    $sql = "UPDATE tbl_donphonghoc SET tinhtrang = '$tinhtrang' WHERE id_donphonghoc = '$id'";
    $sql_query = mysqli_query($mysqli, $sql);
    header('location:index.php?action=quanlydonphonghoc&query=lietke');
} else if(isset($_POST['phanhoi'])){
    $id_donphonghoc = $_GET['idph'];
    $id_user =  $_SESSION['id_admin'];
    $noidung = $_POST['noidung'];
    $sql_phanhoi = "INSERT INTO tbl_phanhoidonphonghoc (id_user,id_donphonghoc,tinhtrang,noidung,thoigian) VALUES ($id_user,$id_donphonghoc,'1','$noidung','".$now."')";
    $qr = mysqli_query($mysqli,$sql_phanhoi);

    if($qr >0){
        echo '<script type="text/javascript">alert("Phản hồi thành công");    window.location.href = "index.php?action=quanlydonphonghoc&query=lietke"; </script>';
    }

}
?>