<div class="MainLayout_body_content">
    <div class="Checkout_checkout-page_warpper">
        <div class="container">
            <div class="ant-breadcrumb">
                <ol class="ant-breadcrumb-ol">
                    <li class="ant-breadcrumb-li">
                        <a href="index.php">Trang chủ</a>
                        <i class="iconcmt-Arrow_Right"></i>
                    </li>
                    <li class="ant-breadcrumb-li">
                        <a href="index.php?act=viewcart">Giỏ hàng</a>
                        <i class="iconcmt-Arrow_Right"></i>
                    </li>
                    <li class="ant-breadcrumb-li">
                        <span>Thanh toán</span>
                    </li>
                </ol>
            </div>
            <div class="Checkout_checkout-page_content">
                <div class="Info_checkout-info Checkout_left-content">
                    <div class="Info_product-box-warpper">
                        <div class="Info_product-box-title">
                            <p><i class="iconcmt-Arrow_Left"></i></p>
                            <h3>Thanh toán</h3>
                        </div>
                        <div class="Checkout_CartList-content">
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
                            </div>

                            <div class="cart-selector_body">
                                <?php
                                // echo var_dump($_SESSION['giohang']);
                                if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
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
                                                            <img src="images/product/' . $Img . '"alt="san-pham">
                                                        </div>
                                                        <a href="' . $linksp_dssp . '" target="_blank" rel="noreferrer" class="cart-selector_name">
                                                        ' . $TenSP . '
                                                        </a>
                                                    </div>
                                                    <div class="cart-selector_g-col-2">
                                                        <div class="cart-selector_price-col">
                                                            <p class="cart-selector_old cart-selector_txt-line-through">' . $GiaCu . ' </p>
                                                            <p class="cart-selector_new">' . number_format($GiaHienTai, 0, ",", ".") . ' đ/ Hộp</p>
                                                        </div>
                                                    </div>
                                                    <div class="cart-selector_g-col-3">
                                                        <div class="cart-selector_product-qty">
                                                        <p> ' . $soluong . '</p>
                                                        </div>
                                                    </div>
                                                    <div class="cart-selector_g-col-4">
                                                        <p class="cart-total-price-col">' . number_format($tt, 0, ",", ".") . ' đ</p>
                                                    </div>
                                                    <div class="cart-selector_g-col-5">
                                                        <div class="cart-pre-order-product_delet">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        $i++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="ReceiveInfo_checkout-info-section">
                        <div class="CheckoutSubTitle_title">
                            Hình thức nhận hàng
                        </div>
                        <div class="ReceiveMethodGoods_receive-goods">
                            <div class="ReceiveMethodGoods_header">
                                <i class="iconcmt-User"></i>
                                <p>Thông tin khách hàng</p>
                            </div>
                            <form class="RecipientInformation_box" action="index.php?act=chitietdonhang" method="post">
                                <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                                <div class="RadioButtonField_radio-list">
                                    <label class="RadioButtonField_item-container RadioButtonField_checked">
                                        <span class="RadioButtonField_checkmark"></span>
                                        <input type="radio" name="gender" value="1">
                                        <p>Anh</p>
                                    </label>
                                    <label class="RadioButtonField_item-container">
                                        <span class="RadioButtonField_checkmark"></span>
                                        <input type="radio" name="gender" value="0">
                                        <p>Chị</p>
                                    </label>
                                </div>
                                <div class="InputTextField_input-field-group">
                                    <div class="InputTextField_input-content">
                                        <input name="hoten" type="text" placeholder="Vui lòng nhập họ và tên">
                                    </div>
                                    <div class="InputTextField_input-content">
                                        <input name="mobile" type="text" placeholder="Vui lòng nhập số điện thoại">
                                    </div>
                                </div>
                            </form>
                            <div class="ReceiveMethodGoods_header">
                                <i class="iconcmt-Local"></i>
                                <p>Thông tin đặt hàng</p>
                            </div>
                            <form class="OrderMethod_box" action="index.php?act=chitietdonhang" method="post">
                                <div class="ReceiveInfoTab_tab">
                                    <div class="ReceiveInfoTab_tab-item ReceiveInfoTab_tab-item-active">
                                        <span class="ReceiveInfoTab_select-box"></span>
                                        Giao hàng tận nơi
                                    </div>
                                    <div class="ReceiveInfoTab_tab-item">
                                        <span class="ReceiveInfoTab_select-box"></span>
                                        Nhận tại nhà thuốc
                                    </div>
                                </div>
                                <div class="ReceiveInfoTab_content">
                                    <div class="InputTextField_input-field-group">
                                        <div class="SelectDropdownAddressField_value-container">
                                            <select id="province" name="province" class="AccoutAdress-city">
                                                <option value="">Chọn tỉnh thành</option>
                                                <!-- <?php
                                                        // while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                    <option value="<?php echo $row['province_id'] ?>"><?php echo $row['name'] ?></option>
                                                <?php
                                                // }
                                                ?> -->
                                            </select>
                                            <div class="SelectDropdownAddressField_right-group"><i class="iconcmt-Arrow_Down"></i></div>
                                        </div>
                                        <div class="SelectDropdownAddressField_value-container">
                                            <select id="district" name="district" class="AccoutAdress-district">
                                                <option value="">Chọn Quận/ Huyện</option>
                                            </select>
                                            <div class="SelectDropdownAddressField_right-group"><i class="iconcmt-Arrow_Down"></i></div>
                                        </div>
                                    </div>
                                    <div class="InputTextField_input-field-group">
                                        <div class="SelectDropdownAddressField_value-container">
                                            <select id="wards" name="wards" class="AccoutAdress-ward">
                                                <option value="">Chọn Phường/ Xã</option>
                                            </select>
                                            <div class="SelectDropdownAddressField_right-group"><i class="iconcmt-Arrow_Down"></i></div>
                                        </div>
                                        <div class="InputTextField_input-content">
                                            <input name="note_adress" type="text" placeholder="Nhập số nhà, tên đường" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="TextAreaField_input-text-field">
                                    <div class="TextAreaField_input-group">
                                        <textarea name="note" type="text" placeholder="* Ghi chú (Ví dụ: không giao ngày chủ nhật, gọi trước khi giao....)" maxlength="225"></textarea>
                                    </div>
                                </div>
                                <div class="Summary_content-between">
                                    <p>Yêu cầu xuất hóa đơn điện tử</p>
                                    <label class="VAT_Adress-box ">
                                        <input type="checkbox" />
                                        <span class="VAT_Adress-control"></span>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="RequestVAT_invoice-request-invoice">
                        <div class="RequestVAT_invoice-title">
                            Thông tin xuất hóa đơn
                        </div>
                        <div class="RequestVAT_invoice-content">
                            <form class="RequestVAT_invoice-content-form" action="#">
                                <div class="VAT_styleAddress-radio-list">
                                    <div class="RadioButtonField_pc-radio-button RadioButtonField_checked">
                                        <label class="RadioButtonField_container">
                                            <span class="RadioButtonField_checkmark"></span>
                                            <div>Cá nhân</div>
                                            <input type="radio" name="addressType" value="1" checked="">
                                        </label>
                                    </div>
                                    <div class="RadioButtonField_pc-radio-button">
                                        <label class="RadioButtonField_container">
                                            <span class="RadioButtonField_checkmark"></span>
                                            <div>Công ty</div>
                                            <input type="radio" name="addressType" value="0">
                                        </label>
                                    </div>
                                </div>
                                <div class="InputTextField_input-field-group">
                                    <div class="InputTextField_input-content">
                                        <input name="Company_name" type="text" placeholder="Tên công ty" autocomplete="on" class="VAT_checkoutInput" value="">
                                    </div>
                                    <div class="InputTextField_input-content">
                                        <input name="company_tax-code" maxlength="150" type="text" placeholder="Mã số thuế" autocomplete="on" class="VAT_checkoutInput" value="">
                                    </div>
                                </div>
                                <div class="InputTextField_input-field-group">
                                    <div class="InputTextField_input-content">
                                        <input name="Company_phone-number" type="text" placeholder="Số điện thoại" autocomplete="on" class="VAT_checkoutInput" value="">
                                    </div>
                                    <div class="InputTextField_input-content">
                                        <input name="Company_email" type="text" placeholder="Email" autocomplete="on" class="VAT_checkoutInput" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="PaymentMethod_payment-method">
                        <div class="PaymentMethod_pay-title">
                            Hình thức thanh toán
                        </div>
                        <div class="PaymentMethod_pay-content">
                            <form class="PaymentMethod_pay-list" action="index.php?act=chitietdonhang" method="post">
                                <div class="PaymentMethod_pmt-item">
                                    <div class="PaymentMethod_icon">
                                        <img src="images/icon/icon-tienmat.png" alt="" />
                                    </div>
                                    <div class="PaymentMethod_info">
                                        <div class="PaymentMethod_name">Tiền Mặt</div>
                                        <div class="PaymentMethod_description">Thanh toán bằng tiền mặt khi nhận hàng</div>
                                    </div>
                                    <div class="PaymentMethod_select-icon">
                                        <input type="radio" name="pt_thanhtoan" value="Tiền Mặt">
                                    </div>
                                </div>
                                <div class="PaymentMethod_pmt-item">
                                    <div class="PaymentMethod_icon">
                                        <img src="images/icon/icon-momo.png" alt="" />
                                    </div>
                                    <div class="PaymentMethod_info">
                                        <div class="PaymentMethod_name">Momo</div>
                                        <div class="PaymentMethod_description">Thanh toán bằng MoMo</div>
                                    </div>
                                    <div class="PaymentMethod_select-icon">
                                        <input type="radio" name="pt_thanhtoan" value="Momo">
                                    </div>
                                </div>
                                <div class="PaymentMethod_pmt-item">
                                    <div class="PaymentMethod_icon">
                                        <img src="images/icon/icon-Viettel.png" alt="" />
                                    </div>
                                    <div class="PaymentMethod_info">
                                        <div class="PaymentMethod_name">Viettel money</div>
                                        <div class="PaymentMethod_description">Thanh toán bằng Viettel Pay</div>
                                    </div>
                                    <div class="PaymentMethod_select-icon">
                                        <input type="radio" name="pt_thanhtoan" value="Viettel money">
                                    </div>
                                </div>
                                <div class="PaymentMethod_pmt-item">
                                    <div class="PaymentMethod_icon">
                                        <img src="images/icon/icon-tin_dung.png" alt="" />
                                    </div>
                                    <div class="PaymentMethod_info">
                                        <div class="PaymentMethod_name">Thẻ tín dụng</div>
                                        <div class="PaymentMethod_description">Thanh toán trước đơn hàng qua thẻ tín dụng</div>
                                    </div>
                                    <div class="PaymentMethod_select-icon">
                                        <input type="radio" name="pt_thanhtoan" value="Thẻ tín dụng">
                                    </div>
                                </div>
                                <div class="PaymentMethod_pmt-item">
                                    <div class="PaymentMethod_icon">
                                        <img src="images/icon/icon-theATM.png" alt="" />
                                    </div>
                                    <div class="PaymentMethod_info">
                                        <div class="PaymentMethod_name">Thẻ ATM</div>
                                        <div class="PaymentMethod_description">Thanh toán trước đơn hàng qua thẻ ATM nội địa</div>
                                    </div>
                                    <div class="PaymentMethod_select-icon">
                                        <input type="radio" name="pt_thanhtoan" value="Thẻ ATM">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="Cart-pre-order-summary_preoder Checkout_right-warpper">
                    <div class="Checkout_right-content">
                        <div class="Cart_Selector_Voucher">
                            <div class="CartSelector_Voucher-header">
                                <h3 class="CartSelector_Voucher-title">Ưu đãi & giảm giá</h3>
                                <div class="NumberPromotional_applied"></div>
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
                                <span class="CartSelector_item-price" id="provisional-amount"><?= number_format($tong, 0, ",", ".") ?> đ</span>
                            </div>
                            <form class="CartSelector_buttonn-price" action="index.php?act=chitietdonhang" method="post">
                                <a>
                                    <input type="submit" value="Thanh Toán" name="thanhtoan">
                                </a>
                            </form>
                            <div class="CartSelector_payment-note">
                                <span>Giao hàng tận nơi hoặc nhận hàng tại </span>
                                <a href="#">nhà thuốc Trung Sơn gần bạn nhất !</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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