<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 p-5">
            <h1><i class="fa fa-user" aria-hidden="true"></i>Quản lý tài khoản</h1>
        </div>
        <div class="row">
            <?php
            if (isset($_GET['idedit']) && ($_GET['idedit'] > 0)) {
            ?>
                <form class="taikhoan_form-box" action="admin.php?act=quanly_taikhoan" method="post" enctype="multipart/form-data">
                    <input type="file" name="img" id="" value="<?php echo $kq_user[0]['img']; ?>">
                    <input type="text" name="name" id="" value="<?php echo $kq_user[0]['name']; ?>">
                    <input type="text" name="mobile" id="" value="<?php echo $kq_user[0]['mobile']; ?>">
                    <input type="text" name="email" id="" value="<?php echo $kq_user[0]['email']; ?>">
                    <input type="text" name="gender" id="" value="<?php echo $kq_user[0]['gender']; ?>">
                    <input type="text" name="address" id="" value="<?php echo $kq_user[0]['address']; ?>">
                    <input type="date" name="birthday" id="" value="<?php echo $kq_user[0]['birthday']; ?>">
                    <input type="text" name="level" id="" value="<?php echo $kq_user[0]['level']; ?>">
                    <input type="text" name="totalMoney" id="" value="<?php echo $kq_user[0]['totalMoney']; ?>">
                    <input type="text" name="points" id="" value="<?php echo $kq_user[0]['points']; ?>">
                    <input type="text" name="user" id="" value="<?php echo $kq_user[0]['user']; ?>">
                    <input type="password" name="password" id="" value="<?php echo $kq_user[0]['password']; ?>">
                    <input type="text" name="vaitro" id="" value="<?php echo $kq_user[0]['vaitro']; ?>">
                    <input type="hidden" name="id" id="" value="<?php echo $kq_user[0]['id']; ?>">
                    <input type="submit" name="capnhat" value="Cập nhật" class="danhmuc_submit">
                </form>
            <?php
            } else {
            ?>
                <form class="taikhoan_form-box" action="admin.php?act=quanly_taikhoan" method="post" enctype="multipart/form-data">
                    <input type="file" name="img" id="">
                    <input type="text" name="name" placeholder="Nhập họ tên khách hàng" id="">
                    <input type="text" name="mobile" placeholder="Vui lòng nhập SĐT" id="">
                    <input type="text" name="email" placeholder="Vui lòng nhập email" id="">
                    <input type="text" name="gender" id="">
                    <input type="text" name="address" placeholder="Vui lòng nhập địa chỉ" id="">
                    <input type="date" name="birthday" id="">
                    <input type="text" name="level" id="" placeholder="Cấp độ khách hàng">
                    <input type="text" name="totalMoney" id="" placeholder="Tổng số tiền khách mua hàng">
                    <input type="text" name="points" id="" placeholder="Tổng tích điểm của khách hàng">
                    <input type="text" name="user" placeholder="Vui lòng nhập tên user" id="">
                    <input type="password" name="password" placeholder="Vui lòng điền password" id="">
                    <input type="text" name="vaitro" placeholder="Chọn vai trò" id="">
                    <input type="submit" name="themmoi" value="Thêm mới" class="danhmuc_submit">
                </form>
            <?php } ?>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Ảnh đại diện</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Ngày sinh</th>
                    <th>Cấp độ khách hàng</th>
                    <th>Tổng số tiền khách mua hàng</th>
                    <th>Tổng tích điểm của khách hàng</th>
                    <th>Tên tài khoản</th>
                    <th>Password</th>
                    <th>Vai trò</th>
                </tr>

                <?php
                if (isset($kq_user) && (count($kq_user) > 0)) {
                    $i = 1;
                    foreach ($kq_user as $tk) {
                        echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $tk['img'] . '</td>
                            <td>' . $tk['name'] . '</td>
                            <td>' . $tk['mobile'] . '</td>
                            <td>' . $tk['email'] . '</td>
                            <td>' . $tk['gender'] . '</td>
                            <td>' . $tk['address'] . '</td>
                            <td>' . $tk['birthday'] . '</td>
                            <td>' . $tk['level'] . '</td>
                            <td>' . $tk['totalMoney'] . '</td>
                            <td>' . $tk['points'] . '</td>
                            <td>' . $tk['user'] . '</td>
                            <td>' . $tk['password'] . '</td>
                            <td>' . $tk['vaitro'] . '</td>
                            <td><a href="admin.php?act=quanly_taikhoan&idedit=' . $tk['id'] . '">Sửa</a>|<a href="admin.php?act=quanly_taikhoan&iddel= ' . $tk['id'] . '">Xóa</a></td>
                        </tr>';
                        $i++;
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>