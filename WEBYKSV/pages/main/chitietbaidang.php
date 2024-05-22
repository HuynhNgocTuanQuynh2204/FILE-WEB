<?php
      $sql_pro = "SELECT * FROM tbl_donphonghoc, tbl_dangky WHERE tbl_donphonghoc.id_user = tbl_dangky.id_dangky
       AND tbl_donphonghoc.id_donphonghoc = '$_GET[id]' LIMIT 1";

       $query_pro = mysqli_query($mysqli,$sql_pro);
       $row_bd_title = mysqli_fetch_array($query_pro);
       
       $sql_dv = "SELECT * FROM tbl_phanhoidonphonghoc, tbl_admin WHERE tbl_phanhoidonphonghoc.id_user = tbl_admin.id_admin AND 
       tbl_phanhoidonphonghoc.id_phanhoidonphonghoc = '$_GET[id]'";

       $query_dv = mysqli_query($mysqli,$sql_dv);
       $row_dv = mysqli_fetch_array($query_dv);
       
?>
<b><?php echo  $row_bd_title['tenkhachhang']  ?></b>: <?php echo  $row_bd_title['thoigian']  ?> 
<p  style="text-align: center;padding: 15px 0px;"><a class="btn btn-danger" href="index.php?quanly=quanlybaidang"><-BACK</a></p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                    <h3  style="text-align: center; text-transform: uppercase; display: flex; justify-content: center;" >
                    Phòng:
                       <?php echo $row_bd_title['sophong'] ?>
                    </h3>
                    </div>
                    <div class="card-body">
                        <h5>Tóm tắt lí do phản hồi : </h5>
                    <?php echo $row_bd_title['tomtat'] ?>
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5>Yêu cầu về phía nhà trường :</h5>
                    <?php echo $row_bd_title['yeucau'] ?>
                       

                    </div>
                  </div>
            </div>
        </div>
    </div>
 </div>
 <h3 class="text-center" style="padding-top: 20px;">Phản hồi của nhà trường</h3>
 <?php
$sql_dv = "SELECT * FROM tbl_phanhoidonphonghoc, tbl_admin WHERE tbl_phanhoidonphonghoc.id_user = tbl_admin.id_admin AND tbl_phanhoidonphonghoc.id_donphonghoc = '$_GET[id]'";
$query_dv = mysqli_query($mysqli, $sql_dv);
$row_dv = mysqli_fetch_array($query_dv);

if ($row_dv) { // Kiểm tra xem có dữ liệu trả về hay không
?>
    
    <b><?php echo $row_dv['name'] ?></b>: <?php echo $row_dv['thoigian'] ?>
    <p style="text-align: center;padding: 15px 0px;"><a class="btn btn-danger" href="index.php?quanly=quanlybaidang"><-BACK</a></p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h5>Yêu cầu về phía nhà trường :</h5>
                        <?php echo $row_dv['noidung'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
} else {
    echo "<p style='text-align: center;color:#FF00FF;'>Không có dữ liệu phản hồi.</p>";
}
?>
