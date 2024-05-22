<?php
function getall_taikhoan()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function insert_taikhoan($img, $name, $mobile, $email, $gender, $address, $birthday, $level, $totalMoney, $points, $user, $password, $vaitro)
{
    $conn = connectdb();
    $sql = "INSERT INTO ts_user (img, name, mobile, email, gender, address, birthday, level, totalMoney, points, user, password, vaitro) VALUES ('$img', '$name' , '$mobile', '$email', '$gender', '$address', '$birthday', '$level', '$totalMoney', '$points', '$user', '$password', '$vaitro')";

    // use exec() because no results are returned   
    $conn->exec($sql);
}

function getone_user($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_user WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function update_user($img, $name, $mobile, $email, $gender, $address, $birthday, $level, $totalMoney, $points, $user, $password, $vaitro)

{
    $conn = connectdb();
    $sql = "UPDATE ts_user SET img=:img, name=:name, mobile=:mobile, email=:email, gender=:gender, address=:address, birthday=:birthday, level=:level, totalMoney=:totalMoney, points=:points, user=:user, password=:password, vaitro=:vaitro WHERE id=:id";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // Bind parameters
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':birthday', $birthday);
    $stmt->bindParam(':level', $level);
    $stmt->bindParam(':totalMoney', $totalMoney);
    $stmt->bindParam(':points', $points);
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':vaitro', $vaitro);
    // Execute the query
    $stmt->execute();
}

function delet_user($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM ts_user WHERE id=" . $id;
    // use exec() because no result are returned
    $conn->exec($sql);
}
