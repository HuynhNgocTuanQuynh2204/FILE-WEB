<div class="MainLayout_body_content">
    <div class="OrderInformation_infomation-page">
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
                        <a href="index.php?act=thanh_toan">Thanh toán</a>
                        <i class="iconcmt-Arrow_Right"></i>
                    </li>
                    <li class="ant-breadcrumb-li">
                        <span>Đơn hàng</span>
                    </li>
                </ol>
            </div>

            <div class="OrderInformation_warp">
                <div class="OrderInformation_left">
                    <?= $iddh ?>
                    <?php
                    if (isset($_SESSION['iddh']) && ($_SESSION['iddh'] > 0)) {
                        $orderinfo = getorderinfo($_SESSION['iddh']);
                        if (count($orderinfo) > 0) {
                    ?>
                            <div class="DeliveryInformation_wrap">
                                <div class="DeliveryInformation_header">
                                    <div class="DeliveryInformation_title">
                                        <p>Thông tin giao hàng</p>
                                        <div class="Summary_order-code">
                                            Mã đơn hàng:
                                            <span class="Summary_order-code-value"> #<?= $orderinfo[0]['madh']; ?></span>
                                            <span id="copyButton"><i class="iconcmt-coppy"></i></span>
                                        </div>
                                    </div>
                                    <div class="DeliveryInformation_status">
                                        <div class="DeliveryInformation_status-item"></div>
                                        <div class="DeliveryInformation_status-title">Đang xác nhận</div>
                                    </div>
                                </div>
                                <div class="DeliveryInformation_body">
                                    <ul class="step-wizard-list">
                                        <li class="step-wizard-item">
                                            <span class="progress-count"><i class="iconcmt-confirm"></i></span>
                                            <span class="progress-label">Đơn hàng đã đặt</span>
                                            <span class="progress-label-title">21:12 04-07-2023</span>
                                        </li>
                                        <li class="step-wizard-item current-item">
                                            <span class="   progress-count"><i></i></span>
                                            <span class="progress-label">Xác nhận đơn</span>
                                        </li>
                                        <li class="step-wizard-item">
                                            <span class="progress-count"><i></i></span>

                                            <span class="progress-label">Đơn vận chuyển</span>
                                        </li>
                                        <li class="step-wizard-item">
                                            <span class="progress-count"><i></i></span>
                                            <span class="progress-label">Đã nhận hàng</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="CompleteDelivery_info-wrap">
                                <div class="CompleteDelivery_info-left">
                                    <div class="Complete_customer-info-box">
                                        <h5>Thông tin khách hàng</h5>
                                        <div class="Complete_customer-info-content">
                                            <div class="CompleteInfo_value">
                                                <p>Khách hàng: <span><?= $orderinfo[0]['hoten']; ?></span></p>
                                            </div>
                                            <div class="CompleteInfo_value">
                                                <p>Điện thoại: <span><?= $orderinfo[0]['mobile']; ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="CompleteDelivery_info-right">
                                    <div class="Complete_shipping-info-box">
                                        <h5>Nhận hàng tại</h5>
                                        <div class="Complete_customer-info-content">
                                            <div class="CompleteInfo_value">
                                                <?= $orderinfo[0]['address']; ?>
                                                <p>Nhà thuốc Trung Sơn 90 Lý Tự Trọng, P.An Phú, Q.Ninh Kiều, Cần Thơ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <div class="CompleteProduct_info-wrap">
                        <div class="order-cl8-product-list">
                            <div class="CartList_content">
                                <div class="cart-selector_head">
                                    <div class="cart-selector_row">
                                        <div class="cart-selector_g-col-1">
                                            <p class="cart-selector_label">Danh sách sản phẩm</p>
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
                                    if (isset($_SESSION['iddh']) && ($_SESSION['iddh'] > 0)) {
                                        $getshowcart = getshowcart($_SESSION['iddh']);
                                        if ((isset($getshowcart)) && (count($getshowcart) > 0)) {
                                            $i = 0;
                                            $tong = 0;
                                            foreach ($getshowcart as $item) {
                                                $tt = $item['GiaHienTai'] * $item['soluong'];
                                                $linkdel = "index.php?act=delcart&ind=" . $i;
                                                // if ($item['GiaCu'] > 0) {
                                                //     $GiaCu1 = '' . number_format($item['GiaHienTai'], 0, ",", ".") . ' đ';
                                                // } else {
                                                //     $GiaCu1 = '';
                                                // }
                                                $tong += $tt;
                                                echo '<div class="cart-selector_c-product">
                                                    <div class="cart-selector_row">
                                                        <div class="cart-selector_g-col-1">
                                                            <div class="cart-selector_img">
                                                            <img src="images/product/' . $item['Img'] . '"alt="san-pham">
                                                            </div>
                                                            <a class="cart-selector_name">
                                                            ' . $item['TenSP'] . '
                                                            </a>
                                                        </div>
                                                        <div class="cart-selector_g-col-2">
                                                            <div class="cart-selector_price-col">
                                                                <p class="cart-selector_old cart-selector_txt-line-through">' . $GiaCu . ' </p>
                                                                <p class="cart-selector_new">' . number_format($item['GiaHienTai'], 0, ",", ".") . ' đ/ Hộp</p>
                                                            </div>
                                                        </div>
                                                        <div class="cart-selector_g-col-3">
                                                            <div class="cart-selector_product-qty">
                                                                <p>SL: ' . $item['soluong'] . '</p>
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
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="SummaryPayment_summary-payment">
                        <div class="SummaryPayment_title">
                            <h3>Hình thức thanh toán</h3>
                        </div>
                        <div class="PaymentMethod_pmt-box">
                            <div class="PaymentMethod_pmt-item PaymentMethod_active__KaSrA">
                                <div class="PaymentMethod_icon">
                                    <img src="images/icon/icon-tienmat.png" alt="">
                                </div>
                                <div class="PaymentMethod_info">
                                    <div class="PaymentMethod_name">Tiền Mặt</div>
                                    <div class="PaymentMethod_description">Thanh toán bằng tiền mặt khi nhận hàng</div>
                                </div>
                                <div class="PaymentMethod_select-icon"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="CheckoutComplete_right-wrapper">
                    <div class="PaymentInformation_content">
                        <h5 class="PaymentInformation_header">THÔNG TIN THANH TOÁN</h5>
                        <div class="PaymentInformation_body">
                            <div class="CartSelector_total-item">
                                <span class="CartSelector_item-text">Tổng tiền:</span>
                                <p class="CartSelector_item-price price-txt-line-through" id="total">537.000đ</p>
                            </div>
                            <div class="CartSelector_total-item">
                                <span class="CartSelector_item-text">Giảm giá trực tiếp</span>
                                <p class="CartSelector_item-price" id="Direct-discount">63.000đ</p>
                            </div>
                            <div class="CartSelector_total-item">
                                <span class="CartSelector_item-text">Giảm giá voucher</span>
                                <p class="CartSelector_item-price" id="vocher-discount">0đ</p>
                            </div>
                            <div class="CartSelector_total-item">
                                <span class="CartSelector_item-text">Phí vận chuyển</span>
                                <p class="CartSelector_item-price" id="Transport_Fee">0đ</p>
                            </div>
                            <div class="CartSelector_total-item">
                                <span class="CartSelector_item-text">Tiết kiệm được</span>
                                <p class="CartSelector_item-price" id="savings-amount">63.000đ</p>
                            </div>
                        </div>
                        <div class="PaymentInformation_footer">
                            <div class="CartSelector_total-item">
                                <span class="CartSelector_item-text">Thành tiền</span>
                                <p class="CartSelector_item-price" id="Total_money_all">500.000đ</p>
                            </div>
                        </div>
                        <a href="#" class="DeleteOrder_detail">Hủy đơn hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>