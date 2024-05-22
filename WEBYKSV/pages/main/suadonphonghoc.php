<?php
 $sql_sua = "SELECT * FROM tbl_donphonghoc WHERE id_donphonghoc = '$_GET[id]' LIMIT 1";
 $query_sua =   mysqli_query($mysqli,$sql_sua);
?>
<div class="container">
  <h3 class="text-center"> SỬA FORM PHẢN HỒI VỀ PHÒNG HỌC</h3>
  <?php
   while($row = mysqli_fetch_array($query_sua)){
   ?>
  <form method="POST" action="index.php?quanly=xulyvandephonghoc&id=<?php echo  $_GET['id'] ?>" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="sophong">Số phòng</label>
          <input type="text" class="form-control" id="sophong" name="sophong" value="<?php echo $row['sophong']  ?>" required>
        </div>
        <div class="form-group">
          <label for="hinhanh">Hình ảnh</label>
          <input type="file" name="hinhanh">
          <img src="uploads/<?php echo $row['hinhanh'] ?>" width="150px">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="tomtat">Tóm tắt</label>
          <textarea class="form-control" id="tomtat" rows="5" style="resize: none;" name="tomtat" ><?php echo $row['tomtat']  ?></textarea>
        </div>
        <div class="form-group">
          <label for="noidung">Nội dung</label>
          <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung" ><?php echo $row['yeucau']  ?></textarea>
        </div>
      </div>
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary" name="suadonphonghoc" value="Sửa phản hồi">
    </div>
  </form>
  <?php
}
?>
</div>
