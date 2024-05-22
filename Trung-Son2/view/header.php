<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trung Son</title>
  <link rel="stylesheet" href="view/css/app.css">
  <link rel="stylesheet" href="view/css/all.min.css">
  <link rel="stylesheet" href="view/css/jquery.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body>
  <div class="Header_main-header">
    <nav class="HeaderPC_header">
      <div id="header-fixed" class="HeaderPC_fixed">
        <div class="container">
          <div class="HeaderPC_header-top">
            <div class="HeaderPC_logo">
              <a href="index.php">
                <img src="images/icon/logo_ts.png" alt="Trung son">
              </a>
            </div>
            <div class="HeaderPC_search-section ">
              <div class="SearchBox_search-box">
                <input placeholder="Tìm tên thuốc, bệnh lý, thực phẩm chức năng..." value="">
                <i class="iconcmt-sreach"></i>
              </div>
            </div>
            <div class="HeaderPC_hotline">
              <div class="HeaderPC_hotline-content">
                <p>Tư vấn miễn phí:</p>
                <p>1800 55 88 98</p>
              </div>
            </div>
          </div>
          <div class="menu-container" id="menu-main">
            <ul class="CategoryMenuTab_list">
              <?php
              foreach ($load_danhmuc_home as $danhmuc_home) {
                $TenDM = $danhmuc_home['TenDM'];
                echo '<li class="CategoryMenuTab_item">';
                echo '<a href="index.php?act=danh_sach_san_pham&/iddm=' . $danhmuc_home['id'] . '">';
                echo $TenDM;
                echo '<i class="iconcmt-Arrow_Down"></i></a>';
                echo '<div class="CategoryMenu_product-menu-container">
                           <div class="CategoryMenu_product-menu-box">
                             <div class="CategoryMenu_category-list">';
                // Gọi hàm get_Children_by_ParentID($parentID) ở đây và lưu kết quả vào biến $children
                $parentID = $danhmuc_home['id'];
                $children_danhmuc = get_Children_by_ParentID($parentID);
                // Sử dụng kết quả truy vấn
                foreach ($children_danhmuc as $child) {
                  echo '<div class="CategoryMenu_category-item">';
                  echo '<a href="index.php?act=danh_sach_san_pham&/' . $danhmuc_home['TenDM'] . '/' . $child['TenDM'] . '">' . $child['TenDM'] . '<i class="iconcmt-Arrow_Right"></i></a>';
                  echo '</div>';
                }
                echo '</div>
                  <div class="CategoryMenu_content">
                        <div class="CategoryMenu_category-content-top">
                          <a class="Category_product-info">
                            <img src="images/product/da-day.png" alt="">
                            <p>Dạ dày, tá tràng</p>
                          </a>
                          <a class="Category_product-info">
                            <img src="images/product/vi-sinh.png" alt="">
                            <p>Táo bón</p>
                          </a>
                          <a class="Category_product-info">
                            <img src="images/product/da-day.png" alt="">
                            <p>Dạ dày, tá tràng</p>
                          </a>
                          <a class="Category_product-info">
                            <img src="images/product/da-day.png" alt="">
                            <p>Dạ dày, tá tràng</p>
                          </a>
                          <a class="Category_product-info">
                            <img src="images/product/da-day.png" alt="">
                            <p>Dạ dày, tá tràng</p>
                          </a>
                          <a class="Category_product-info">
                            <img src="images/product/da-day.png" alt="">
                            <p>Dạ dày, tá tràng</p>
                          </a>
                        </div>
  
                        <div class="DescriptionBestseller">
                          <div class="DescriptionBestseller-header">
                            <div class="DescriptionBestseller-title">
                              <h3>Bán chạy nhất</h3>
                              <a class="ProductCarousel_link__PCl8PC" href="#">Xem tất cả <i class="iconcmt-Arrow_Right"></i></a>
                            </div>
                            <div class="ProductDescription_button-btn_lts DescriptionBestseller_btn">
                              <div class="ButtonSlider-control DescriptionBestseller_btn_left">
                                <i class="fa-solid fa-arrow-left fa-sm"></i>
                              </div>
                              <div class="ButtonSlider-control DescriptionBestseller_btn_right">
                                <i class="fa-solid fa-arrow-right fa-sm"></i>
                              </div>
                            </div>
                          </div>
                          <div class="DescriptionBestseller-content">
                            <div class="slider-frame List_ProductMost-sold">
                              <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                  <div class="ProductCarousel_item">
                                    <a class="ProductItem-info_container" href="#">
                                      <div class="ProductItem-image">
                                        <img src="images/product/hinh1.png" alt="san-pham">
                                      </div>
                                      <div class="ProductItem-content">
                                        <div class="ProductItem_title">
                                          Xà phòng Acnes Body Bar Nseo Acnes
                                          Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)
                                        </div>
                                        <div class="ProductItem_original-price"></div>
                                        <div class="ProductItem_discount-price">
                                          <span>199.000 đ/<span class="ProductItem_discount-price-style">Hộp</span></span>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                                <div class="swiper-slide">
                                  <div class="ProductCarousel_item">
                                    <a class="ProductItem-info_container" href="#">
                                      <div class="ProductItem-image">
                                        <img src="images/product/hinh1.png" alt="san-pham">
                                      </div>
                                      <div class="ProductItem-content">
                                        <div class="ProductItem_title">
                                          Xà phòng Acnes Body Bar Nseo Acnes
                                          Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)
                                        </div>
                                        <div class="ProductItem_original-price"></div>
                                        <div class="ProductItem_discount-price">
                                          <span>199.000 đ/<span class="ProductItem_discount-price-style">Hộp</span></span>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                                <div class="swiper-slide">
                                  <div class="ProductCarousel_item">
                                    <a class="ProductItem-info_container" href="#">
                                      <div class="ProductItem-image">
                                        <img src="images/product/hinh1.png" alt="san-pham">
                                      </div>
                                      <div class="ProductItem-content">
                                        <div class="ProductItem_title">
                                          Xà phòng Acnes Body Bar Nseo Acnes
                                          Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)
                                        </div>
                                        <div class="ProductItem_original-price"></div>
                                        <div class="ProductItem_discount-price">
                                          <span>199.000 đ/<span class="ProductItem_discount-price-style">Hộp</span></span>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                                <div class="swiper-slide">
                                  <div class="ProductCarousel_item">
                                    <a class="ProductItem-info_container" href="#">
                                      <div class="ProductItem-image">
                                        <img src="images/product/hinh1.png" alt="san-pham">
                                      </div>
                                      <div class="ProductItem-content">
                                        <div class="ProductItem_title">
                                          Xà phòng Acnes Body Bar Nseo Acnes
                                          Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)
                                        </div>
                                        <div class="ProductItem_original-price"></div>
                                        <div class="ProductItem_discount-price">
                                          <span>199.000 đ/<span class="ProductItem_discount-price-style">Hộp</span></span>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                                <div class="swiper-slide">
                                  <div class="ProductCarousel_item">
                                    <a class="ProductItem-info_container" href="#">
                                      <div class="ProductItem-image">
                                        <img src="images/product/hinh1.png" alt="san-pham">
                                      </div>
                                      <div class="ProductItem-content">
                                        <div class="ProductItem_title">
                                          Xà phòng Acnes Body Bar Nseo Acnes
                                          Curcumin &amp; Teatree Oil hỗ trợ điều trị mụn (75g)
                                        </div>
                                        <div class="ProductItem_original-price"></div>
                                        <div class="ProductItem_discount-price">
                                          <span>199.000 đ/<span class="ProductItem_discount-price-style">Hộp</span></span>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
                echo '</li>';
              }
              ?>

              <li>
                <a href="#" class="HeaderPC_login_account">
                  <p><i class="iconcmt-User"></i></p>
                  <span>Đăng nhập</span>
                </a>
              </li>

              <li>
                <div class="PaymentAndCart_wrapper">
                  <a href="index.php?act=viewcart" class="flex items-center">
                    <span class="CartBadge_box">
                      <i class="iconcmt-shoppingcart"></i>
                      <p class="CartBadge-number">2</p>
                    </span>
                    <span class="name-cart">Giỏ hàng</span></a>

                  <?php
                  // echo var_dump($_SESSION['giohang']);
                  if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                    if (sizeof($_SESSION['giohang']) > 0) {
                      $i = 0;
                      $tong = 0;
                      echo '<div class="ProductsCart_list">';
                      echo '<div class="ProductsCart_list-wapper">';
                      echo '<div class="ProductsCart_list-head">
                              <span>Tổng tiền: </span>
                              <p id="Product-total">' . number_format($tong, 0, ",", ".") . ' đ</p>
                              </div>';
                      foreach ($_SESSION['giohang'] as $item) {
                        extract($item);
                        $linksp_dssp = "index.php?act=chi_tiet_san_pham&idsp=" . $id;
                        $tt = $GiaHienTai * $soluong;
                        $linkdel = "index.php?act=delcart&ind=" . $i;
                        if ($GiaCu > 0) {
                          $GiaCu = '' . number_format($GiaCu, 0, ",", ".") . 'đ';
                        } else {
                          $GiaCu = '';
                        }
                        $tong += $tt;
                        echo '<div class="ProductsCart_list-body">';
                        echo ' <div class="ProductsCart_Item">
                                  <div class="ProductsCart_Item-image">
                                    <a href="#">
                                      <img src="images/product/' . $Img . '" alt="">
                                    </a>
                                  </div>
                                  <div class="ProductsCart_Item-info">
                                    <a href="' . $linksp_dssp . '">
                                      <label class="name-product ">' . $TenSP . '</label>
                                    </a>
                                    <div class="ProductsCart_Item-info-bottom">
                                      <span class="Item-unit">' . $soluong . ' X</span>
                                      <div class="Item-prices">
                                        <span class="ItemPrices_new">' . number_format($GiaHienTai, 0, ",", ".") . 'đ</span>
                                        <span class="ItemPrices_old txt-line-through">' . $GiaCu . '</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="ProductsCart_Item-trash">
                                    <a href="' . $linkdel . '"><i class="iconcmt-close_X"></i></a>
                                  </div>  
                              </div>';
                        $i++;
                      }
                      echo '</div>';
                      echo '<div class="ProductsCart_list-bottom">
                              <a href="index.php?act=thanh_toan"><button class="Button_button__yfvRh ProductsCart_Item_buy-now">THANH
                                    TOÁN</button></a>
                              <a href="#"><button class="Button_button__yfvRh ProductsCart_Item_delete-cart">XÓA TẤT CẢ</button></a>
                            </div>';
                    } else {
                    }
                  }
                  ?>

                </div>

              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="ReactModalPortal">
    <div class="DesktopModal_OverlayBase ">
      <div class="DesktopModal_modalBase DesktopModal_modalBase_After-open" tabindex="-1" role="dialog" aria-modal="true">
        <div class="AuthModal_body-modal">
          <div class="AuthModal_auth-modal_content" id="Authentication_method_Phone-enter">
            <div class="AuthModal_auth-modal-header">
              <div class="AuthModal_auth-modal-title">
                <h3>Xin chào,</h3>
                <span>Đăng nhập hoặc tạo tài khoản</span>
              </div>
              <span class="AuthModal_btn-close" title="Close Modal">&times;</span>
            </div>
            <div class="AuthModal_auth-modal-body">
              <div class="AuthModal_auth-modal-img">
                <img src="images/icon/logo-sign1.png" alt="">
              </div>
              <p style="width: 70%;">Nhập số điện thoại mua hàng để hưởng
                đặc quyền riêng tại Trung Sơn </p>
              <form action="#" class="SmsLoginForm_wrapper-sms-login">
                <input type="text" class="SmsLoginForm_phone-input" placeholder="Nhập số điện thoại" maxlength="10" inputmode="tel" name="phoneNumber">
              </form>
              <button class="Button_button__yfvRh SmsLoginForm_btn-confirm">Tiếp tục</button>
            </div>
          </div>
          <div class="AuthModal_auth-modal_content" id="Authentication_method_Phone-code">
            <div class="AuthModal_auth-modal-header">
              <div class="AuthModal_auth-modal-title">
                <h3>Xin chào,</h3>
              </div>
              <span class="AuthModal_btn-close" title="Close Modal">&times;</span>
            </div>
            <div class="AuthModal_auth-modal-body">
              <div class="AuthModal_auth-modal-img">
                <img src="images/icon/logo-phone-enter.png" alt="">
              </div>
              <p>Mã xác thực được gửi đến số điện thoại <span class="SendOTP_phone-hidden"></span></p>
              <a class="Btns-returnPhone"><i class="fa-solid fa-pen-to-square"></i> Đổi số điện thoại để nhận mã</i></a>
              <p style="margin-top: 10px;">Vui lòng chọn hình thức nhận mã</p>
              <button class="Button_button__yfvRh SmsLoginForm_btn-code">Nhận mã qua Zalo</button>
              <p style="margin-top: 11px;">Hoặc <a class="SendCodeSms">Nhận mã qua tin nhắn SMS</a></p>
            </div>
          </div>
          <div class="AuthModal_auth-modal_content" id="Authentication_method_ConfirmCode-OTP">
            <div class="AuthModal_auth-modal-header">
              <div class="AuthModal_auth-modal-title">
                <p class="AuthModal_auth-return-page" style="cursor: pointer;"><i class="fa-solid fa-chevron-left fa-sm"></i></p>
                <h3>Xác nhân OTP</h3>
              </div>
              <span class="AuthModal_btn-close" title="Close Modal">&times;</span>
            </div>
            <div class="AuthModal_auth-modal-body">
              <div class="AuthModal_auth-modal-img">
                <img src="images/icon/logo-sign1.png" alt="">
              </div>
              <p>Mã OTP đã được gửi đến số điện thoại <span class="SendOTP_phone-hidden"></span><span class="SendOTP_otp-time-out"></span></p>
              <a class="Btns-returnPhone"><i class="fa-solid fa-pen-to-square"></i> Đổi số điện thoại để nhận mã</i></a>
              <div class="SendOTP_group-input-otp">
                <input type="text" class maxlength="1" inputmode="numeric" pattern="[0-9]*" name="otp1" />
                <input type="text" class maxlength="1" inputmode="numeric" pattern="[0-9]*" name="otp2" />
                <input type="text" class maxlength="1" inputmode="numeric" pattern="[0-9]*" name="otp3" />
                <input type="text" class maxlength="1" inputmode="numeric" pattern="[0-9]*" name="otp4" />
                <input type="text" class maxlength="1" inputmode="numeric" pattern="[0-9]*" name="otp5" />
                <input type="text" class maxlength="1" inputmode="numeric" pattern="[0-9]*" name="otp6" />
              </div>
              <button class="Button_button__yfvRh SmsLoginForm_btn_code-OTP">Xác nhận</button>
              <a class="SendOTP_again">Gửi lại mã OTP</a>
            </div>
          </div>
          <div class="AuthModal_auth-modal_content" id="Authentication_method_Create-Account">
            <div class="AuthModal_auth-modal-header">
              <div class="AuthModal_auth-modal-title">
                <p class="AuthModal_auth-return-page" style="cursor: pointer;"><i class="fa-solid fa-chevron-left fa-sm"></i></p>
                <h3>Tạo tài khoản</h3>
              </div>
              <span class="AuthModal_btn-close" title="Close Modal">&times;</span>
            </div>
            <div class="AuthModal_auth-modal-body">
              <div class="AuthModal_auth-modal-img">
                <img src="images/icon/logo-create-acc.png" alt="">
              </div>
              <form class="DescriptionPersonal_information">
                <div class="MyPersonal-information">
                  <span>Vui lòng cho biết tên của bạn</span>
                  <div class="fill-info-form-user-list">
                    <input type="text" placeholder="Gồm 2 từ trở lên, không bao gồm số và ký tự đặc biệt" class value="" name="hovaten" id="fullNameInput">
                  </div>
                </div>
                <div class="MyPersonal-information">
                  <span>Đặt mật khẩu</span>
                  <div class="fill-info-form-user-list">
                    <input type="password" placeholder="Từ 8 đến 32 kí tự, bao gồm số và chữ" class value="" name="Mật khẩu" id="PasswordInput">
                    <p class="Btns_pss Btns_pss-hidden"><i class="fa-solid fa-eye-slash fa-flip-horizontal fa-lg" style="color: #acafb4;"></i></p>
                  </div>
                </div>
              </form>
              <button class="Button_button__yfvRh SmsLoginForm_btn_CreateAcc">Tạo tài khoản</button>
              <div class="TermsUse-PrivacyPolicy">
                Tôi đã đọc và đồng ý với<a href="#"> điều khoản sử dụng</a> và
                <a href="#">chính sách bảo mật thông tin</a> của Trung Sơn
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>