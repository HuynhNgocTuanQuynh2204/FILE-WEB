<?php
   require("carbon/autoload.php");
   use Carbon\Carbon;
   use Carbon\CarbonInterval;
   $now = Carbon::now('Asia/Ho_Chi_Minh');
   $now->format('Y-m-d H:i:s');
   $sophong = $_POST['sophong'];
    //xulyhinhanh
   $hinhanh = $_FILES['hinhanh']['name'];
   $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
   $hinhanh_time = time().'_'.$hinhanh;
   $tomtat = $_POST['tomtat'];
   $noidung = $_POST['noidung'];
   $tinhtrang = '1';
   $id_khachhang = $_SESSION['id_khachhang'];
   

  
   if(isset($_GET['idph'])){
      $id_donphonghoc = $_GET['idph'];
      $sql_update_tinhtrang = "UPDATE tbl_donphonghoc SET tinhtrang = '3' WHERE id_donphonghoc = '$id_donphonghoc'";
      $query_update_tinhtrang = mysqli_query($mysqli, $sql_update_tinhtrang);

if (!$query_update_tinhtrang) {
    echo "Lỗi khi cập nhật tình trạng: " . mysqli_error($mysqli);
} else {
   echo '<script type="text/javascript">alert("Cảm ơn bạn đã đã phản hồi!");    window.location.href = "index.php?quanly=quanlydonphonghoc"; </script>';
}


   }
   else if(isset($_POST['phanhoiphonghoc'])){
   //them
   $sql_them = "INSERT INTO tbl_donphonghoc(id_user,sophong,hinhanh,tomtat,yeucau,tinhtrang,thoigian) 
   VALUES('".$id_khachhang."','".$sophong."','".$hinhanh_time."','".$tomtat."','".$noidung."','".$tinhtrang."','".$now."')";
   mysqli_query($mysqli,$sql_them);
   move_uploaded_file($hinhanh_tmp,'phonghoc/'.$hinhanh_time);
   echo '<script type="text/javascript">alert("Cảm ơn bạn đã phản hồi.Phòng ban sẽ sớm xem xét!");    window.location.href = "index.php?quanly=quanlydonphonghoc"; </script>';
   }
   elseif (isset($_POST['suadonphonghoc'])){
            //sua
            if($hinhanh !=''){
               move_uploaded_file($hinhanh_tmp,'phonghoc/'.$hinhanh_time);       
               $sql_update = "UPDATE tbl_donphonghoc SET id_user='".$id_khachhang."', sophong='". $sophong."', hinhanh='". $hinhanh_time."', 
               tomtat='". $tomtat."', yeucau='". $noidung."', tinhtrang='". $tinhtrang
               ."', thoigian = '".$now."' WHERE id_donphonghoc='$_GET[id]'";
               $sql = "SELECT * FROM tbl_donphonghoc WHERE id_donphonghoc= '$_GET[id]' LIMIT 1";
               $query = mysqli_query($mysqli,$sql);
               while($row = mysqli_fetch_array($query)){
                  unlink('phonghoc/'.$row['hinhanh']);
               }
            }else{
               $sql_update = "UPDATE tbl_donphonghoc SET sophong='". $sophong."'
               , tomtat='". $tomtat."', yeucau='". $noidung."', tinhtrang='". $tinhtrang
               ."',thoigian='". $now."' WHERE id_donphonghoc='$_GET[id]'";
            }
            mysqli_query($mysqli,$sql_update);
            echo '<script type="text/javascript">alert("Cảm ơn bạn đã phản hồi.Phòng ban sẽ sớm xem xét!");    window.location.href = "index.php?quanly=quanlydonphonghoc"; </script>';
  }else{
      $id = $_GET['xoa'];
      $sql = "SELECT * FROM tbl_donphonghoc WHERE id_donphonghoc = '$id' LIMIT 1";
      $query = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_array($query)){
         unlink('phonghoc/'.$row['hinhanh']);
      }
      $sql_xoa = "DELETE FROM tbl_donphonghoc WHERE id_donphonghoc='".$id."'";
      mysqli_query($mysqli,$sql_xoa);
      echo '<script type="text/javascript">alert("Phản hồi của bạn đã được xóa");    window.location.href = "index.php?quanly=quanlydonphonghoc"; </script>';
   }
   
   ?>