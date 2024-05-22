<?php
function getall_dm()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_danhmucsp WHERE parent_id IS NULL OR parent_id = '' OR parent_id >= 0 ORDER BY parent_id");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function themdm($TenDM, $parent_id)
{
    $conn = connectdb();
    $sql = "INSERT INTO ts_danhmucsp (TenDM , parent_id) VALUES ('$TenDM', '$parent_id')";
    // use exec() because no results are returned   
    $conn->exec($sql);
}

function updatedm($id, $TenDM, $parent_id)
{
    $conn = connectdb();
    $sql = "UPDATE ts_danhmucsp SET TenDM=:TenDM, parent_id=:parent_id WHERE id=:id";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // Bind parameters
    $stmt->bindParam(':TenDM', $TenDM);
    $stmt->bindParam(':parent_id', $parent_id);
    $stmt->bindParam(':id', $id);
    // Execute the query
    $stmt->execute();
}
function getinfodm($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_danhmucsp where id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function getonedm($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_danhmucsp WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function deletdm($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM ts_danhmucsp WHERE id=" . $id;
    // use exec() because no result are returned
    $conn->exec($sql);
}

//=====================            Giao diện chính           =======================//
function get_Danhmuc_parent_home()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_danhmucsp WHERE parent_id='NULL'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function get_Children_by_ParentID($parentID)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_danhmucsp WHERE parent_id = :parentID");
    $stmt->bindParam(':parentID', $parentID);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function get_danhmuc_group()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_danhmuc_group");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function load_danhmuc_by_dssp($iddm)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT parent_id FROM ts_danhmucsp, ts_sanpham WHERE iddm = :iddm");
    $stmt->bindParam(':iddm', $iddm);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $parent_id = $result['parent_id'];
    return $parent_id;
}
function load_danhmuc_danhsachsp($iddm)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT ts_sanpham.*, ts_danhmuc_group.tenDM_group, ts_danhmucsp.TenDM FROM ts_sanpham JOIN
     ts_danhmuc_group ON ts_sanpham.iddm_group = ts_danhmuc_group.id JOIN ts_danhmucsp ON ts_sanpham.iddm = ts_danhmucsp.id
      WHERE ts_danhmucsp.id = :iddm");
    $stmt->execute([':iddm' => $iddm]);
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq[$iddm] ?? null;
}
function get_tag_danhsachsp()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ts_sanpham");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
