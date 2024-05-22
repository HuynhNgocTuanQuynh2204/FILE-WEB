<?php
if (!isset($_SESSION['id_khachhang'])) {
    echo '<script type="text/javascript">
            alert("Bạn cần đăng nhập mới có thể phản hồi");
            window.location.href = "index.php?quanly=dangnhap";
          </script>';
}
?>
<div class="div" style="padding-top: 20px;">
<select onchange="redirectPage(this)">
<option value="index.php?quanly=phanhoi">Về phòng học</option>
    <option value="index.php">Về việc học tập</option>
    <option value="index.php?quanly=phanhoi">Về thầy cô giáo</option>
</select>

<script>
    function redirectPage(selectElement) {
        var selectedValue = selectElement.value;
        window.location.href = selectedValue;
    }
</script>

</div>
<div class="container">
  <h3 class="text-center">FORM PHẢN HỒI VỀ PHÒNG HỌC</h3>
  <form method="POST" action="index.php?quanly=xulyvandephonghoc" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="sophong">Số phòng</label>
          <input type="text" class="form-control" id="sophong" name="sophong" required>
        </div>
        <div class="form-group">
          <label for="hinhanh">Hình ảnh</label>
          <input type="file" class="form-control-file" id="hinhanh" name="hinhanh" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="tomtat">Tóm tắt lí do phản hồi</label>
          <textarea class="form-control" id="tomtat" rows="5" style="resize: none;" name="tomtat"></textarea>
        </div>
        <div class="form-group">
          <label for="noidung">Nội dung mong muốn của sinh viên</label>
          <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung"></textarea>
        </div>
      </div>
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary" name="phanhoiphonghoc" value="Phản hồi">
    </div>
  </form>
</div>
