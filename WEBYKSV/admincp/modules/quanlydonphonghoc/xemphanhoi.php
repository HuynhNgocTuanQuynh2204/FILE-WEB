<?php
      $id = $_GET['id'];
      $sql_pro_bd = "SELECT * FROM tbl_donphonghoc, tbl_dangky WHERE tbl_donphonghoc.id_user = tbl_dangky.id_dangky
       AND tbl_donphonghoc.id_donphonghoc = $id LIMIT 1";
       $query_pro_bd = mysqli_query($mysqli,$sql_pro_bd);

       $query_pro_bd_all = mysqli_query($mysqli,$sql_pro_bd);

       $row_bd_title = mysqli_fetch_array($query_pro_bd);
       
?>
<b><?php echo  $row_bd_title['tenkhachhang']  ?></b>: <?php echo  $row_bd_title['thoigian']  ?>
<div style="text-align: center; text-transform: uppercase; display: flex; justify-content: center;">
<h3>
    <?php echo $row_bd_title['sophong'] ?>
</h3>
</div>
<div class="row">
           <ul class="baiviet">
            <?php
               while($row_pro = mysqli_fetch_array($query_pro_bd_all)){
            ?>
             <li>
                <p class="title_product"> <?php  echo $row_pro['yeucau'] ?></p>
             </li>

             <?php
               }
               ?>
           </ul>
</div>
<p  style="text-align: center;padding: 15px 0px;"><a class="btn btn-danger" href="index.php?action=quanlybaidang&query=lietke"><-BACK</a></p>