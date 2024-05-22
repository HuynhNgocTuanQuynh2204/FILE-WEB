<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Thương mại</title>
</head>
<body>
    <div class="container">
        <h1>Nhập thông tin</h1>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "duongthao";
        $conn = new mysqli($servername, $username, $password, $dbname);

        $mahang = $tenbang = $dongia = $loaisanpham = "";

        if (isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
            $sql = "SELECT * FROM hang WHERE mahang='$edit_id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $mahang = $row['mahang'];
                $tenbang = $row['tenhang'];
                $dongia = $row['dongia'];
                $loaisanpham = $row['loai'];
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['themmoi'])) {
                $mahang = $_POST['mahang'];
                $tenbang = $_POST['tenbang'];
                $dongia = $_POST['dongia'];
                $loaisanpham = $_POST['loaisanpham'];
                $sql = "INSERT INTO hang (mahang, tenhang, dongia, loai) VALUES ('$mahang', '$tenbang', '$dongia', '$loaisanpham')";
                $conn->query($sql);
            }
            if (isset($_POST['sua'])) {
                $mahang = $_POST['mahang'];
                $tenbang = $_POST['tenbang'];
                $dongia = $_POST['dongia'];
                $loaisanpham = $_POST['loaisanpham'];
                $sql = "UPDATE hang SET tenhang='$tenbang', dongia='$dongia', loai='$loaisanpham' WHERE mahang='$mahang'";
                $conn->query($sql);
            }
        }
        ?>

        <form method="POST" action="">
            <label for="ma-hang">Mã hàng:</label>
            <input type="text" id="ma-hang" name="mahang" value="<?php echo $mahang; ?>">

            <label for="ten-bang">Tên bảng:</label>
            <input type="text" id="ten-bang" name="tenbang" value="<?php echo $tenbang; ?>">

            <label for="don-gia">Đơn giá:</label>
            <input type="text" id="don-gia" name="dongia" value="<?php echo $dongia; ?>">

            <label for="loai-san-pham">Loại sản phẩm:</label>
            <select id="loai-san-pham" name="loaisanpham">
                <option value="telephone" <?php if ($loaisanpham == "telephone") echo "selected"; ?>>Telephone</option>
                <option value="desktop" <?php if ($loaisanpham == "desktop") echo "selected"; ?>>Desktop</option>
                <option value="laptop" <?php if ($loaisanpham == "laptop") echo "selected"; ?>>Laptop</option>
            </select>

            <div class="button-group">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="submit" name="sua" value="Sửa">
            </div>
        </form>

        <?php
        $sql = "SELECT * FROM hang";
        $result = $conn->query($sql);
        ?>

        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã hàng</th>
                    <th>Tên bảng</th>
                    <th>Đơn giá</th>
                    <th>Loại hàng</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['mahang']; ?></td>
                        <td><?php echo $row['tenhang']; ?></td>
                        <td><?php echo $row['dongia']; ?></td>
                        <td><?php echo $row['loai']; ?></td>
                        <td><a href="?edit=<?php echo $row['mahang']; ?>">Edit</a></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
