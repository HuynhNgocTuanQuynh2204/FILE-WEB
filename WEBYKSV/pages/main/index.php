<h1>Xin chào:<?php if(isset($_SESSION['dangnhap'])) {
    echo $_SESSION['name'];
    }else if(isset($_SESSION['dangky'])) {
        echo $_SESSION['dangky'];
    }?></h1>