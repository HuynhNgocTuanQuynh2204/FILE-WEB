<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 p-5">
            <h1><i class="fa fa-list-alt" aria-hidden="true"></i>Quản lý sản phẩm</h1>
        </div>
        <div class="row">
            <?php
            if (isset($_GET['idedit']) && ($_GET['idedit'] > 0)) {
            ?>
                <form class="sanpham_form-box" action="admin.php?act=quanly_sanpham" method="post" enctype="multipart/form-data">
                    <input type="file" name="Img" id="" value="<?php echo $kq_return[0]['Img']; ?>">
                    <input type="text" name="TenSP" id="" value="<?php echo $kq_return[0]['TenSP']; ?>">
                    <input type="text" name="loaithuoc" id="" value="<?php echo $kq_return[0]['loaithuoc']; ?>">
                    <input type="text" name="GiaCu" id="" value="<?php echo $kq_return[0]['GiaCu']; ?>">
                    <input type="text" name="GiaHienTai" id="" value="<?php echo $kq_return[0]['GiaHienTai']; ?>">
                    <input type="text" name="detail" id="" value="<?php echo $kq_return[0]['detail']; ?>">
                    <input type="hidden" name="id" id="" value="<?php echo $kq_return[0]['id']; ?>">
                    <input type="submit" name="capnhat" value="Cập nhật" class="danhmuc_submit">
                </form>

            <?php
            } else {
            ?>
                <form class="sanpham_form-box" action="admin.php?act=quanly_sanpham" method="post" enctype="multipart/form-data">
                    <input type="file" name="Img" id="" placeholder="Thêm hình ảnh sản phẩm">
                    <input type="text" name="TenSP" id="" placeholder="Nhập tên sản phẩm">
                    <select id="" name="iddm">
                        <option value="0">Chọn danh mục</option>
                        <?php
                        if (isset($dsdm)) {
                            foreach ($dsdm as $danhmuc) {
                                echo '<option value="' . $danhmuc['id'] . '">' . $danhmuc['TenDM'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                    <select id="" name="iddm_group">
                        <option value="0">Chọn nhóm danh mục</option>
                        <?php
                        if (isset($dsdm_group)) {
                            foreach ($dsdm_group as $danhmuc_group) {
                                echo '<option value="' . $danhmuc_group['id'] . '">' . $danhmuc_group['tenDM_group'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                    <input type="text" name="loaithuoc" id="" placeholder="Nhập loại thuốc">
                    <input type="text" name="GiaCu" id="" placeholder="Nhập giá sale">
                    <input type="text" name="GiaHienTai" id="" placeholder="Nhập giá hiện tại">
                    <input type="text" name="detail" id="" placeholder="Mô tả chi tiết sản phẩm">
                    <input type="submit" name="themmoi" value="Thêm mới" class="danhmuc_submit">
                </form>
            <?php } ?>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại danh mục</th>
                    <th>Loại thuốc</th>
                    <th>Giá cũ</th>
                    <th>Giá hiện tại</th>
                    <th>detail</th>
                    <th>Hành động</th>
                </tr>

                <?php
                if (isset($kq) && (count($kq) > 0)) {
                    $i = 1;
                    foreach ($kq as $item) {
                        echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $item['Img'] . '</td>
                        <td>' . $item['TenSP'] . '</td>
                        <td>' . $item['iddm'] . '</td>
                        <td>' . $item['loaithuoc'] . '</td>
                        <td>' . $item['GiaCu'] . ' đ</td>
                        <td>' . $item['GiaHienTai'] . ' đ</td>
                        <td>' . $item['detail'] . '</td>
                        <td><a href="admin.php?act=quanly_sanpham&idedit= ' . $item['id'] . '">Sửa</a>|<a href="admin.php?act=quanly_sanpham&iddel= ' . $item['id'] . '">Xóa</a></td>
                        <tr>';
                        $i++;
                    }
                }
                ?>

            </table>
        </div>
    </div>
</div>