<?php
    $mysqli = new mysqli("localhost","root","","qldiem");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Kết nối lỗi: " . $mysqli -> connect_error;
    exit();
    }
?>