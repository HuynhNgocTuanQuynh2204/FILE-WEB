<?php
$html_dsdanhmuc = '';
$children = load_danhmuc_danhsachsp($iddm);
if ($children !== null) {
    foreach ($children as $danhmuc_dssp) {
        extract($danhmuc_dssp);
        $linkdm = "index.php?act=danh_sach_san_pham&iddm=" . $id;
        $html_dsdanhmuc .= '<a href="' . $linkdm . '" class="CategoryProduct-item__link"><i class="iconcmt-Arrow_Right"></i>' . $TenDM . '</a>';
    }
} else {
    // Xử lý khi không có dữ liệu
    $html_dsdanhmuc = 'Không tìm thấy danh mục sản phẩm tương ứng';
}

$html_dssp_danhmuc = '';
$loaddssp_danhmuc = get_dssp_danhmuc($iddm, 10);
foreach ($loaddssp_danhmuc as $sp) {
    if ($sp['GiaCu'] > 0) {
        $giacu = '<div class="productItem_original-price">' . number_format($sp['GiaCu'], 0, ",", ".") . ' đ</div>';
    } else {
        $giacu = '<div class="productItem_original-price"> </div> ';
    }
    extract($sp);
    $linksp_dssp = "index.php?act=chi_tiet_san_pham&idsp=" . $id;
    $html_dssp_danhmuc .= ' <div class="ProductItem_product-item">
        <div class="SaleProduct_discount-percent">
            -20%
        </div>
        <div class="porduct-loop-img">
            <img src="images/product/' . $sp['Img'] . '" alt="san-pham">
        </div>
        <div class="product-content">
            <div class="ProductItem_title">
                <a title="" href="' . $linksp_dssp . '">
                    <h3 class="Product-name">' . $sp['TenSP'] . '</h3>
                </a>
            </div>
            <div class="product-reviews">
                <strong>4.7</strong>
                <div class="rating-summary">
                    <i class="iconcmt-starbuy"></i>
                </div>
                <span>(' . $sp['binhluan'] . ')</span>
            </div>
            ' . $giacu . '
            <div class="productItem_discount-price">
                <div class="productItem_discount-price-style">'  . number_format($sp['GiaHienTai'], 0, ",", ".") . '</div>
                <div class="product_specifications"> <span style="margin: 0px 0px 0px 6px; font-weight: 600;">đ/</span>Hộp
                </div>
            </div>
            <button class="ProductItem_add-to-card">
                <form action="index.php?act=addcart" method="post">
                    <input type="hidden" value="' . $sp['id'] . '" name="id">
                    <input type="hidden" value="' . $sp['Img'] . '" name="Img">
                    <input type="hidden" value="' . $sp['TenSP'] . '" name="TenSP">
                    <input type="hidden" value="' . $sp['GiaCu'] . '" name="GiaCu">
                    <input type="hidden" value="' . $sp['GiaHienTai'] . '" name="GiaHienTai">
                    <input type="hidden" value="1" name="soluong">
                    <input type="submit" value="Thêm vào giỏ hàng" name="btnaddcart">
                </form>
            </button>
        </div>
</div>';
}

?>
<div class="Category_category-page__ioZ0P">
    <div class="container">
        <div class="ant-breadcrumb">
            <ol class="ant-breadcrumb-ol">
                <li class="ant-breadcrumb-li">
                    <a href="index.php">Trang chủ</a>
                    <i class="iconcmt-Arrow_Right"></i>
                </li>
                <li class="ant-breadcrumb-li">
                    <?php
                    echo '<span> ' . $TenDM . ' </span>';
                    ?>
                </li>
            </ol>
        </div>

        <div class="id-category-product-list">
            <div class="CategoryProduct_aside">
                <div class="CategoryProduct_aside_body">
                    <div class="CategoryProduct_aside_body-title">
                        <!-- <h3>Thuốc</h3> -->
                        <?php
                        echo '<h3> ' . $TenDM . ' </h3>';
                        ?>
                    </div>
                    <div class="CategoryProduct_aside_body-box">
                        <div class="CategoryProduct_aside_body-box-content">
                            <?= $html_dsdanhmuc; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="CategoryBody_product">
                <div class="CategoryBody_product-header-CB7ph">
                    <div class="CategoryBody_product-header-title">
                        <h3>Danh sách sản phẩm</h3>
                        <div class="filter-sorter sorter">
                            <label class="sorter-label" for="sorter">Sắp xếp:</label>
                            <select id="sorter" data-role="sorter" class="sorter-options">
                                <option value="price-asc">Giá tăng dần </option>
                                <option value="price-desc">Giá giảm dần </option>
                                <option value="bestsellers">Bán chạy </option>
                                <option value="created_at-desc">Hàng mới </option>
                            </select>
                        </div>
                    </div>
                    <div class="Advanced-filters">
                        <span class="filter-sort__title">Lọc theo:</span>
                        <div class="filter-module-container">
                            <div class="warpper-filfer">
                                <button class="btn_filter-options-item" onclick="toggleDiv(1)">Thương hiệu <i class="fa-solid fa-chevron-down"></i></button>
                                <div class="filter_group_item-content" id="div1">
                                    <div class="filter-options-list_content">
                                        <div class="FilterItem_list-sreach">
                                            <i class="iconcmt-sreach"></i>
                                            <input type="text" class="search-input" placeholder="Tìm theo tên" id="searchInput1">
                                        </div>
                                        <div class="list_multiple_checkbox-items">
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox1">
                                                <span class="checkbox_label-box"></span>
                                                Checkbox 1</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox2">
                                                <span class="checkbox_label-box"></span> Checkbox 2</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox3">
                                                <span class="checkbox_label-box"></span> Checkbox 3</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox4">
                                                <span class="checkbox_label-box"></span>Checkbox 4</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox20">
                                                <span class="checkbox_label-box"></span> Checkbox 20</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox30">
                                                <span class="checkbox_label-box"></span> Checkbox 30</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox40">
                                                <span class="checkbox_label-box"></span> Checkbox 40</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="warpper-filfer">
                                <button class="btn_filter-options-item" onclick="toggleDiv(2)">Đối tượng sử dụng <i class="fa-solid fa-chevron-down"></i></button>
                                <div class="filter_group_item-content" id="div2">
                                    <div class="filter-options-list_content">
                                        <div class="FilterItem_list-sreach">
                                            <i class="iconcmt-sreach"></i>
                                            <input type="text" class="search-input" placeholder="Tìm theo tên" id="searchInput2">
                                        </div>
                                        <div class="list_multiple_checkbox-items">
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox5"> Checkbox 5</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox6"> Checkbox 6</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox7"> Checkbox 7</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox8"> Checkbox 8</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="warpper-filfer">
                                <button class="btn_filter-options-item" onclick="toggleDiv(3)">Chỉ định <i class="fa-solid fa-chevron-down"></i></button>
                                <div class="filter_group_item-content" id="div3">
                                    <div class="filter-options-list_content">
                                        <div class="FilterItem_list-sreach">
                                            <i class="iconcmt-sreach"></i>
                                            <input type="text" class="search-input" placeholder="Tìm theo tên" id="searchInput3">
                                        </div>
                                        <div class="list_multiple_checkbox-items">
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox9"> Checkbox 9</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox10"> Checkbox 10</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox11"> Checkbox 11</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox12"> Checkbox 12</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="warpper-filfer">
                                <button class="btn_filter-options-item" onclick="toggleDiv(4)">Chống chỉ định <i class="fa-solid fa-chevron-down"></i></button>
                                <div class="filter_group_item-content" id="div4">
                                    <div class="filter-options-list_content">
                                        <div class="FilterItem_list-sreach">
                                            <i class="iconcmt-sreach"></i>
                                            <input type="text" class="search-input" placeholder="Tìm theo tên" id="searchInput4">
                                        </div>
                                        <div class="list_multiple_checkbox-items">
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox13"> Checkbox 13</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox14"> Checkbox 14</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox15"> Checkbox 15</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox16"> Checkbox 16</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="warpper-filfer">
                                <button class="btn_filter-options-item" onclick="toggleDiv(5)">Dạng bào chế <i class="fa-solid fa-chevron-down"></i></button>
                                <div class="filter_group_item-content" id="div5">
                                    <div class="filter-options-list_content">
                                        <div class="FilterItem_list-sreach">
                                            <i class="iconcmt-sreach"></i>
                                            <input type="text" class="search-input" placeholder="Tìm theo tên" id="searchInput5">
                                        </div>
                                        <div class="list_multiple_checkbox-items">
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox17"> Checkbox 17</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox18"> Checkbox 18</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox19"> Checkbox 19</label>
                                            <label class="checkbox-label"><input type="checkbox" id="checkbox20"> Checkbox 20</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Vertical-filter-selected" style="display: none;">
                        <div class="collection-filter-list-selected">
                            <p id="text-text-secondary"></p>
                            <div class="list-filter-selected" id="filterList">
                            </div>
                            <button id="deleteAllButton" onclick="deleteAllTags()">Xóa tất cả</button>
                        </div>
                    </div>

                    <div class="lst-quickfilter_btn ">
                        <?php
                        $load_loaithuoc = get_tag_danhsachsp();
                        echo '<button class="Button_button__yfvRh pharmaceutical_products_filter">
                            ' . $loaithuoc . '<span class="sort-total">(38 Sản phẩm )</span>
                        </button>';
                        ?>
                    </div>
                </div>

                <div class="CategoryBody_product-box__CB8pb Recommend_list__SO5ns">
                    <?= $html_dssp_danhmuc; ?>
                </div>
                <div class="showmore-btn_content">
                    <a class="btn-showmore_product" href=""> Xem thêm <span>33</span> sản phẩm </a>
                    <i class="iconcmt-Arrow_Down"></i>
                </div>
            </div>
        </div>

        <!--Sản phẩm vừa xem-->
        <section class="ProductDescription_product-just-viewed">
            <div class="ProductCarousel_header">
                <div class="Product-just-viewed-title">
                    <h2>Sản phẩm vừa xem</h2>
                </div>
                <div class="ProductDescription_button-btn_lts ProductDescription-just-viewed_btn">
                    <div class="ButtonSlider-control Product-just-viewed_btn_left">
                        <i class="fa-solid fa-arrow-left fa-sm"></i>
                    </div>
                    <div class="ButtonSlider-control Product-just-viewed_btn_right">
                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                    </div>
                </div>
            </div>

            <div class="slider-frame Product-just-viewed">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product/hinh1.png" alt="san-pham">
                            </div>
                            <div class="product-content">
                                <div class="ProductItem_title">
                                    <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="index.php?act=chi_tiet_san_pham">
                                        <h3 class="Product-name">Xà phòng Acnes Body Bar Nseo Acnes
                                            Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)</h3>
                                    </a>
                                </div>
                                <div class="product-reviews">
                                    <strong>4.7</strong>
                                    <div class="rating-summary">
                                        <i class="iconcmt-starbuy"></i>
                                    </div>
                                    <span>(358)</span>
                                </div>
                                <div class="productItem_original-price"></div>
                                <div class="productItem_discount-price">
                                    <div class="productItem_discount-price-style">161.000</div>
                                    <div class="product_specifications"> <span style="margin: 0px 0px 0px 6px; font-weight: 600;">đ/</span>Hộp
                                    </div>
                                </div>
                                <button class="ProductItem_add-to-card">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product/hinh1.png" alt="san-pham">
                            </div>
                            <div class="product-content">
                                <div class="ProductItem_title">
                                    <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="index.php?act=chi_tiet_san_pham">
                                        <h3 class="Product-name">Xà phòng Acnes Body Bar Nseo Acnes
                                            Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)</h3>
                                    </a>
                                </div>
                                <div class="product-reviews">
                                    <strong>4.7</strong>
                                    <div class="rating-summary">
                                        <i class="iconcmt-starbuy"></i>
                                    </div>
                                    <span>(358)</span>
                                </div>
                                <div class="productItem_original-price"></div>
                                <div class="productItem_discount-price">
                                    <div class="productItem_discount-price-style">161.000</div>
                                    <div class="product_specifications"> <span style="margin: 0px 0px 0px 6px; font-weight: 600;">đ/</span>Hộp
                                    </div>
                                </div>
                                <button class="ProductItem_add-to-card">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product/hinh1.png" alt="san-pham">
                            </div>
                            <div class="product-content">
                                <div class="ProductItem_title">
                                    <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="index.php?act=chi_tiet_san_pham">
                                        <h3 class="Product-name">Xà phòng Acnes Body Bar Nseo Acnes
                                            Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)</h3>
                                    </a>
                                </div>
                                <div class="product-reviews">
                                    <strong>4.7</strong>
                                    <div class="rating-summary">
                                        <i class="iconcmt-starbuy"></i>
                                    </div>
                                    <span>(358)</span>
                                </div>
                                <div class="productItem_original-price"></div>
                                <div class="productItem_discount-price">
                                    <div class="productItem_discount-price-style">161.000</div>
                                    <div class="product_specifications"> <span style="margin: 0px 0px 0px 6px; font-weight: 600;">đ/</span>Hộp
                                    </div>
                                </div>
                                <button class="ProductItem_add-to-card">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product/hinh1.png" alt="san-pham">
                            </div>
                            <div class="product-content">
                                <div class="ProductItem_title">
                                    <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="index.php?act=chi_tiet_san_pham">
                                        <h3 class="Product-name">Xà phòng Acnes Body Bar Nseo Acnes
                                            Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)</h3>
                                    </a>
                                </div>
                                <div class="product-reviews">
                                    <strong>4.7</strong>
                                    <div class="rating-summary">
                                        <i class="iconcmt-starbuy"></i>
                                    </div>
                                    <span>(358)</span>
                                </div>
                                <div class="productItem_original-price"></div>
                                <div class="productItem_discount-price">
                                    <div class="productItem_discount-price-style">161.000</div>
                                    <div class="product_specifications"> <span style="margin: 0px 0px 0px 6px; font-weight: 600;">đ/</span>Hộp
                                    </div>
                                </div>
                                <button class="ProductItem_add-to-card">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product/hinh1.png" alt="san-pham">
                            </div>
                            <div class="product-content">
                                <div class="ProductItem_title">
                                    <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="index.php?act=chi_tiet_san_pham">
                                        <h3 class="Product-name">Xà phòng Acnes Body Bar Nseo Acnes
                                            Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)</h3>
                                    </a>
                                </div>
                                <div class="product-reviews">
                                    <strong>4.7</strong>
                                    <div class="rating-summary">
                                        <i class="iconcmt-starbuy"></i>
                                    </div>
                                    <span>(358)</span>
                                </div>
                                <div class="productItem_original-price"></div>
                                <div class="productItem_discount-price">
                                    <div class="productItem_discount-price-style">161.000</div>
                                    <div class="product_specifications"> <span style="margin: 0px 0px 0px 6px; font-weight: 600;">đ/</span>Hộp
                                    </div>
                                </div>
                                <button class="ProductItem_add-to-card">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/product/hinh1.png" alt="san-pham">
                            </div>
                            <div class="product-content">
                                <div class="ProductItem_title">
                                    <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="index.php?act=chi_tiet_san_pham">
                                        <h3 class="Product-name">Xà phòng Acnes Body Bar Nseo Acnes
                                            Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)</h3>
                                    </a>
                                </div>
                                <div class="product-reviews">
                                    <strong>4.7</strong>
                                    <div class="rating-summary">
                                        <i class="iconcmt-starbuy"></i>
                                    </div>
                                    <span>(358)</span>
                                </div>
                                <div class="productItem_original-price"></div>
                                <div class="productItem_discount-price">
                                    <div class="productItem_discount-price-style">161.000</div>
                                    <div class="product_specifications"> <span style="margin: 0px 0px 0px 6px; font-weight: 600;">đ/</span>Hộp
                                    </div>
                                </div>
                                <button class="ProductItem_add-to-card">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <a class="ProductCarousel_link__PCl8PC" href="/collection/duoc-tin-dung-nhieu-nhat/Q29sbGVjdGlvbjoxMTA5">Xem
                tất cả <i class="iconcmt-Arrow_Right"></i></a>
        </section>

    </div>
</div>