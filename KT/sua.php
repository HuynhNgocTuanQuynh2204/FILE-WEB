<?php
 include("config.php");
 include("menu.php");
 $sql_sua = "SELECT * FROM tbl_diem WHERE id= '$_GET[id]' LIMIT 1";
 $query_sua =   mysqli_query($mysqli,$sql_sua);
?>
<h1 style="text-align: center;text-transform: uppercase;font-weight: bold;">Sửa điểm</h1>
            <table border="1px" width="50%" style="border-collapse: collapse;">
            <form method="POST" action="xuly.php?id=<?php echo  $_GET['id'] ?>">
            <?php
                    while ($dong = mysqli_fetch_array($query_sua)){
            ?>
            <tr>
                <td>Tên sinh viên</td>
                <td><input type="text" name="tensinhvien" value="<?php echo $dong['tensv']; ?>" ></td>
            </tr>
            <tr>
                <td>Điểm số</td>
                <td><input type="text" name="diem"  value="<?php echo $dong['diem']; ?>"></td>
            </tr>
            <tr>
                <td  colspan="2"><input type="submit" name="suadiem" value="Sửa"></td>
            </tr>
            <?php
                    }
                    ?>
            </form>
            </table>