<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    .menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.menu > li {
    display: inline-block;
    position: relative;
}

.menu a {
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    color: #333;
}

.menu a:hover {
    background-color: #f4f4f4;
}

.submenu {
    display: none;
    position: absolute;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.menu > li:hover .submenu {
    display: block;
}

.submenu li {
    display: block;
}

.submenu li a {
    padding: 8px 15px;
}

.submenu li a:hover {
    background-color: #f4f4f4;
}

</style>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "menu";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Lấy dữ liệu từ bảng menu_cha
    $sql = "SELECT * FROM menu_cha";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Hiển thị menu cha
        echo "<ul class='menu'>";
        while($row = $result->fetch_assoc()) {
            echo "<li><a href='#'>" . $row["ten"] . "</a>";

            // Kiểm tra xem menu cha có menu con không
            $id_cha = $row["id_cha"];
            $sql_menu_con = "SELECT * FROM menu_con WHERE id_cha = $id_cha";
            $result_menu_con = $conn->query($sql_menu_con);

            if ($result_menu_con->num_rows > 0) {
                // Hiển thị menu con
                echo "<ul class='submenu'>";
                while($row_menu_con = $result_menu_con->fetch_assoc()) {
                    echo "<li><a href='#'>" . $row_menu_con["tencon"] . "</a></li>";
                }
                echo "</ul>";
            }
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>
