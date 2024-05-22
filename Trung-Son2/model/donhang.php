<?php
function taodonhang($madh, $tongdonhang, $pt_thanhtoan, $hoten, $address, $email, $mobile)
{
    $conn = connectdb();
    $sql = "INSERT INTO ts_order (madh, tongdonhang, pt_thanhtoan, hoten, address, email, mobile)   
    VALUES ('" . $madh . "', '" . $tongdonhang . "' , '" . $pt_thanhtoan . "', '" . $hoten . "', '" . $address . "', '" . $email . "', '" . $mobile . "')";
    // use exec() because no results are returned   
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}

function addtocart($iddh, $idpro, $TenSP, $Img, $GiaCu, $GiaHienTai, $soluong)
{
    $conn = connectdb();
    $sql = "INSERT INTO ts_cart (iddh, idpro, TenSP, Img, GiaCu, GiaHienTai, soluong) 
    VALUES ('" . $iddh . "', '" . $idpro . "' , '" . $TenSP . "', '" . $Img . "', '" . $GiaCu . "', '" . $GiaHienTai . "', '" . $soluong . "')";
    $conn->exec($sql);
}

function getshowcart($iddh)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_cart WHERE iddh=" . $iddh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function getorderinfo($iddh)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_order WHERE id=" . $iddh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
