<?php
if (['GiaCu'] > 0) {
  $html_dssp_sale_home = get_show_dssp($dssp_sale_home);
} else {
}

$html_dssp_functionalfoods_home = get_show_dssp($dssp_functionalfoods_home);
$html_dssp_group_home = get_show_dssp($dssp_group_home);


$html_dsdm_sp_group_home = '';
$i = 1;
foreach ($load_danhmuc_group as $dsdm_group) {
  extract($dsdm_group);
  if ($i == 1) $actv = "button__link-active";
  else $actv = "";
  $html_dsdm_sp_group_home .= '<a href="#" class="related-tag button__link ' . $actv . '"><span>' . $tenDM_group . '</span></a>';
  $i++;
}
?>

<div class="MainLayout_content">
  <div class="container">
    <div class="DescriptionSlider_banner">
      <div class="DescriptionSlider_banner-left">
        <div class="DescriptionSlider_banner-list">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="Banner_slide-item">
                <img src='images/svgs/banner-1.png'>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="Banner_slide-item">
                <img src='images/svgs/banner-2.png'>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="Banner_slide-item">
                <img src='images/svgs/banner-3.png'>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="Banner_slide-item">
                <img src='images/svgs/banner-4.png'>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="DescriptionSlider_banner-right">
        <img src="images/svgs/banner-3.png">
        <img src="images/svgs/banner-2.png">
      </div>
    </div>

    <div class="DescriptionTerms_policy">
      <div class="DescriptionTerms_policy-content">
        <div class="DescriptionTerms_policy-item">
          <div class="DescriptionTerms_policy-item-img"><img src="images/icon/icon-banner1.png" alt=""></div>
          <div class="DescriptionTerms_policy-item-title">
            <p>100% Thuốc chính hãng</p>
            <span>Chất lượng tốt uy tín</span>
          </div>
        </div>
        <div class="DescriptionTerms_policy-item">
          <div class="DescriptionTerms_policy-item-img"><img src="images/icon/icon-banner2.png" alt=""></div>
          <div class="DescriptionTerms_policy-item-title">
            <p>Đủ thuốc theo toa</p>
            <span>Thuốc điều trị, đặc trị</span>
          </div>
        </div>
        <div class="DescriptionTerms_policy-item">
          <div class="DescriptionTerms_policy-item-img"><img src="images/icon/icon-banner3.png" alt=""></div>
          <div class="DescriptionTerms_policy-item-title">
            <p>Chuyên môn, tận tình</p>
            <span>Dược sĩ giàu kinh nghiệm</span>
          </div>
        </div>
        <div class="DescriptionTerms_policy-item">
          <div class="DescriptionTerms_policy-item-img"><img src="images/icon/icon-banner4.png" alt=""></div>
          <div class="DescriptionTerms_policy-item-title">
            <p>30 ngày đổi trả</p>
            <span>Kể từ lúc mua hàng</span>
          </div>
        </div>
        <div class="DescriptionTerms_policy-item">
          <div class="DescriptionTerms_policy-item-img"><img src="images/icon/icon-banner5.png" alt=""></div>
          <div class="DescriptionTerms_policy-item-title">
            <p>Miễn phí vận chuyển</p>
            <span>Theo chính sách giao hàng</span>
          </div>
        </div>
      </div>
    </div>

    <!-- sản phẩm bán chạy-->
    <section class="FlashSale-container" id="FlashSale">
      <div class="FlashSale_title-featured" gutter="[object Object]">
        <img src="images/svgs/background-deal.png" alt="" class="FlashSale_title-img">
      </div>
      <div class="FlashSale-body-content">
        <div class="slider-frame List_promotional-products">
          <div class="swiper-wrapper">
            <?= $html_dssp_sale_home ?>
          </div>
        </div>
        <a class="ProductCarousel_link__PCl8PC" href="/collection/duoc-tin-dung-nhieu-nhat/Q29sbGVjdGlvbjoxMTA5">Xem
          tất cả <i class="iconcmt-Arrow_Right"></i></a>
      </div>
    </section>

    <!-- Thực phẩm chức năng -->
    <section class="ProductDescription-featured ProductDescription_position">
      <div class="ProductDescription-featured_header">
        <div class="ProductDescription-featured_title">
          <h2>Thực Phẩm Chức Năng</h2>
        </div>
        <div class="ProductDescription_button-btn_lts ProductDescription-support-function_btn">
          <div class="ButtonSlider-control ProductSupport-function_btn_left">
            <i class="fa-solid fa-arrow-left fa-sm"></i>
          </div>
          <div class="ButtonSlider-control ProductSupport-function_btn_right">
            <i class="fa-solid fa-arrow-right fa-sm"></i>
          </div>
        </div>
      </div>
      <div class="ProductDescription-featured_content">
        <div class="slider-frame List_ProductSupport-function">
          <div class="swiper-wrapper">
            <?= $html_dssp_functionalfoods_home; ?>
          </div>
        </div>
        <a class="ProductCarousel_link__PCl8PC" href="/collection/duoc-tin-dung-nhieu-nhat/Q29sbGVjdGlvbjoxMTA5">Xem
          tất cả <i class="iconcmt-Arrow_Right"></i></a>
      </div>
    </section>

    <!--Thương hiệu yêu thích-->
    <section class="ProductDescription-featured change-distance">
      <div class="ProductDescription-featured_header widget">
        <div class="ProductDescription-featured_title">
          <img src="images/icon/icon-thyt.png" alt="">
          <h2>Thương hiệu yêu thích</h2>
        </div>
        <div class="ProductDescription_button-btn_lts ProductDescription-favorite-brand_btn">
          <div class="ButtonSlider-control ProductFavorite-brand_btn_left">
            <i class="fa-solid fa-arrow-left fa-sm"></i>
          </div>
          <div class="ButtonSlider-control ProductFavorite-brand_btn_right">
            <i class="fa-solid fa-arrow-right fa-sm"></i>
          </div>
        </div>
      </div>
      <div class="ProductDescription-featured_content">
        <div class="slider-frame List_ProductFavorite-brand">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="OutstandingBrand_brand-item">
                <div class="brand-banner__img">
                  <img src="images/svgs/thyt-1.png" alt="">
                </div>
                <div class="trademark__img">
                  <img src="images/svgs/logo-thyt-1.png" alt="">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="OutstandingBrand_brand-item">
                <div class="brand-banner__img">
                  <img src="images/svgs/thyt-2.png" alt="">
                </div>
                <div class="trademark__img">
                  <img src="images/svgs/logo-thyt-2.png" alt="">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="OutstandingBrand_brand-item">
                <div class="brand-banner__img">
                  <img src="images/svgs/thyt-3.png" alt="">
                </div>
                <div class="trademark__img">
                  <img src="images/svgs/logo-thyt-3.png" alt="">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="OutstandingBrand_brand-item">
                <div class="brand-banner__img">
                  <img src="images/svgs/thyt-4.png" alt="">
                </div>
                <div class="trademark__img">
                  <img src="images/svgs/logo-thyt-4.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sản phẩm theo nhóm -->
    <section class="ProductDescription-featured ProductDescription_position" id="">
      <div class="ProductDescription-featured_header">
        <div class="ProductDescription-featured_title">
          <h2>Sản phẩm theo nhóm</h2>
        </div>
        <div class="ProductDescription_button-btn_lts ProductDescription-arranged_group_btn">
          <div class="ButtonSlider-control ProductsArranged_group_btn_left">
            <i class="fa-solid fa-arrow-left fa-sm"></i>
          </div>
          <div class="ButtonSlider-control ProductsArranged_group_btn_right">
            <i class="fa-solid fa-arrow-right fa-sm"></i>
          </div>
        </div>
      </div>
      <div class="ProductDescription-featured_tab">
        <?= $html_dsdm_sp_group_home; ?>
      </div>
      <div class="ProductDescription-featured_content">
        <div class="slider-frame List_ProductsArranged_group">
          <div class="swiper-wrapper">
            <?= $html_dssp_group_home; ?>
          </div>
        </div>
        <a class="ProductCarousel_link__PCl8PC" href="/collection/duoc-tin-dung-nhieu-nhat/Q29sbGVjdGlvbjoxMTA5">Xem
          tất cả <i class="iconcmt-Arrow_Right"></i></a>
      </div>
    </section>

    <!-- Góc sức khỏe-->
    <section class="ProductDescription-featured ProductDescription_position HealthNews-change-distance">
      <div class="ProductDescription-featured_header">
        <div class="ProductDescription-featured_title">
          <img src="images/icon/icon-healthy.png" alt="">
          <h2>Góc sức khỏe</h2>
        </div>
        <a class="ProductCarousel_link__PCl8PC" href="/collection/duoc-tin-dung-nhieu-nhat/Q29sbGVjdGlvbjoxMTA5">Xem
          tất cả <i class="iconcmt-Arrow_Right"></i></a>
      </div>
      <div class="ProductDescription-featured_tab tab-widget">
        <a href="" class="related-tag button__link news-tag"><span>Tin tức</span></a>
        <a href="" class="related-tag button__link news-tag"><span>Mẹ và bé</span></a>
        <a href="" class="related-tag button__link news-tag"><span>Dinh dưỡng</span></a>
        <a href="" class="related-tag button__link news-tag"><span>Phòng & chữa bệnh</span></a>
        <a href="" class="related-tag button__link news-tag"><span>Người cao tuổi</span></a>
        <a href="" class="related-tag button__link news-tag"><span>Khỏe đẹp</span></a>
        <a href="" class="related-tag button__link news-tag"><span>Giới tính</span></a>
        <a href="" class="related-tag button__link news-tag"><span>Tin sức khỏe</span></a>
      </div>
      <div class="ProductDescription-featured_content">
        <div class="HealthCenter_news_wrapper">
          <div class="HealthNews-first">
            <a href="#">
              <div class="HealthNews-first-image">
                <img loading="lazy" src="images/svgs/khuyenmai-deal.png">
              </div>
            </a>
            <div class="HealthNews-first-title">
              <a class="block" href="/bai-viet/truyen-thong">
                <p class="Post_category">Tin khuyến mãi</p>
              </a>
              <a class="block" href="#">
                <h3 class="CategoryNews_title">Thể Lệ Chương Trình "MỪNG LỄ VU LAN - TRAO SỨC KHOẺ VÀNG"</h3>
              </a>
            </div>
          </div>

          <div class="HealthNews-other">
            <div class="News-other">
              <a class="block" href="#">
                <div class="News-other-img">
                  <img src="images/svgs/healthy-1.png" alt="" loading="lazy">
                </div>
                <div class="News-other-title">
                  <p class="Post_category">Dinh dưỡng</p>
                  <h3 class="CategoryNews_title">Uống nước ép bí đao có hại không và những điều cần biết</h3>
                </div>
              </a>
            </div>
            <div class="News-other">
              <a class="block" href="#">
                <div class="News-other-img">
                  <img src="images/svgs/healthy-2.png" alt="" loading="lazy">
                </div>
                <div class="News-other-title">
                  <p class="Post_category">Mẹ và bé</p>
                  <h3 class="CategoryNews_title">Dấu hiệu nhận biết kém hấp thu ở trẻ. Enzymax kids - Giúp bé hấp thu
                    dinh dưỡng tốt hơn</h3>
                </div>
              </a>
            </div>
            <div class="News-other">
              <a class="block" href="#">
                <div class="News-other-img">
                  <img src="images/svgs/healthy-3.png" alt="" loading="lazy">
                </div>
                <div class="News-other-title">
                  <p class="Post_category">Phòng & chữa bệnh</p>
                  <h3 class="CategoryNews_title">Thuốc rửa ruột nội soi đại tràng: Cách sử dụng thuốc an toàn và hiệu
                    nghiệm</h3>
                </div>
              </a>
            </div>
            <div class="News-other">
              <a class="block" href="#">
                <div class="News-other-img">
                  <img src="images/svgs/healthy-4.png" alt="" loading="lazy">
                </div>
                <div class="News-other-title">
                  <p class="Post_category">Phòng & chữa bệnh</p>
                  <h3 class="CategoryNews_title">Thuốc rửa ruột nội soi đại tràng: Cách sử dụng thuốc an toàn và hiệu
                    nghiệm</h3>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>