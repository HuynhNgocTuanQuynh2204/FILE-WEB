<?php

extract($sp_chi_tiet);

if ($sp_chi_tiet['GiaCu'] > 0) {
    $giacu = '<p class="ProductPrice_price-official">' . number_format($sp_chi_tiet['GiaCu'], 0, ",", ".") . ' đ</p>';
} else {
    $giacu = '';
}

$html_dssp_lienquan = '';
foreach ($splienquan  as $splq) {
    if ($splq['GiaCu'] > 0) {
        $giacu_splq = '<div class="productItem_original-price">' . number_format($splq['GiaCu'], 0, ",", ".") . ' đ</div>';
    } else {
        $giacu_splq = '<div class="productItem_original-price"> </div> ';
    }
    extract($splq);
    $linksp_lienquan = "index.php?act=chi_tiet_san_pham&idsp=" . $id;
    $html_dssp_lienquan .= '<div class="RelatedProduct_lazyload-wrapper">
    <div class="ProductItem_product-item">
        <div class="SaleProduct_discount-percent">
            -20%
        </div>
        <div class="porduct-loop-img">
        <img src="images/product/' . $Img . '" alt="san-pham">
        </div>
        <div class="product-content">
            <div class="ProductItem_title">
                <a title="" href="' . $linksp_lienquan . '">
                    <h3 class="Product-name">' . $TenSP . '</h3>
                </a>
            </div>
            <div class="product-reviews">
                <strong>4.7</strong>
                <div class="rating-summary">
                    <i class="iconcmt-starbuy"></i>
                </div>
                <span>(' . $binhluan . ')</span>
            </div>
            ' . $giacu_splq . '
            <div class="productItem_discount-price">
                <div class="productItem_discount-price-style">' . number_format($GiaHienTai, 0, ",", ".") . '</div>
                <div class="product_specifications"> <span style="margin: 0px 0px 0px 6px; font-weight: 600;">đ/</span>Hộp
                </div>
            </div>
            <button class="ProductItem_add-to-card">Thêm vào giỏ hàng</button>
        </div>
    </div>
</div>';
}
?>

<div class="MainLayout_body_content">
    <div class="ProductDetail_Page_Warpper">
        <div class="container">
            <div class="ant-breadcrumb">
                <ol class="ant-breadcrumb-ol">
                    <li class="ant-breadcrumb-li">
                        <a href="index.php">Trang chủ</a>
                        <i class="iconcmt-Arrow_Right"></i>
                    </li>
                    <li class="ant-breadcrumb-li">
                        <span><?= $TenDM ?></span>
                        <i class="iconcmt-Arrow_Right"></i>
                    </li>
                    <li class="ant-breadcrumb-li">
                        <span><?= $TenSP ?></span>
                    </li>
                </ol>
            </div>

            <div class="ProductInfo_product_info-wrap">
                <div class="ProductInfo_left-content">
                    <div class="slider-frame ProductCarousel_wrap">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="ProductCarousel_product-img" data-index="0">
                                    <img src="images/product/hinh5.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ProductCarousel_product-img" data-index="1">
                                    <img src="images/product/hinh4.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ProductCarousel_product-img" data-index="2">
                                    <img src="images/product/hinh2.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ProductCarousel_product-img" data-index="3">
                                    <img src="images/product/hinh3.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ProductCarousel_product-img" data-index="4">
                                    <img src="images/product/hinh6.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-frame ProductCarousel_list-img-tab">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide FeaturedThumbnail_images-gallery">
                                <img src="images/product/hinh5.jpg" />
                            </div>
                            <div class="swiper-slide FeaturedThumbnail_images-gallery">
                                <img src="images/product/hinh4.jpg" />
                            </div>
                            <div class="swiper-slide FeaturedThumbnail_images-gallery">
                                <img src="images/product/hinh2.jpg" />
                            </div>
                            <div class="swiper-slide FeaturedThumbnail_images-gallery">
                                <div class="CarouselGallery-text">Xem thêm 3 ảnh</div>
                                <img src="images/product/hinh3.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="Pr_Loyalty">
                        <div class="ScanQR_download">
                            <img src="images/icon/icon-qr.png" alt="">
                            <span>Quét để tải app</span>
                        </div>
                        <div class="Pr_Loyalty-text_area">
                            <p class="Pr_Loyalty-text_area-Tittle">
                                <img src="images/icon/icon-logots.png" alt="">
                                <span>Quà tặng VIP</span>
                            </p>
                            <p class="Pr_Loyalty-text_area-Content">
                                Tích &amp; Sử dụng điểm <br> cho khách hàng thân thiết
                            </p>
                            <p class="Pr_Loyalty-text_area__note">Của Trung Sơn Pharma</p>
                        </div>
                        <div class="Download_link-app">
                            <a href="#" target="_blank">
                                <img src="images/icon/app-store.png" alt="">
                            </a>
                            <a href="#" target="_blank">
                                <img src="images/icon/gg-play.png" alt="">
                            </a>
                        </div>

                    </div>
                </div>

                <div class="ProductInfo_between-content">
                    <div class="ProductContent-Tittle">
                        <h1><?= $TenSP ?></h1>
                    </div>
                    <div class="ProductContent_sku-information">
                        <div class="product-reviews-summary short">
                            <div class="rating-summary">
                                <i class="iconcmt-starbuy"></i>
                                <i class="iconcmt-starbuy"></i>
                                <i class="iconcmt-starbuy"></i>
                                <i class="iconcmt-starbuy"></i>
                                <i class="iconcmt-starbuy"></i>
                            </div>
                            <a class="reviews-actions" href="#">( Xem <?= $binhluan ?> đánh giá)</a>
                        </div>
                        <p class="ProductContent_sku__pBwlP">Đã bán 5000+</p>
                        <p class="ProductContent_sku__pBwlP">Mã: P25860</p>
                    </div>
                    <div class="ProductPrice_group">
                        <div class="ProductPrice_content-price">
                            <p class="ProductPrice_price-decrease"><?= number_format($GiaHienTai, 0, ",", ".") ?>đ
                                <span>/ Hộp</span>
                            </p>
                            <?= $giacu ?>
                            <p class="ProductPrice_discount-percent">-30%</p>
                        </div>
                        <ul class="ProductPrice_extra-care">
                            <li class="Additional_care-section">Giảm sốc 327.000đ</li>
                            <li class="Additional_care-section">
                                <p>Mua hàng và tích<span> 12.555 điểm </span>thành viên </p>
                                <div class="QuestionTooltip_tooltip__BdS9s7 ProductPrice_tooltip">
                                    <i class="iconcmt-note_tip"></i>
                                    <div class="QuestionTooltip_box ProductPrice_tooltip-content_ZDA">
                                        <div class="ProductPrice_tooltip-content-header">
                                            <label class="ProductPrice_title">Quyền lợi dành cho thành viên của Trung Sơn Pharma:</label>
                                        </div>
                                        <ul class="ProductPrice_tooltip-description">
                                            <li>Hạng Vàng tích 1% P-Xu Vàng thưởng khi mua các sản phẩm tại Trung Sơn.</li>
                                            <li>Hạng Kim Cương tích 1.1% P-Xu Vàng thưởng khi mua các sản phẩm tại Trung Sơn.</li>
                                            <li>Hạng Bạch Kim tích 1.5% P-Xu Vàng thưởng khi mua các sản phẩm tại Trung Sơn.</li>
                                        </ul>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="ProductContent-description-attached">
                        <div class="ProductContent-description-attached-left">
                            <img src="images/product/khau-trang.png" alt="">
                        </div>
                        <div class="ProductContent-description-attached-right">
                            <div class="Promotional-title">
                                <p><i class="iconcmt-gift_package"></i></p>
                                <span>TẶNG</span>
                            </div>
                            <p class="Product-description-attached-title">
                                Tặng ngay
                                <span class="Product-description-attached-text">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For
                                    Kids</span>
                                - <span> Trị giá: 199.000đ</span>
                            </p>

                        </div>
                    </div>

                    <div class="ProductContent_measurement">
                        <span>Đơn vị tính</span>
                        <div class="ProductMeasurement_group">
                            <button class="ProductMeasurement_button ProductMeasurement_button-choose" id="Hop"> Hộp
                            </button>
                            <button class="ProductMeasurement_button" id="Vien"> Viên
                            </button>
                        </div>

                    </div>
                    <div class="cta-desktop__quantity">
                        <span>Số lượng</span>
                        <div class="ProductContent_group-quantity__yPOvu">
                            <div class="Quantity_quantity__fVK1i CartItem_quantity-input__5mxnE">
                                <button class="cart-qty-minus" type="button" value="-">-</button>
                                <input readonly="" value="1">
                                <button class="cart-qty-plus" type="button" value="+">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="ProductContent_group-buy">
                        <button class="Button_button__yfvRh ProductContent_buy-now__jckyB">MUA NGAY</button>
                        <button class="Button_button__yfvRh ProductContent_add-to-cart__eomyx">TÌM NHÀ THUỐC</button>
                    </div>
                    <div class="ProductContent-description">
                        <table class="product-attribute-specs-table">
                            <tr>
                                <th class="technical-content-item">
                                    Danh mục
                                </th>
                                <td class="technical-content-details">
                                    <a href="#">Thuốc ngủ, thuốc an thần</a>
                                </td>
                            </tr>
                            <tr>
                                <th class="technical-content-item">
                                    Dạng bào chế
                                </th>
                                <td class="technical-content-details">
                                    Viên nén
                                </td>
                            </tr>
                            <tr>
                                <th class="technical-content-item">
                                    Quy cách
                                </th>
                                <td class="technical-content-details">
                                    1 Hộp x 100 Viên
                                </td>
                            </tr>
                            <tr>
                                <th class="technical-content-item">
                                    Thành phần chính
                                </th>
                                <td class="technical-content-details">
                                    Zopiclone
                                </td>
                            </tr>
                            <tr>
                                <th class="technical-content-item">
                                    Chỉ định
                                </th>
                                <td class="technical-content-details">
                                    Điều trị rối loạn giấc ngủ
                                </td>
                            </tr>
                            <tr>
                                <th class="technical-content-item">
                                    Xuất xứ
                                </th>
                                <td class="technical-content-details">
                                    Canada
                                </td>
                            </tr>
                            <tr>
                                <th class="technical-content-item">
                                    Nhà sản xuất
                                </th>
                                <td class="technical-content-details">
                                    PHARMASCIENCE INC
                                </td>
                            </tr>
                            <tr>
                                <th class="technical-content-item">
                                    Thuốc cần kê toa
                                </th>
                                <td class="technical-content-details">
                                    Có
                                </td>
                            </tr>
                            <tr>
                                <th class="technical-content-item">
                                    Mô tả ngắn
                                </th>
                                <td class="technical-content-details">
                                    Viên uống Go Sleep hỗ trợ dưỡng tâm an thần. Hỗ trợ giảm các tình trạng mất ngủ, khó ngủ, hỗ trợ ngủ
                                    ngon.
                                </td>
                            </tr>
                            <tr>
                                <th class="technical-content-item">
                                    Lưu ý
                                </th>
                                <td class="technical-content-details">
                                    Sản phẩm này chỉ bán khi có chỉ định của bác sĩ.
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="ProductInfo_right-content">
                    <div class="MethodSpecial_offers-wrapper">
                        <div class="MethodSpecial_offers-header">
                            <p>Ưu đãi đặc biệt</p>
                        </div>
                        <div class="MethodSpecial_offers-body">
                            <div class="Preferential_policy_item">
                                <div class="Preferential_policy_item-left">
                                    <img src="images/icon/icon-banner4.png" alt="">
                                </div>
                                <div class="Preferential_policy_item-right">
                                    <p>Đổi trả nguyên giá</p>
                                    <span>30 ngày kể từ lúc mua</span>
                                </div>
                            </div>
                            <div class="Preferential_policy_item">
                                <div class="Preferential_policy_item-left">
                                    <img src="images/icon/icon-banner5.png" alt="">
                                </div>
                                <div class="Preferential_policy_item-right">
                                    <p>Miễn phí vận chuyển</p>
                                    <span>Cho hóa đơn từ 300.000đ</span>
                                </div>
                            </div>
                            <div class="Preferential_policy_item">
                                <div class="Preferential_policy_item-left">
                                    <img src="images/icon/icon-banner6.png" alt="">
                                </div>
                                <div class="Preferential_policy_item-right">
                                    <p>Mua lẻ với giá sỉ</p>
                                    <span>Giá cạnh tranh tốt nhất</span>
                                </div>
                            </div>
                            <div class="Preferential_policy_item">
                                <div class="Preferential_policy_item-left">
                                    <img src="images/icon/icon-banner7.png" alt="">
                                </div>
                                <div class="Preferential_policy_item-right">
                                    <p>Dược sĩ tư vấn tại chỗ</p>
                                    <span>Thân thiện & nhiệt tình</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ProductDescription_Product-description-wrapper">
                <div class="ProductDescription_Product-description-left">
                    <div class="ProductDescription_Tab-tittle">
                        <p class="ProductTab_tab-name">Thành Phần</p>
                        <p class="ProductTab_tab-name">Công dụng</p>
                        <p class="ProductTab_tab-name">Cách dùng</p>
                        <p class="ProductTab_tab-name">Tác dụng phụ</p>
                        <p class="ProductTab_tab-name">Lưu ý</p>
                        <p class="ProductTab_tab-name">Bảo quản</p>
                    </div>
                    <div class="CompactContent_container">
                        <div class="CompactContent_description-text" id="detail-content-0">
                            <h5>Thành phần của viên uống Go Sleep</h5>
                            <span>
                                Trong mỗi viên Go Sleep chứa 100mg hỗn hợp cao tương đương với:
                            </span>
                            <span>
                                Lá vông: 225g
                            </span>
                            <span>
                                Long nhãn:150mg
                            </span>
                            <span>
                                Viễn chí: 113mg
                            </span>
                            <span>
                                Hoàng kỳ: 100mg
                            </span>
                            <span>
                                Lạc tiên: 100mg
                            </span>
                            <span>
                                Toan táo nhân: 100mg
                            </span>
                            <span>
                                Bạc quả: 50mg
                            </span>
                            <span>
                                Bá tử nhan: 50mg
                            </span>
                            <span>
                                Tâm sen: 30mg
                            </span>
                            <span>
                                Đương quy: 20mg
                            </span>
                        </div>

                        <div class="CompactContent_description-text" id="detail-content-1">
                            <h5>Công dụng của viên uống Go Sleep</h5>
                            <span>
                                Viên uống Go Sleep hỗ trợ dưỡng tâm an thần.
                            </span>
                            <span>
                                Hỗ trợ giảm các tình trạng mất ngủ, khó ngủ, hỗ trợ ngủ ngon.
                            </span>
                        </div>

                        <div class="CompactContent_description-text" id="detail-content-2">
                            <h5>Cách dùng viên uống Go Sleep</h5>
                            <strong>Cách dùng</strong>
                            <span>
                                Sử dụng mỗi lần 2 viên sau khi ăn, ngày 2 lần.
                            </span>
                            <span>
                                Nên dùng liệu trình 3 hộp để đạt hiểu quả tốt nhất.
                            </span>
                            <strong>Đối tượng sử dụng</strong>
                            <span>
                                Viên hỗ trợ ngủ ngon Go Sleep dùng trong các trường hợp:
                            </span>
                            <span>
                                Bị suy nhược thần kinh, làm việc căng thẳng, mệt mỏi.
                            </span>
                            <span>
                                Người hay mất ngủ, khó ngủ hoặc ngủ không sâu giấc.
                            </span>
                        </div>

                        <div class="CompactContent_description-text" id="detail-content-3">
                            <h5>Tác dụng phụ</h5>
                            <span>Chưa có thông tin tác dụng phụ của sản phẩm</span>
                        </div>

                        <div class="CompactContent_description-text" id="detail-content-4">
                            <h5><i class="fa-solid fa-triangle-exclamation" style="color: #f97b06;"></i>&emsp;Lưu ý</h5>
                            <span>Không cho người mẫn cảm với bất cứ thành phần nào của sản phẩm. </span>
                            <span>Sản phẩm không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.</span>
                            <span>Đọc kỹ hướng dẫn trước khi dùng.</span>
                        </div>

                        <div class="CompactContent_description-text" id="detail-content-5">
                            <h5>Bảo quản</h5>
                            <span>Bảo quản nơi khô ráo, thoáng mát, nhiệt độ không quá 30°C, tránh ánh sáng trực
                                tiếp.
                            </span>
                            <span>Để xa tầm tay trẻ em.</span>
                        </div>
                    </div>
                    <div class="CompactContent_toggle-button ProductTab_btn-toggle">
                        <button>Xem thêm </button>
                        <p><i class="iconcmt-Arrow_Down"></i></p>
                    </div>
                </div>

                <div class="ProductDescription_Product-description-right">
                    <div class="RelatedProduct_product-related">
                        <h3 class="RelatedProduct_tittle">Sản phẩm cùng loại</h3>
                        <div class="RelatedProduct_box">
                            <?= $html_dssp_lienquan; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Id-ProductReviews_detail">
                <div class="ProductReviews_detail-left">
                    <div class="ProductReviews_reviews-wrapper">
                        <div class="ProductReviews_reviews-tittle">
                            <h5>Đánh giá sản phẩm</h5>
                        </div>
                        <div class="ProductReviews_product-filter-wrap">
                            <p>Lọc theo:</p>
                            <div class="ProductReviews_product-filter-list">
                                <span class="FilterProducts_stars">Đã mua hàng</span>
                                <span class="FilterProducts_stars">5 sao</span>
                                <span class="FilterProducts_stars">4 sao</span>
                                <span class="FilterProducts_stars">3 sao</span>
                                <span class="FilterProducts_stars">2 sao</span>
                                <span class="FilterProducts_stars">1 sao</span>
                            </div>
                        </div>
                        <div class="ProductReviews_content-body">
                            <div id="Review_wrap" class="BoxReview_comment-wrap">
                                <div class="BoxReview-comment-item">
                                    <div class="item-comment__box-cmt">
                                        <div class="boxReview-comment-item-header">
                                            <p class="cmt-top-name">VY</p>
                                        </div>
                                        <div class="boxReview-comment-item-body">
                                            <div class="Cmt_info-top">
                                                <p class="Cmt_info--name">
                                                    Nguyễn Văn Vàng
                                                </p>
                                                <div class="Confirm-buy">
                                                    <i class="iconcmt-confirm"></i> <span>Đã mua tại Trung Sơn</span>
                                                </div>
                                            </div>
                                            <div class="Cmt_info-intro">
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-unstarbuy"></i>
                                            </div>
                                            <div class="User-comment">
                                                <span>Chất lượng tốt, nhân viên phục vụ tận tình!</span>
                                            </div>
                                            <div class="Comment-utils">
                                                <span>1 tháng trước</span>
                                                <p class="btn-rep-cmt button__cmt-rep">Trả lời</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="BoxReview-comment-item">
                                    <div class="item-comment__box-cmt">
                                        <div class="boxReview-comment-item-header">
                                            <p class="cmt-top-name">TAN</p>
                                        </div>
                                        <div class="boxReview-comment-item-body">
                                            <div class="Cmt_info-top">
                                                <p class="Cmt_info--name">
                                                    Vũ Thành Tân
                                                </p>
                                                <div class="Confirm-buy">
                                                    <i class="iconcmt-confirm"></i> <span>Đã mua tại Trung Sơn</span>
                                                </div>
                                            </div>
                                            <div class="Cmt_info-intro">
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-unstarbuy"></i>
                                            </div>
                                            <div class="User-comment">
                                                <span>Chất lượng tốt, nhân viên phục vụ tận tình!</span>
                                            </div>
                                            <div class="Comment-utils">
                                                <span>1 tháng trước</span>
                                                <p class="btn-rep-cmt button__cmt-rep">Trả lời</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-comment__box-rep-comment">
                                        <div class="boxReview-comment-item-header">
                                            <p class="cmt-top-name">VQ</p>
                                        </div>
                                        <div class="boxReview-comment-item-body">
                                            <div class="Cmt_info-top">
                                                <p class="Cmt_info--name"> Trịnh Văn Quyết</p>
                                                <span class="box-info__tag">Quản trị viên</span>
                                            </div>
                                            <div class="User-comment">
                                                <span>Cảm ơn Anh Vàng đã tin dùng sản phẩm của Trung Sơn chúc anh và gia đình thật nhiều
                                                    sức
                                                    khỏe!</span>
                                            </div>
                                            <div class="Comment-utils">
                                                <span>1 tháng trước</span>
                                                <p class="btn-rep-cmt button__cmt-rep">Trả lời</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="BoxReview-comment-item">
                                    <div class="item-comment__box-cmt">
                                        <div class="boxReview-comment-item-header">
                                            <p class="cmt-top-name">VY</p>
                                        </div>
                                        <div class="boxReview-comment-item-body">
                                            <div class="Cmt_info-top">
                                                <p class="Cmt_info--name">
                                                    Nguyễn Văn Vàng
                                                </p>
                                                <div class="Confirm-buy">
                                                    <i class="iconcmt-confirm"></i> <span>Đã mua tại Trung Sơn</span>
                                                </div>
                                            </div>
                                            <div class="Cmt_info-intro">
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-unstarbuy"></i>
                                            </div>
                                            <div class="User-comment">
                                                <span>Chất lượng tốt, nhân viên phục vụ tận tình!</span>
                                            </div>
                                            <div class="Comment-utils">
                                                <span>1 tháng trước</span>
                                                <p class="btn-rep-cmt button__cmt-rep">Trả lời</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="BoxReview-comment-item">
                                    <div class="item-comment__box-cmt">
                                        <div class="boxReview-comment-item-header">
                                            <p class="cmt-top-name">VY</p>
                                        </div>
                                        <div class="boxReview-comment-item-body">
                                            <div class="Cmt_info-top">
                                                <p class="Cmt_info--name">
                                                    Nguyễn Văn Vàng
                                                </p>
                                                <div class="Confirm-buy">
                                                    <i class="iconcmt-confirm"></i> <span>Đã mua tại Trung Sơn</span>
                                                </div>
                                            </div>
                                            <div class="Cmt_info-intro">
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-starbuy"></i>
                                                <i class="iconcmt-unstarbuy"></i>
                                            </div>
                                            <div class="User-comment">
                                                <span>Chất lượng tốt, nhân viên phục vụ tận tình!</span>
                                            </div>
                                            <div class="Comment-utils">
                                                <span>1 tháng trước</span>
                                                <p class="btn-rep-cmt button__cmt-rep">Trả lời</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Pagination_Review-Comment_list">
                                <p class="ReviewPagination-item ReviewPagination-item-prev ReviewPagination-item-disabled">
                                    <a rel="nofollow"> <i class="iconcmt-Arrow_Left"></i> </a>
                                </p>
                                <p class="ReviewPagination-item ReviewPagination-item-active"><a rel="nofollow">1</a></p>
                                <p class="ReviewPagination-item "><a rel="nofollow">2</a></p>
                                <p class="ReviewPagination-item "><a rel="nofollow">3</a></p>
                                <p class="ReviewPagination-item ReviewPagination-item-next">
                                    <a rel="nofollow"> <i class="iconcmt-Arrow_Right"></i> </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ProductReviews_detail-right">
                    <div class="AverageProduct_rating-wrap">
                        <h5>Đánh giá trung bình</h5>
                        <div class="AverageProduct_point-list">
                            <p>4,9</p>
                            <span>/5</span>
                        </div>
                        <div class="ProductRating-based-stars">
                            <i class="iconcmt-starbuy"></i>
                            <i class="iconcmt-starbuy"></i>
                            <i class="iconcmt-starbuy"></i>
                            <i class="iconcmt-starbuy"></i>
                            <i class="iconcmt-starbuy"></i>
                        </div>
                        <p class="ProductRating-score_count">379 bài viết</p>

                        <ul class="ProductRating_Rate-list">
                            <li>
                                <div class="Number-star">
                                    5 <i class="iconcmt-starbuy"></i>
                                </div>
                                <div class="Timeline-star">
                                    <p class="timing" style="width: 100%"></p>
                                </div>
                                <span class="number-percent">28</span>
                            </li>
                            <li>
                                <div class="Number-star">
                                    4 <i class="iconcmt-starbuy"></i>
                                </div>
                                <div class="Timeline-star">
                                    <p class="timing" style="width: 30%"></p>
                                </div>
                                <span class="number-percent">4</span>
                            </li>
                            <li>
                                <div class="Number-star">
                                    3 <i class="iconcmt-starbuy"></i>
                                </div>
                                <div class="Timeline-star">
                                    <p class="timing" style="width: 0"></p>
                                </div>
                                <span class="number-percent">0</span>
                            </li>
                            <li>
                                <div class="Number-star">
                                    2 <i class="iconcmt-starbuy"></i>
                                </div>
                                <div class="Timeline-star">
                                    <p class="timing" style="width: 0%"></p>
                                </div>
                                <span class="number-percent">0</span>
                            </li>
                            <li>
                                <div class="Number-star">
                                    1 <i class="iconcmt-starbuy"></i>
                                </div>
                                <div class="Timeline-star">
                                    <p class="timing" style="width: 0%"></p>
                                </div>
                                <span class="number-percent">0</span>
                            </li>
                        </ul>
                        <p> Bạn đã dùng sản phẩm này?</p>
                        <button class="Button_button__yfvRh ProductReview_submit-button">GỬI ĐÁNH GIÁ</button>
                    </div>
                </div>
            </div>

            <div class="Id-ProductComment-box">
                <div class="ProductComment_header">
                    <div class="Commen_form-title">
                        <h4>Hỏi đáp</h4>
                        <span>(199 bình luận)</span>
                    </div>
                    <div class="Comment_find-cmt-box">
                        <i class="iconcmt-sreach"></i>
                        <input type="text" id="find-cmt" placeholder="Tìm theo nội dung, người gửi">
                    </div>
                </div>
                <div class="Comment_textarea-box">
                    <div class="Comment_textarea-list">
                        <textarea class="fRContent" name="fRContent" placeholder="Nhập nội dung bình luận ...."></textarea>
                        <button class="Button_button__yfvRh Button__cmt-send">GỬI BÌNH LUẬN</button>
                    </div>
                </div>
                <div class="ProductComment_filter-box">
                    <span class="CommentInfo_count-txt"></span>
                    <div class="CommentInfo_tag-box-list">
                    </div>
                </div>
                <div class="ProductComment_cmt-body">
                    <ul id="PageComment_list" class="Comment__box-list-comment">
                        <li class="item-comment">
                            <div class="item-comment__box-cmt">
                                <div class="boxReview-comment-item-header">
                                    <p class="cmt-top-name">TAN</p>
                                </div>
                                <div class="boxReview-comment-item-body">
                                    <div class="Cmt_info-top">
                                        <p class="Cmt_info--name">
                                            Vũ Thành Tân
                                        </p>
                                        <div class="Confirm-buy">
                                            <i class="iconcmt-confirm"></i> <span>Đã mua tại Trung Sơn</span>
                                        </div>
                                    </div>
                                    <div class="User-comment">
                                        <span>Chất lượng tốt, nhân viên phục vụ tận tình!</span>
                                    </div>
                                    <div class="Comment-utils">
                                        <span>1 tháng trước</span>
                                        <p class="btn-rep-cmt button__cmt-rep">Trả lời</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-comment__box-rep-comment">
                                <div class="boxReview-comment-item-header">
                                    <p class="cmt-top-name">VQ</p>
                                </div>
                                <div class="boxReview-comment-item-body">
                                    <div class="Cmt_info-top">
                                        <p class="Cmt_info--name"> Trịnh Văn Quyết</p>
                                        <span class="box-info__tag">Quản trị viên</span>
                                    </div>
                                    <div class="User-comment">
                                        <span>Cảm ơn Anh Vàng đã tin dùng sản phẩm của Trung Sơn chúc anh và gia đình thật nhiều sức
                                            khỏe!</span>
                                    </div>
                                    <div class="Comment-utils">
                                        <span>1 tháng trước</span>
                                        <p class="btn-rep-cmt button__cmt-rep">Trả lời</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item-comment">
                            <div class="item-comment__box-cmt">
                                <div class="boxReview-comment-item-header">
                                    <p class="cmt-top-name">TAN</p>
                                </div>
                                <div class="boxReview-comment-item-body">
                                    <div class="Cmt_info-top">
                                        <p class="Cmt_info--name">
                                            Vũ Thành Tân
                                        </p>
                                        <div class="Confirm-buy">
                                            <i class="iconcmt-confirm"></i> <span>Đã mua tại Trung Sơn</span>
                                        </div>
                                    </div>
                                    <div class="User-comment">
                                        <span>Chất lượng tốt, nhân viên phục vụ tận tình!</span>
                                    </div>
                                    <div class="Comment-utils">
                                        <span>1 tháng trước</span>
                                        <p class="btn-rep-cmt button__cmt-rep">Trả lời</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-comment__box-rep-comment">
                                <div class="boxReview-comment-item-header">
                                    <p class="cmt-top-name">VQ</p>
                                </div>
                                <div class="boxReview-comment-item-body">
                                    <div class="Cmt_info-top">
                                        <p class="Cmt_info--name"> Trịnh Văn Quyết</p>
                                        <span class="box-info__tag">Quản trị viên</span>
                                    </div>
                                    <div class="User-comment">
                                        <span>Cảm ơn Anh Vàng đã tin dùng sản phẩm của Trung Sơn chúc anh và gia đình thật nhiều sức
                                            khỏe!</span>
                                    </div>
                                    <div class="Comment-utils">
                                        <span>1 tháng trước</span>
                                        <p class="btn-rep-cmt button__cmt-rep">Trả lời</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="#" class="CommentList_btnn-showmore">Xem thêm 5 bình luận <i class="iconcmt-Arrow_Down"></i></a>
            </div>

        </div>
    </div>
</div>


<div class="ProductThumbnailCarousel_Modal">
    <div class="ProductThumbnailCarousel_Modal-Base" tabindex="-1" role="dialog" aria-modal="true">
        <div class="ProductThumbnailCarousel_Modal-content">
            <span class="ProductCarousel_btn-close">&times;</span>
            <div class="ProductThumbnailCarousel_Modal-header">
                <h3>
                    Thuốc Phamzopic 7.5mg Science điều trị rối
                    loạn giấc ngủ (hộp 100 viên)
                </h3>
            </div>
            <div class="ProductThumbnailCarousel_Modal-body">
                <div class="slider-frame ProductThumbnailCarousel_product-content">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content-t__list__item__img-container">
                                <img src="images/product/hinh5.jpg" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-t__list__item__img-container">
                                <img src="images/product/hinh4.jpg" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-t__list__item__img-container">
                                <img src="images/product/hinh2.jpg" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-t__list__item__img-container">
                                <img src="images/product/hinh3.jpg" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-t__list__item__img-container">
                                <img src="images/product/hinh6.jpg" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-t__list__item__img-container">
                                <img src="images/product/hinh5.jpg" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-t__list__item__img-container">
                                <img src="images/product/hinh4.jpg" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-t__list__item__img-container">
                                <img src="images/product/hinh2.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class=" button__view-gallery-next"><i class="fa-solid fa-chevron-right"></i></div>
                    <div class=" button__view-gallery-prev"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="zoom-btn">
                        <button class="zoom-btn-plus"><i class="fa-solid fa-magnifying-glass-plus"></i></button>
                        <button class="zoom-btn-minus"><i class="fa-solid fa-magnifying-glass-minus"></i></button>
                    </div>
                </div>
            </div>
            <div class="ProductThumbnailCarousel_Modal-footer">
                <div class="slider-frame ProductThumbnailCarousel_list-tab">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/product/hinh5.jpg" />
                        </div>
                        <div class="swiper-slide"><img src="images/product/hinh4.jpg" /></div>
                        <div class="swiper-slide"><img src="images/product/hinh2.jpg" /></div>
                        <div class="swiper-slide"><img src="images/product/hinh3.jpg" /></div>
                        <div class="swiper-slide"><img src="images/product/hinh6.jpg" /></div>
                        <div class="swiper-slide"><img src="images/product/hinh5.jpg" /></div>
                        <div class="swiper-slide"><img src="images/product/hinh4.jpg" /></div>
                        <div class="swiper-slide"><img src="images/product/hinh2.jpg" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>