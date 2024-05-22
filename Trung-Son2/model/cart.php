<?php
require_once 'pdo.php';

function get_giohang(){
    $sql = "SELECT * from ts_giohang ";
    return pdo_query($sql);
}

?>