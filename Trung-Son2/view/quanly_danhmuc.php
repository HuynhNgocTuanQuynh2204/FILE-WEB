<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 p-5">
            <h1><i class="fa fa-list-alt" aria-hidden="true"></i>Quản lý danh mục</h1>
        </div>
        <div class="row">
            <?php
            if (isset($_GET['idedit']) && ($_GET['idedit'] > 0)) {

            ?>
                <form class="danhmuc_form-box" action="admin.php?act=quanly_danhmuc" method="post">
                    <input type="text" name="TenDM" id="" value="<?php echo $kqone[0]['TenDM']; ?>">
                    <input type="text" name="parent_id" id="" value="<?php echo $kqone[0]['parent_id']; ?>">
                    <input type="hidden" name="id" id="" value="<?php echo $kqone[0]['id']; ?>">
                    <input type="submit" name="capnhat" value="Cập nhật" class="danhmuc_submit">
                </form>
            <?php
            } else {
            ?>
                <form class="danhmuc_form-box" action="admin.php?act=quanly_danhmuc" method="post">
                    <input type="text" name="TenDM" id="" placeholder="Nhập tên danh mục">
                    <input type="text" name="parent_id" id="" placeholder="Nhập loại danh mục">
                    <input type="submit" name="themmoi" value="Thêm mới" class="danhmuc_submit">
                </form>
            <?php } ?>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>parent_id</th>
                    <th>Hành động</th>
                </tr>
                <?php
                // var_dump($kq);
                ?>
                <?php
                if (isset($kq) && (count($kq) > 0)) {
                    $i = 1;
                    foreach ($kq as $dm) {
                        echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $dm['TenDM'] . '</td>
                            <td>' . $dm['parent_id'] . '</td>
                            <td><a href="admin.php?act=quanly_danhmuc&idedit= ' . $dm['id'] . '">Sửa</a>|<a href="admin.php?act=quanly_danhmuc&iddel= ' . $dm['id'] . '">Xóa</a></td>
                        </tr>';
                        $i++;
                    }
                }
                ?>

            </table>
        </div>
    </div>
</div>