<?php
$id_khachhang = $_SESSION['id_khachhang'];
$sql_lietke = "SELECT * FROM tbl_donphonghoc, tbl_dangky WHERE tbl_donphonghoc.id_user = tbl_dangky.id_dangky AND tbl_donphonghoc.id_user = '$id_khachhang' ORDER BY tbl_donphonghoc.id_donphonghoc DESC";
$query_lietke = mysqli_query($mysqli, $sql_lietke);
?>
<div class="container" style="margin: 20px auto;margin-left: 200px;">
    <div class="table-responsive">
          <table style="width: 100%;" border="1" style="border-collapse: collapse;">
            <tr>
              <th>ID</th>
              <th>Số phòng</th>
              <th>Hình ảnh</th>
              <th>Tình trạng</th>
              <th>Thời gian</th>
              <th>Quản lý</th>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke)) {
              $i++;
            ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['sophong'] ?></td>
                <td><img classs="img img-responsive" width="100%" height="150px" src="phonghoc/<?php echo $row['hinhanh'] ?>"></td>
                <td style="color:darkblue">
                <?php
                if ($row['tinhtrang'] == 1) {
                  echo '<b style="color:red">Đang chờ xét duyệt</b>';
                }else if($row['tinhtrang'] == 2){
                  echo '<b style="color: blueviolet">Đơn của bạn đã bị từ chối xử lý</b>';
                }
                else if($row['tinhtrang'] == 0) {
                  echo '<b style="color:darkblue">Đã duyệt đơn của bạn :<br>
                  <a style="margin-top:10px" class="btn btn-primary" href="index.php?quanly=chitietbaidang&id='.$row['id_donphonghoc'].'">Xem nội dung phản hồi từ phòng ban</a></b>
                   <a style="margin-top:10px" class="btn btn-primary" href="index.php?quanly=xulyvandephonghoc&idph='.$row['id_donphonghoc'].'">Xác nhận đã xử lí xong</a></b>';
                }else {
                  echo '<b style="color:#9932CC">Đơn phản hồi đã được giải quyết</b>';
                } 
                ?>
              </td>
                <td><?php echo $row['thoigian'] ?></td>
                <td><a href="index.php?quanly=xulyvandephonghoc&xoa=<?php echo $row['id_donphonghoc'] ?>" class="btn btn-danger">Xóa đơn</a><br><br>
                <a href="index.php?quanly=suadonphonghoc&id=<?php echo $row['id_donphonghoc'] ?>" class="btn btn-success">Sửa đơn</a><br><br>
                <a href="index.php?quanly=chitietbaidang&id=<?php echo $row['id_donphonghoc'] ?>" class="btn btn-info">Xem đơn</a>
              </td>
              </tr>
            <?php }
           ?>
          </table>
          </div>
</div>