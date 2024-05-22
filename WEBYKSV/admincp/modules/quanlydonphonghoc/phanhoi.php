<?php
  $sql="SELECT * FROM tbl_donphonghoc,tbl_dangky WHERE tbl_donphonghoc.id_user = tbl_dangky.id_dangky AND  id_donphonghoc='$_GET[id]'";
  $kq = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_array($kq);
?>
<h6 style="text-align: center ;text-transform: uppercase;">Phản hồi sinh viên:<?php echo $row['tenkhachhang'] ?></h6>
<div class="container">
    <form action="index.php?action=quanlydonphonghoc&query=xuly&idph=<?php echo $row['id_donphonghoc'] ?>" method="POST">
        <div class="form-group">
            <label for="noidung">Lí do phản hồi</label>
            <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung"></textarea>
        </div>
        <div class="text-center">
             <input type="submit" class="btn btn-primary" name="phanhoi" value="Phản hồi">
        </div>
    </form>
</div>