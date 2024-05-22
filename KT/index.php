<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <?php
     include("config.php");
     include("menu.php");
    ?>
    <?php
      if(isset($_POST['nhapdiem'])){
        $ten =$_POST['tensinhvien'];
        $diem = $_POST['diem'];
        $sql = "INSERT INTO tbl_diem (tensv,diem) VALUES ('$ten',$diem)";
        $kq = mysqli_query($mysqli,$sql);
        echo "Lưu điểm thành công";
      }
    ?>
    <h1 style="text-align: center;text-transform: uppercase;font-weight: bold;">Nhập điểm cho sinh viên</h1>
            <table border="1px" width="50%" style="border-collapse: collapse;">
            <form method="POST" action="">
            <tr>
                <td>Tên sinh viên</td>
                <td><input type="text" name="tensinhvien" required></td>
            </tr>
            <tr>
                <td>Điểm số</td>
                <td><input type="text" name="diem" required></td>
            </tr>
            <tr>
                <td  colspan="2"><input type="submit" name="nhapdiem" value="Lưu"></td>
            </tr>
            </form>
            </table>
</body>
</html>