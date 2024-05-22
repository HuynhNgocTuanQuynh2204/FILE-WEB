<link rel="stylesheet" href="CSS/dangnhap.css">
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
        unset($_SESSION['email']);
        unset($_SESSION['id_khachhang']);
        unset($_SESSION['dangnhap']);
        unset($_SESSION['name']);
        unset($_SESSION['id_admin']);
        unset($_SESSION['level']);
        header('location:index.php?quanly=dangnhap');
    }
?>
<style>
 .fixed-menu {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
  
}
.bell-icon {
      color: #FF0000; 
    }
    .dropdown-menu {
      display: none;
    }
    .notification-item {
      cursor: pointer;
    }

</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;" >
  <a class="navbar-brand" href="index.php"><i class="fa-solid fa-user-secret"></i> SECURITY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
      <?php
        if(isset($_SESSION['dangky']) ){
            ?>
      <li class="nav-item"><a class="nav-link" href="index.php?quanly=phanhoi">Phản hồi</a></li>
      <?php
        } else if(isset($_SESSION['dangnhap'])) {
        ?>
        <li class="nav-item"><a class="nav-link" href="index.php?action=quanlydonphonghoc&query=lietke">Đơn phản hồi</a></li>
        <?php
        }
        ?>
      <?php
        if(isset($_SESSION['dangky']) || isset($_SESSION['dangnhap'])){
            ?><?php
            if(isset($_SESSION['dangky']) ){?>
              <li class="nav-item"><a class="nav-link" href="index.php?quanly=quanlydonphonghoc">Quản lý form phản hồi</a></li>
              <?php
            }
            ?>
                <li class="nav-item"><a class="nav-link" href="index.php?dangxuat=1">Đăng xuất</a></li>
               <?php
        } else{?>
                <li class="nav-item"><a class="nav-link" href="index.php?quanly=dangnhap">Đăng nhập</a></li>
        <?php
        }
        ?>

    </ul>
    <br>
    <form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem" method="POST">
      <input class="form-control mr-sm-2" type="search" name="tukhoa" placeholder="Từ khóa..." aria-label="Search" required>
      <button class="btn btn-outline-success my-2 my-sm-0" name="timkiem" type="submit">Tìm kiếm</button>
    </form>
  </div>
</nav>


