<div class="container-fluid">
    <div class="row">

    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <div class="maincontent">
          <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='phanhoi'){
                include("main/phanhoi.php");
            }
            elseif($tam =='quenmatkhau'){
                include("main/quenmatkhau.php");
            }
            elseif($tam =='datlaimatkhau'){
                include("main/datlaimatkhau.php");
            }
            elseif($tam =='quanlytaikhoan'){
                include("main/quanlytaikhoan.php");
            }
            else if($tam =='dangky'){
                include("main/dangky.php");
            }else if($tam =='dangnhap'){
                include("main/dangnhap.php");

            }else if($tam =='timkiem'){
                include("main/timkiem.php");

            }else if($tam =='xulyvandephonghoc'){
                include("main/xulyvandephonghoc.php");

            }else if($tam =='quanlydonphonghoc'){
                include("main/quanlydonphonghoc.php");

            }else if($tam =='chitietbaidang'){
                include("main/chitietbaidang.php");

            }else if($tam =='suadonphonghoc'){
                include("main/suadonphonghoc.php");


            }else if($tam =='thaydoimatkhau'){
                include("main/thaydoimatkhau.php");

            } else {
                include("main/index.php");
            }
          ?>
        </div>
    </div>
    </div>
        <div class="clear"></div>
        <div class="clear"></div>
<div class="main">
<?php
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $query = $_GET['query'];
            } else {
                $tam = '';
                $query = '';
            }
            if($tam =='quanlydanhmucsanpham' && $query == 'them'){
                include("modules/quanlydanhmucsanpham/them.php");
                include("modules/quanlydanhmucsanpham/lietke.php");

            }
            else if($tam =='quanlydonphonghoc' && $query == 'phanhoi'){
                include("admincp/modules/quanlydonphonghoc/phanhoi.php");
            }

            else if($tam =='quanlydonphonghoc' && $query == 'xemphanhoi'){
                include("admincp/modules/quanlydonphonghoc/xemphanhoi.php");
            }

            else if($tam =='quanlydonphonghoc' && $query == 'xuly'){
                include("admincp/modules/quanlydonphonghoc/xuly.php");
            }

            else if($tam =='quanlydonphonghoc' && $query == 'lietke'){
                include("admincp/modules/quanlydonphonghoc/lietke.php");
            }
            else if($tam =='timkiem' && $query =='timkiem'){
                include("modules/timkiem/timkiem.php");
            }
          ?>
</div>
</div>