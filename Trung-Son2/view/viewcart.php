<div class="MainLayout_body_content">
    <div class="Cart_cart-page_warpper">
        <div class="container">
            <div class="ant-breadcrumb">
                <ol class="ant-breadcrumb-ol">
                    <li class="ant-breadcrumb-li">
                        <a href="index.php">Trang chủ</a>
                        <i class="iconcmt-Arrow_Right"></i>
                    </li>
                    <li class="ant-breadcrumb-li">
                        <span>Giỏ hàng</span>
                    </li>
                </ol>
            </div>
            <?php
            // echo var_dump($_SESSION['giohang']);
            if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                if (sizeof($_SESSION['giohang']) > 0) {
                    echo '<div class="Cart_cart-page_content">';
                    echo '<div class="Info_Cart-info Cart_left-content">
                            <div class="CartList_Warrper">
                                <div class="CartList_header-title">
                                    <h3>Giỏ hàng</h3>
                                </div>
                                <div class="cart-bar">
                                    <div class="cart-bar-list">
                                        <div class="bar-barr-container">
                                            <div class="bar-barr"></div>
                                        </div>
                                        <div class="icon-bar-barr"><i class="iconcmt-confirm"></i></div>
                                    </div>
                                    <div class="delivery-policy-info">
                                        <p>Chính sách giao hàng</p>
                                        <div class="FreeShipProcess_tooltip">
                                            <i class="iconcmt-note_tip"></i>
                                            <div class="FreeShipProcess_tooltip-content">
                                                <div class="FreeShipProcess_delivery-policy-title">
                                                    <span>Chính sách giao hàng</span>
                                                    <ul class="FreeShipProcess_delivery-policy-content">
                                                        <li>Freeship cho mọi đơn hàng từ 01/11 - 30/11</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-note">Đơn hàng được miễn phí vận chuyển</div>
                                <div class="CartList_box-content">
                                    <div class="cart-selector_head">
                                        <div class="cart-selector_row">
                                            <div class="cart-selector_g-col-1">
                                                <p class="cart-selector_label">Sản phẩm</p>
                                            </div>
                                            <div class="cart-selector_g-col-2">
                                                <p class="cart-selector_label">Đơn giá</p>
                                            </div>
                                            <div class="cart-selector_g-col-3">
                                                <p class="cart-selector_label">Số lượng</p>
                                            </div>
                                            <div class="cart-selector_g-col-4">
                                                <p class="cart-selector_label">Thành tiền</p>
                                            </div>
                                            <div class="cart-selector_g-col-5">
                                                <div class="cart-selector_bin"></div>
                                            </div>
                                        </div>
                                    </div>';
                    echo '<div class="cart-selector_body">';
                    $i = 0;
                    $tong = 0;
                    foreach ($_SESSION['giohang'] as $item) {
                        extract($item);
                        $linksp_dssp = "index.php?act=chi_tiet_san_pham&idsp=" . $id;
                        $tt = $GiaHienTai * $soluong;
                        $linkdel = "index.php?act=delcart&ind=" . $i;
                        if ($GiaCu > 0) {
                            $GiaCu = '' . number_format($GiaCu, 0, ",", ".") . ' đ';
                        } else {
                            $GiaCu = '';
                        }
                        $tong += $tt;
                        echo '<div class="cart-selector_c-product">
                                    <div class="cart-selector_row">
                                        <div class="cart-selector_g-col-1">
                                            <div class="cart-selector_img">
                                                <img src="images/product/' . $Img . '" alt="san-pham">
                                            </div>
                                            <a href="' . $linksp_dssp . '" target="_blank" rel="noreferrer" class="cart-selector_name">
                                                ' . $TenSP . '
                                            </a>
                                        </div>
                                        <div class="cart-selector_g-col-2">
                                            <div class="cart-selector_price-col">
                                                <p class="cart-selector_old cart-selector_txt-line-through">' . $GiaCu . '</p>
                                                <p class="cart-selector_new">' . number_format($GiaHienTai, 0, ",", ".") . ' đ/ Hộp</p>
                                            </div>
                                        </div>
                                        <div class="cart-selector_g-col-3">
                                            <div class="cart-selector_product-qty">
                                                <button class="cart-qty-minus" type="button" value="-">-</button>
                                                <input type="text" readonly name="qty" min="1" class="qty-form-control" value="' . $soluong . '" />
                                                <button class="cart-qty-plus" type="button" value="+">+</button>
                                            </div>
                                        </div>
                                        <div class="cart-selector_g-col-4">
                                            <p class="cart-total-price-col">' . number_format($tt, 0, ",", ".") . ' đ</p>
                                        </div>
                                        <div class="cart-selector_g-col-5">
                                            <div class="cart-pre-order-product_delet">
                                                <a href="' . $linkdel . '"><i class="iconcmt-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                    }
                    echo '</div> ';
                    echo '<div class="CartList_box-Sale">
                                <span>Nhập mã giảm giá:</span>
                                <input type="text" id="DiscountCode_input" name="giam-gia" placeholder="Nhập mã giảm giá/ Phiếu mua hàng">
                                <button class="Button_button__yfvRh Promotion_applies-button">Áp dụng</button>
                                </div>
                            </div>
                        </div>
                    </div>';
                    echo '<div class="Cart_right-content">
                            <div class="Cart_Selector_Voucher">
                                <div class="CartSelector_Voucher-header">
                                    <h3 class="CartSelector_Voucher-title">Ưu đãi &amp; giảm giá</h3>
                                    <div class="NumberPromotional_applied" id="selectButton"></div>
                                </div>
                                <div class="CouponList_apply-wrapper"></div>
                                <div class="VocherApply_btn-group">
                                    <i class="iconcmt-vocher"></i>
                                    <a class="VocherBtn_action">Chọn hoặc nhập khuyến mãi</a>
                                </div>
                            </div>

                            <div class="TotalCart_container">
                                <div class="CartSelector_total-item">
                                    <span class="CartSelector_item-text">Tổng tiền:</span>
                                    <p class="CartSelector_item-price price-txt-line-through" id="total"><?= number_format($tong, 0, ",", ".") ?> đ</p>
                                </div>
                                <div class="CartSelector_total-item">
                                    <span class="CartSelector_item-text">Giảm giá trực tiếp</span>
                                    <p class="CartSelector_item-price" id="Direct-discount">0đ</p>
                                </div>
                                <div class="CartSelector_total-item">
                                    <span class="CartSelector_item-text">Giảm giá voucher</span>
                                    <p class="CartSelector_item-price" id="vocher-discount">0đ</p>
                                </div>
                                <div class="CartSelector_total-item">
                                    <span class="CartSelector_item-text">Tiết kiệm được</span>
                                    <p class="CartSelector_item-price" id="savings-amount">0đ</p>
                                </div>

                                <div class="CartSelector_total-makeshift">
                                    <span class="CartSelector_item-text">Tạm tính</span>
                                    <span class="CartSelector_item-price" id="provisional-amount">0đ</span>
                                </div>
                                <div class="CartSelector_buttonn-price">
                                    <button class="Button_button__yfvRh TotalCart_btn-start-checkout"><a href="index.php?act=thanh_toan">Đặt hàng</a></button>
                                </div>
                                <div class="CartSelector_payment-note">
                                    <span>Giao hàng tận nơi hoặc nhận hàng tại </span>
                                    <a href="#">nhà thuốc Trung Sơn gần bạn nhất !</a>
                                </div>
                            </div>
                        </div>';
                    echo '</div>';
                    $i++;
                } else {
                    echo '<div class="EmptyResult_empty-box">
                            <i class="iconcmt-Empty-card"></i>
                            <p style="padding: 16px;">Rất tiếc! Bạn chưa có sản phẩm nào trong giỏ hàng</p>
                            <span >Cùng mua sắm hàng ngàn sản phẩm tại nhà thuốc Trung Sơn nhé!</span>
                            <button class="Button_button__yfvRh EmptyResult_ContinueShopping-btn"><a href="index.php">Mua hàng</a></button>
                        </div>';
                }
            }
            ?>

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
                                        <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="/duoc-my-pham/acnes-body-bar-la-beauty-75g-xa-phong-tam-tri-mun-nghe-curcumin-va-tinh-chat-dau-tram-30130.html">
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
                                        <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="/duoc-my-pham/acnes-body-bar-la-beauty-75g-xa-phong-tam-tri-mun-nghe-curcumin-va-tinh-chat-dau-tram-30130.html">
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
                                        <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="/duoc-my-pham/acnes-body-bar-la-beauty-75g-xa-phong-tam-tri-mun-nghe-curcumin-va-tinh-chat-dau-tram-30130.html">
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
                                        <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="/duoc-my-pham/acnes-body-bar-la-beauty-75g-xa-phong-tam-tri-mun-nghe-curcumin-va-tinh-chat-dau-tram-30130.html">
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
                                        <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="/duoc-my-pham/acnes-body-bar-la-beauty-75g-xa-phong-tam-tri-mun-nghe-curcumin-va-tinh-chat-dau-tram-30130.html">
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
                                        <a title="Xà phòng Acnes Body Bar Neo Acnes Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)" href="/duoc-my-pham/acnes-body-bar-la-beauty-75g-xa-phong-tam-tri-mun-nghe-curcumin-va-tinh-chat-dau-tram-30130.html">
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
                    tất cả
                    <i class="iconcmt-Arrow_Right"></i>
                </a>
            </section>
        </div>
    </div>
</div>

<div class="ReactModalPortal">
    <div class="ReactModal__Overlay">
        <div class="BaseVoucherApplyModal_base">
            <div class="BaseVoucherApplyModal_content">
                <div class="BaseVoucherApplyModal-header">
                    <p>Mã giảm giá của bạn</p>
                    <span class="BtnVoucher_close">&times;</span>
                </div>
                <div class="BaseVoucherApplyModal_body">
                    <div class="VoucherInputField_input">
                        <div class="InputTextField_input-field-text">
                            <div class="InputTextField_input-group">
                                <input type="text" placeholder="Nhập mã giảm giá" value="">
                            </div>
                        </div>
                        <button class="VoucherInputField_btn-submit">Áp dụng</button>
                    </div>
                    <div class="VoucherDiscount_apply-title">
                        <p>Mã giảm giá</p>
                        <span>Đã áp dụng: <span id="numOfSelectedCoupons">0</span></span>
                    </div>
                    <div class="VoucherDiscount_promotion_card" id="coupon1" data-coupon-name="Miễn phí vận chuyển">
                        <div class="VoucherDiscount_card-left">
                            <img src="images/icon/freeship.png">
                            <p>Mã vận chuyển</p>
                        </div>
                        <div class="VoucherDiscount_card-right">
                            <div class="VoucherDiscount_card-right-content">
                                <div class="VoucherDiscount_card-right-title">
                                    <p>Miễn phí vận chuyển với đơn tối thiểu 500.000đ</p>
                                </div>
                                <div class="coupon-conditions-apply-content">
                                    <span class="coupon-explain" onclick="toggleTooltip(event, 'coupon1')">i</span>
                                    <div class="tooltip-content" id="tooltip-coupon1">
                                        <div class="tooltip-content-list">
                                            <div class="copy-container">
                                                <p>Mã:</p>
                                                <p class="coupon-code-list"> <span class="coupon-code">LCH300XCH</span>
                                                    <span class="copy-button" onclick="copyCoupon(event, 'coupon1')">
                                                        <i class="iconcmt-coppy"></i></span>
                                                </p>
                                            </div>
                                            <div class="copy-container">
                                                <p>Hạn sử dụng</p>
                                                <p class="coupon-code-list">30/09/23</p>
                                            </div>
                                        </div>
                                        <div class="tooltip-conditions-apply">
                                            <div class="tooltip-conditions-apply-heading">Điều kiện áp dụng:</div>
                                            <div class="tooltip-conditions-apply-list">
                                                <p>Giảm 30k cho đơn hàng từ 599k</p>
                                                <p>Áp dụng cho sản phẩm của Biti’s
                                                    Official Store.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="VoucherDiscount_card-expiry-date">
                                <p>HSD:30/09/2023</p>
                                <button class="VoucherDiscount_card-Button" onclick="handleCouponSelection('coupon1')">Chọn</button>
                            </div>
                        </div>
                    </div>

                    <div class="VoucherDiscount_promotion_card" id="coupon2" data-coupon-name="Giảm 30k">
                        <div class="VoucherDiscount_card-left">
                            <img src="images/icon/icon-couponzalo.png">
                            <p>Ví Zalo</p>
                        </div>
                        <div class="VoucherDiscount_card-right">
                            <div class="VoucherDiscount_card-right-content">
                                <div class="VoucherDiscount_card-right-title">
                                    <p>Nhập mã LC30 giảm ngay
                                        5% tối đa 30,000đ khi thanh
                                        toán qua Zalopay....</p>
                                </div>
                                <div class="coupon-conditions-apply-content">
                                    <span class="coupon-explain" onclick="toggleTooltip(event, 'coupon2')">i</span>
                                    <div class="tooltip-content" id="tooltip-coupon2">
                                        <div class="tooltip-content-list">
                                            <div class="copy-container">
                                                <p>Mã:</p>
                                                <p class="coupon-code-list"> <span class="coupon-code">LCH300XCH</span>
                                                    <span class="copy-button" onclick="copyCoupon(event, 'coupon2')">
                                                        <i class="iconcmt-coppy"></i></span>
                                                </p>
                                            </div>
                                            <div class="copy-container">
                                                <p>Hạn sử dụng</p>
                                                <p class="coupon-code-list">30/09/23</p>
                                            </div>
                                        </div>
                                        <div class="tooltip-conditions-apply">
                                            <div class="tooltip-conditions-apply-heading">Điều kiện áp dụng:</div>
                                            <div class="tooltip-conditions-apply-list">
                                                <p>Giảm 30k cho đơn hàng từ 599k</p>
                                                <p>Áp dụng cho sản phẩm của Biti’s
                                                    Official Store.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="VoucherDiscount_card-expiry-date">
                                <p>HSD:30/09/2023</p>
                                <button class="VoucherDiscount_card-Button" onclick="handleCouponSelection('coupon2')">Chọn</button>
                            </div>
                        </div>
                    </div>

                    <div class="VoucherDiscount_promotion_card" id="coupon3" data-coupon-name="Giảm 100k">
                        <div class="VoucherDiscount_card-left">
                            <img src="images/icon/icon-couponmomo.png">
                            <p>Ví Momo</p>
                        </div>
                        <div class="VoucherDiscount_card-right">
                            <div class="VoucherDiscount_card-right-content">
                                <div class="VoucherDiscount_card-right-title">
                                    <p>Nhập mã MoMo giảm ngay
                                        20% tối đa 30,000đ khi
                                        thanh toán qua MoMo</p>
                                </div>
                                <div class="coupon-conditions-apply-content">
                                    <span class="coupon-explain" onclick="toggleTooltip(event, 'coupon3')">i</span>
                                    <div class="tooltip-content" id="tooltip-coupon3">
                                        <div class="tooltip-content-list">
                                            <div class="copy-container">
                                                <p>Mã:</p>
                                                <p class="coupon-code-list"> <span class="coupon-code">LCH300XCH</span>
                                                    <span class="copy-button" onclick="copyCoupon(event, 'coupon3')">
                                                        <i class="iconcmt-coppy"></i></span>
                                                </p>
                                            </div>
                                            <div class="copy-container">
                                                <p>Hạn sử dụng</p>
                                                <p class="coupon-code-list">30/09/23</p>
                                            </div>
                                        </div>
                                        <div class="tooltip-conditions-apply">
                                            <div class="tooltip-conditions-apply-heading">Điều kiện áp dụng:</div>
                                            <div class="tooltip-conditions-apply-list">
                                                <p>Giảm 30k cho đơn hàng từ 599k</p>
                                                <p>Áp dụng cho sản phẩm của Biti’s
                                                    Official Store.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="VoucherDiscount_card-expiry-date">
                                <p>HSD:30/09/2023</p>
                                <button class="VoucherDiscount_card-Button" onclick="handleCouponSelection('coupon3')">Chọn</button>
                            </div>
                        </div>
                    </div>

                    <div class="VoucherDiscount_promotion_card " id="coupon4">
                        <div class="VoucherDiscount_card-left coupon-disabled">
                            <img src="images/icon/coupon-dis.png">
                            <p>Ví Momo</p>
                        </div>
                        <div class="VoucherDiscount_card-right">
                            <div class="VoucherDiscount_card-right-content">
                                <div class="VoucherDiscount_card-right-title coupon-disabled">
                                    <p>Nhập mã MoMo giảm ngay
                                        20% tối đa 30,000đ khi
                                        thanh toán qua MoMo</p>
                                </div>
                                <div class="coupon-conditions-apply-content">
                                    <span class="coupon-explain" onclick="toggleTooltip(event, 'coupon4')">i</span>
                                    <div class="tooltip-content" id="tooltip-coupon4">
                                        <div class="tooltip-content-list">
                                            <div class="copy-container">
                                                <p>Mã:</p>
                                                <p class="coupon-code-list"> <span class="coupon-code">LCH300XCH</span>
                                                    <span class="copy-button" onclick="copyCoupon(event, 'coupon4')">
                                                        <i class="iconcmt-coppy"></i></span>
                                                </p>
                                            </div>
                                            <div class="copy-container">
                                                <p>Hạn sử dụng</p>
                                                <p class="coupon-code-list">30/09/23</p>
                                            </div>
                                        </div>
                                        <div class="tooltip-conditions-apply">
                                            <div class="tooltip-conditions-apply-heading">Điều kiện áp dụng:</div>
                                            <div class="tooltip-conditions-apply-list">
                                                <p>Giảm 30k cho đơn hàng từ 599k</p>
                                                <p>Áp dụng cho sản phẩm của Biti’s
                                                    Official Store.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="VoucherDiscount_card-expiry-date coupon-disabled">
                                <div>HSD:30/09/2023</div>
                                <div class="coupon-unqualified">
                                    <p>Chưa đủ điều kiện</p>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coupon_loadmore">
                        <span>Xem thêm <span class="NumberCoupon_lable">(2)</span></span>
                        <i class="fa-solid fa-chevron-down fa-lg"></i>
                    </div>
                </div>
                <div class="BaseVoucherApplyModal_footer">
                    <button class="Button_button__yfvRh CompletedCoupon_button"> HOÀN TẤT</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /*----------Tính tiền đơn hàng + tăng giảm số lượng sản phẩm-----------*/
    const products = document.getElementsByClassName("cart-selector_c-product");
    // Lắng nghe sự kiện khi nhấp vào nút tăng số lượng
    var plusButtons = document.querySelectorAll(".cart-qty-plus");
    plusButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            increaseQuantity(this);
        });
    });
    // Lắng nghe sự kiện khi nhấp vào nút giảm số lượng
    var minusButtons = document.querySelectorAll(".cart-qty-minus");
    minusButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            decreaseQuantity(this);
        });
    });
    // Lắng nghe sự kiện khi số lượng sản phẩm thay đổi
    var quantityInputs = document.querySelectorAll(".qty-form-control");
    quantityInputs.forEach(function(input) {
        input.addEventListener("input", function() {
            calculateDiscount();
        });
    });
    // Tính tổng chiết khấu và tổng thành tiền
    function calculateDiscount() {
        var totalDiscount = 0;
        var totalAmount = 0;
        var productRows = document.querySelectorAll(".cart-selector_c-product");
        productRows.forEach(function(row) {
            var oldPrice = parseFloat(
                row
                .querySelector(".cart-selector_g-col-2 .cart-selector_old")
                .textContent.replace(/\D/g, "")
            );
            var newPrice = parseFloat(
                row
                .querySelector(".cart-selector_g-col-2 .cart-selector_new")
                .textContent.replace(/\D/g, "")
            );
            var quantity = parseInt(
                row.querySelector('.cart-selector_g-col-3 input[name="qty"]').value
            );
            var discount = (oldPrice - newPrice) * quantity;
            totalDiscount += discount;
            var price = parseFloat(
                row
                .querySelector(".cart-selector_g-col-4 .cart-total-price-col")
                .textContent.replace(/\D/g, "")
            );
            totalAmount += price;
        });

        // Cập nhật giá trị tổng chiết khấu
        var discountElement = document.getElementById("Direct-discount");
        discountElement.textContent =
            totalDiscount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";
        // Hiển thị tổng thành tiền trong phần tử có id "total"
        var totalElement = document.getElementById("total");
        totalElement.textContent =
            totalAmount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";
    }
    // Gọi hàm tính tổng chiết khấu và tổng thành tiền khi trang tải hoàn tất
    document.addEventListener("DOMContentLoaded", function() {
        calculateDiscount();
    });

    // Tăng số lượng sản phẩm
    function increaseQuantity(button) {
        var quantityInput = button.previousElementSibling;
        var currentQuantity = parseInt(quantityInput.value);
        quantityInput.value = currentQuantity + 1;
        // Tính toán và cập nhật giá trị trong phần "Thành tiền"
        calculateTotalPrice(quantityInput);
        calculateDiscount();
    }

    // Giảm số lượng sản phẩm
    function decreaseQuantity(button) {
        var quantityInput = button.nextElementSibling;
        var currentQuantity = parseInt(quantityInput.value);
        // Đảm bảo số lượng không âm
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
            // Tính toán và cập nhật giá trị trong phần "Thành tiền"
            calculateTotalPrice(quantityInput);
            calculateDiscount();
        }
    }

    function calculateTotalPrice(quantityInput) {
        var priceCol = quantityInput
            .closest(".cart-selector_row")
            .querySelector(".cart-selector_g-col-2 .cart-selector_new");
        var price = parseFloat(priceCol.textContent.replace(/\D/g, ""));
        var quantity = parseInt(quantityInput.value);
        var totalPrice = price * quantity;
        var totalPriceCol = quantityInput
            .closest(".cart-selector_row")
            .querySelector(".cart-selector_g-col-4 .cart-total-price-col");
        totalPriceCol.textContent =
            totalPrice.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";
        // Hàm tính toán tổng thành tiền
        document.addEventListener("DOMContentLoaded", function() {
            calculateTotalPrice();
        });
        // Tính tổng thành tiền
        function calculateTotalPrice() {
            // Thiết lập giá trị ban đầu của tổng thành tiền
            var total = 0;

            // Lặp qua từng phần tử có class "CartItem_total-price-col"
            const totalPriceElements = document.getElementsByClassName(
                "cart-total-price-col"
            );
            for (let i = 0; i < totalPriceElements.length; i++) {
                const price = parseInt(
                    totalPriceElements[i].textContent.replace(/\D/g, "")
                );
                total += price;
            }

            // Hiển thị tổng thành tiền trong phần tử có id "total"
            document.getElementById("total").textContent =
                total.toLocaleString("en-US") + "đ";
        }

        // Gọi hàm tính toán tổng thành tiền ngay khi trang web được tải lên
        calculateTotalPrice();
    }

    // Lắng nghe sự kiện khi số lượng sản phẩm thay đổi
    var totalElement = document.getElementById("total");
    var discountElement = document.getElementById("Direct-discount");
    var vocherDiscountElement = document.getElementById("vocher-discount");

    // Tính toán và cập nhật lại số tiền tạm tính khi giá trị "total" và "Direct-discount" thay đổi
    function updateProvisionalAmount() {
        var total = parseFloat(totalElement.textContent.replace(/\D/g, ""));
        var vocherDiscount = parseFloat(
            vocherDiscountElement.textContent.replace(/\D/g, "")
        );
        var provisionalAmount = total - vocherDiscount;

        // Cập nhật giá trị trong phần tử "provisional-amount"
        var provisionalAmountElement = document.getElementById("provisional-amount");
        provisionalAmountElement.textContent =
            provisionalAmount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";

        // Kiểm tra điều kiện và cập nhật trạng thái
        var cartTotalPriceText = document.querySelector(".cart-total-price-col-text");
        var giftsIncluded = document.querySelector(".Gifts-included-with-product");

        // if (provisionalAmount <= 500000) {
        //     cartTotalPriceText.innerHTML =
        //         '<div class="not-eligible-to-apply-promotion"><i class="iconcmt-unqualified"></i></div>';
        //     giftsIncluded.classList.remove("eligible-promotion");
        // } else {
        //     cartTotalPriceText.innerHTML =
        //         '<div class="eligible-to-apply-promotion"><p>Miễn phí</p></div>';
        //     giftsIncluded.classList.add("eligible-promotion");
        // }
    }

    // Lắng nghe sự kiện khi giá trị "total" thay đổi
    totalElement.addEventListener("DOMSubtreeModified", function() {
        updateProvisionalAmount();
    });

    // Lắng nghe sự kiện khi giá trị "Direct-discount" thay đổi
    discountElement.addEventListener("DOMSubtreeModified", function() {
        updateProvisionalAmount();
    });

    // Gọi hàm để tính toán và cập nhật số tiền tạm tính ban đầu
    updateProvisionalAmount();

    // Tính toán và cập nhật lại số tiền tạm tính khi giá trị "total" và "savings-amount" thay đổi

    var savingsAmountElement = document.getElementById("savings-amount");
    var directDiscountElement = document.getElementById("Direct-discount");
    var vocherDiscountElement = document.getElementById("vocher-discount");

    // Lắng nghe sự thay đổi của giá trị "Direct-discount" và "vocher-discount"
    directDiscountElement.addEventListener(
        "DOMSubtreeModified",
        updateSavingsAmount
    );
    vocherDiscountElement.addEventListener(
        "DOMSubtreeModified",
        updateSavingsAmount
    );

    // Hàm để tính toán và cập nhật lại giá trị của "savings-amount"
    function updateSavingsAmount() {
        var directDiscount = parseFloat(
            directDiscountElement.textContent.replace(/\D/g, "")
        );
        var vocherDiscount = parseFloat(
            vocherDiscountElement.textContent.replace(/\D/g, "")
        );
        var savingsAmount = directDiscount + vocherDiscount;

        // Cập nhật giá trị của "savings-amount"
        savingsAmountElement.textContent =
            savingsAmount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";
    }

    // Gọi hàm để tính toán và cập nhật giá trị ban đầu của "savings-amount"
    updateSavingsAmount();
    // Lắng nghe sự kiện khi nhấp vào nút xóa sản phẩm
    var deleteButtons = document.querySelectorAll(".cart-pre-order-product_delet");
    deleteButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            deleteProduct(this);
        });
    });

    // Xóa sản phẩm
    function deleteProduct(button) {
        var productRow = button.closest(".cart-selector_c-product");
        productRow.remove();
        calculateDiscount();
    }

    // Get the checkbox element
    const checkbox = document.querySelector(".cart-selector_ui-radio-input");
    // Get the "Gifts-included-with-product" element
    const DiscountProductElement = document.querySelector(".Discount-by-product");
    // Add event listener to checkbox state change
    checkbox.addEventListener("change", function() {
        if (this.checked) {
            // Add the "Gifts-checked" class to the "Discount-by-product" element
            DiscountProductElement.classList.add("Discount-product-checked");
        } else {
            // Remove the "Gifts-checked" class from the "Discount-by-product" element
            DiscountProductElement.classList.remove("Discount-product-checked");
        }
    });
    window.addEventListener("DOMContentLoaded", function() {
        const DiscountProductElement = document.querySelector(".Discount-by-product");
        DiscountProductElement.classList.add("Discount-product-checked");
    });
</script>