
<dive class="Main">
    
    <section class="section__1">
        <i class="fa-solid fa-angle-left left left__Banner"></i>

        <div class="section__1--slide">
            <div class="slide--subItem">
                <div class="section__1--Title">
                    
                    <a href="SanPham&page=0&IDLoai=7">Mua ngay</a>
                </div>
            </div>
            <div class="slide--subItem">
                <div class="section__1--Title">
                    
                    <a href="SanPham&page=0&IDLoai=3">Mua ngay</a>
                </div>
            </div>
            <div class="slide--subItem">
                <div class="section__1--Title">
                   
                    <a href="SanPham&page=0&IDLoai=1">Mua ngay</a>
                </div>
            </div>
        </div>

        <i class="fa-solid fa-angle-right right right__Banner"></i>
    </section>

    <input type="checkbox" id="modal-cart__overplay" class="modal-cart__Input">
    <input type="checkbox" id="quickView__overplay" class="quickView__Input">

    <label for="modal-cart__overplay" class="cart-overplay"></label>
    <label for="quickView__overplay" class="quickView-overplay"></label>

    <input hidden checked="true" type="checkbox" id="check-event">
    <label for="check-event" class="label-event"></label>

    <div class="event">
        <i class="fa-regular fa-circle-xmark close-banner__event"></i>
        <img class="event-image" src="" alt="">
    </div>

    <div class="modal-cart"></div>

    <div class="quickView"></div>

    <div class="notifyFavourite"></div>

    <section class="section__2">
        <div class="section__2__Brand">
            <div class="section__2__Brand__Name Title__All">
                <div class="Title__Name">
                    <span>Giày</span>
                    <h2>BRAND</h2>
                </div>
            </div>

            <div class="section__2__Brand__Contain">

                <i class="fa-solid fa-angle-left left leftBrand"></i>

                <div class="Iteams__Brand">
                    <div class="subItem__Brand">
                        <img src="Public/image/l1.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l2.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l3.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l4.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l5.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l6.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l7.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l8.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l9.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l10.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l11.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                    <img src="Public/image/l12.png"
                            alt="">
                    </div>
                </div>

                <i class="fa-solid fa-angle-right right rigthBrand"></i>

            </div>
        </div>
    </section>

    <section class="section__3">
        <div class="section__3__Contain">
            
            <div class="section__3__Contain__Right">
                <i class="fa-solid fa-angle-left left left__Sale"></i>

                <div class="Contain__ProductSale Contain__ProductSale--Mobile">
                    <?php
                    while ($row =  mysqli_fetch_array($data['product'])) {
                        $giaGiam = $row["giaSP"] * ($row["giaGiam"] / 100);
                        $total = $row["giaSP"] - $giaGiam;
                    ?>
                    <div class="prodDuct__sale prodDuct__sale--PageMain">
                        <div class="User__Choose">
                            <div class="Choose User__Choose__Cart">
                                <a data-value='<?php echo $row["IDSP"] ?>'
                                    data-size='<?php echo $row["size"] ?>'
                                    class='Cart--shopping'>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>

                            <div class="Choose User__Choose__Look">
                                <a data-idsp='<?php echo $row["IDSP"] ?>'
                                    class='Cart--Look'>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </div>
                            <div class="Choose User__Choose__Love">
                                <a data-id="<?php echo $row["IDSP"] ?>"
                                    class="choose--Love">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <?php
                            if ($row["giaGiam"] > 0) { ?>
                        <div id="total__Sale--Hot" class="total__Sale">
                            <?php echo $row["giaGiam"]; ?>%</div>
                        <?php } ?>

                        <div class="product-Contain">
                            <div class="product-Contain__Image">
                                <a
                                    href="ChiTietSanPham&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"] ?>">
                                    <img class="prodDuct__sale__Image"
                                        src="<?php echo $row['image'] ?>" alt="">
                                </a>
                            </div>

                            <div class="product-Contain__Content">
                                <a class="product-Contain__Content--Top"
                                    href="ChiTietSanPham&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"] ?>">
                                    <?php echo $row['tenSP'] ?>
                                </a>
                                <div
                                    class="product__Total product-Contain__Content--Bottom">
                                    <div class="reduce__Price">
                                        <?php echo number_format($total, 0, ',', '.'); ?><span
                                            class="total">đ</span></div>
                                    <?php
                                        if ($row["giaGiam"] > 0) { ?>
                                    <div class="original__price">
                                        <?php if ($row["giaGiam"] > 0) {
                                                    echo number_format($row['giaSP'], 0, ',', '.');
                                                } ?><span class="total">đ</span></div>
                                    <?php } ?>
                                </div>

                                <div class="product-Contain__Review">
                                    <div class="stars">
                                        <input checked=true
                                            class='star-show star-show__Review star-show-0'
                                            id='star-show-0' type='radio' />
                                        <label
                                            class='star-show star-show__Review star-show-0'
                                            for='star-show-0'></label>
                                        <input checked=true
                                            class='star-show star-show__Review star-show-1'
                                            id='star-show-1' type='radio' />
                                        <label
                                            class='star-show star-show__Review star-show-1'
                                            for='star-show-1'></label>
                                        <input checked=true
                                            class='star-show star-show__Review star-show-2'
                                            id='star-show-2' type='radio' />
                                        <label
                                            class='star-show star-show__Review star-show-2'
                                            for='star-show-2'></label>
                                        <input checked=true
                                            class='star-show star-show__Review star-show-3'
                                            id='star-show-3' type='radio' />
                                        <label
                                            class='star-show star-show__Review star-show-3'
                                            for='star-show-3'></label>
                                        <input checked=true
                                            class='star-show star-show__Review star-show-4'
                                            id='star-show-4' type='radio' />
                                        <label
                                            class='star-show star-show__Review star-show-4'
                                            for='star-show-4'></label>
                                    </div>
                                    <div class="amount-Stars">
                                        <?php
                                            foreach ($data["star"] as $item) {
                                                if ($row["ID"] == $item["IDSP"]) { ?>
                                        <p>( <?php echo $item["amountStar"] ?> )</p>
                                        <?php }
                                            } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <i class="fa-solid fa-angle-right right right--new right__Sale"></i>
            </div>
        </div>
    </section>
   

  

    <section class="section__6">
        <div class="section__6__Banner">
            <div class="section__6__Content section__4__Content">
                <span>Chân thật từ chất liệu đến phong cách </span>
               
                <p>Chúng tôi chuyên cung cấp giày thời trang và phụ kiện với sự chú trọng vào chất lượng và phong cách. Tất cả các sản phẩm của chúng tôi được làm từ các chất liệu chất lượng cao, đảm bảo mang lại sự thoải mái và đẳng cấp cho bạn. Đồng thời, chúng tôi cam kết đưa đến khách hàng những sản phẩm giày thời trang với giá cả hợp lý.

Mỗi đôi giày của chúng tôi đều được thiết kế để phản ánh phong cách và cá nhân của bạn. Sự đa dạng trong mẫu mã và kiểu dáng sẽ giúp bạn dễ dàng chọn lựa những đôi giày phù hợp với mọi dịp, từ công việc đến những sự kiện quan trọng.

Chúng tôi tin rằng việc mang giày không chỉ là về sự thoải mái mà còn là về phong cách cá nhân. Hãy đến với chúng tôi để trải nghiệm sự kết hợp hoàn hảo giữa chất lượng, phong cách và giá trị.
                </p>
                <a href="">Mua ngay</a>
            </div>
        </div>
    </section>

    <section class="section__5">
        <div class="section__5__Contain">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Khuyến mãi</span>
                    <h2>FLASH SALE</h2>
                </div>
            </div>

            <div class="section__5__Product__Sale">
                <div class="section__5__Items section__7__Items">
                    <i class="fa-solid fa-angle-left left product__Left"></i>
                    <div class="Item__Sale">
                        <?php
                        while ($row =  mysqli_fetch_array($data['productSale'])) {
                            $giaGiam = $row["giaSP"] * ($row["giaGiam"] / 100);
                            $total = $row["giaSP"] - $giaGiam;
                        ?>
                        <div class="prodDuct__sale proDuct__Lenght">
                            <div class="User__Choose">
                                <div class="Choose User__Choose__Cart">
                                    <a data-value='<?php echo $row["IDSP"] ?>'
                                        data-size='<?php echo $row["size"] ?>'
                                        class='Cart--shopping'>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>

                                <div class="Choose User__Choose__Look">
                                    <a data-idsp='<?php echo $row["IDSP"] ?>'
                                        class='Cart--Look'>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </div>
                                <div class="Choose User__Choose__Love">
                                    <a class='choose--Love'
                                        data-id='<?php echo $row["IDSP"] ?>'>
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="total__Sale total__Sale--newTotal">
                                <?php echo $row["giaGiam"] . "%" ?></div>

                            <div class="product-Contain product-Contain__Sale">
                                <div class="product-Contain__Image">
                                    <a
                                        href="ChiTietSanPham&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"] ?>">
                                        <img class="prodDuct__sale__Image prodDuct__sale__Image--sale prodDuct__sale__Image--new"
                                            src="<?php echo $row['image'] ?>" alt="">
                                    </a>
                                </div>

                                <div class="product-Contain__Content">
                                    <a class="product-Contain__Content--Top"
                                        href="ChiTietSanPham&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"] ?>">
                                        <?php echo $row['tenSP'] ?>
                                    </a>

                                    <div class="product__Total">
                                        <div class="reduce__Price">
                                            <?php echo number_format($total, 0, ',', '.'); ?><span
                                                class="total">đ</span>
                                        </div>
                                        <div class="original__price">
                                            <?php echo number_format($row['giaSP'], 0, ',', '.'); ?><span
                                                class="total">đ</span></div>
                                    </div>

                                    <div class="product-Contain__Review">
                                        <div class="stars">
                                            <input checked=true
                                                class='star-show star-show__Review star-show-0'
                                                id='star-show-0' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-0'
                                                for='star-show-0'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-1'
                                                id='star-show-1' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-1'
                                                for='star-show-1'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-2'
                                                id='star-show-2' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-2'
                                                for='star-show-2'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-3'
                                                id='star-show-3' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-3'
                                                for='star-show-3'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-4'
                                                id='star-show-4' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-4'
                                                for='star-show-4'></label>
                                        </div>
                                        <div class="amount-Stars">
                                            <?php
                                                foreach ($data["star"] as $item) {
                                                    if ($row["ID"] == $item["IDSP"]) { ?>
                                            <p>( <?php echo $item["amountStar"] ?> )</p>
                                            <?php }
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php    } ?>
                    </div>

                    <i class="fa-solid fa-angle-right right product__Right"></i>

                </div>
            </div>
        </div>
    </section>
    <section class="section__8">
        <div class="section__8__Contain">
            <div class="Contain__Banner">
                <div class="Contain__Banner__Left">
                    <div class="Title__All Title__All--title">
                        <div class="Title__Name">
                            <span>Chất Lượng </span>
                          
                        </div>
                    </div>
                    <div class="Contain__Banner__Left--Content">Chúng tôi không chỉ bán giày, mà còn mang đến trải nghiệm về chất lượng. Tất cả các sản phẩm của chúng tôi được sản xuất với sự tận tâm và kiểm soát chặt chẽ từ quy trình sản xuất đến chất liệu sử dụng. Điều này đảm bảo rằng mỗi đôi giày mà bạn chọn là một kiệt tác của sự chăm sóc và độ tinh tế..</div>
                </div>

                <div class="Contain__Banner__Right">
                    <a href="">
                        <img src="Public/image/bn1.png"
                            alt="">
                    </a>
                </div>
            </div>

            <div class="Contain__Banner Contain__Banner--reveser">
                <div class="Contain__Banner__Right">
                    <a href="">
                        <img src="Public/image/bn2.png"
                            alt="">
                    </a>
                </div>
                <div class="Contain__Banner__Left">
                    <div class="Title__All Title__All--title">
                        <div class="Title__Name">
                            <span>Hàng Chính hãng</span>
                           
                        </div>
                    </div>
                    <div class="Contain__Banner__Left--Content">Chúng tôi cam kết cung cấp chỉ những sản phẩm chính hãng, đảm bảo nguồn gốc xuất xứ rõ ràng. Điều này giúp bạn an tâm về chất lượng và tính đồng đều của sản phẩm. Bạn không chỉ mua giày, mà còn nhận được sự tin tưởng và độ an toàn về nguồn gốc của chúng.</div>
                </div>
            </div>

            <div class="Contain__Banner">
                <div class="Contain__Banner__Left">
                    <div class="Title__All Title__All--title">
                        <div class="Title__Name">
                            <span> Giá Cả Phải Chăng</span>
                          
                        </div>
                    </div>
                    <div class="Contain__Banner__Left--Content">Chất lượng không phải là điều duy nhất mà chúng tôi đặt lên hàng đầu. Chúng tôi còn cam kết đưa đến khách hàng những sản phẩm với giá cả hợp lý nhất. Chúng tôi tin rằng mọi người đều xứng đáng sở hữu những đôi giày chất lượng, và điều đó không phải là một ước mơ xa xôi..</div>
                </div>

                <div class="Contain__Banner__Right">
                    <a href="">
                        <img src="Public/image/bn3.png"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section__8">
        <div class="section__8__News">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Hữu ích</span>
                    <h2>BLOG TIPS & HINT</h2>
                </div>
            </div>
            <i class="fa-solid fa-angle-left newLeft"></i>

            <div class="section__8__News__Contain">
                <div class="Contain__New">
                    <?php
                    foreach ($data["news"] as $item) { ?>
                    <div class="NewItem">
                        <div class="NewItem__Image">
                            <a href="">
                                <img src="<?php echo $item["image"] ?>" alt="">
                            </a>
                        </div>
                        <div class="NewItem__Content">
                            <h3><a href=""><?php echo $item["title"] ?></a></h3>
                            <span><?php echo $item["date_at"] ?></span>
                            <p><?php echo $item["content"] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <i class="fa-solid fa-angle-right newRight "></i>
        </div>
    </section>

    <section class="section__11">
        <div class="section__11__AboutUs">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Về Chúng Tôi</span>
                    <h2>VIETSTALL</h2>
                </div>
            </div>

            <div class="About">
                <div class="About_slider">
                    <div class="About_item">
                        <div class="About_item-desc">
                            <p></p>
                        </div>
                        <img src="https://bizweb.dktcdn.net/100/302/551/themes/758295/assets/testimonial1.jpg?1699007615400"
                            alt="">
                        <div class="About_item-title">
                            <h4>Đạt 100.000+ khách hàng</h4>
                        </div>
                    </div>

                    <div class="About_item">
                        <div class="About_item-desc">
                            <p></p>
                        </div>
                        <img src="https://bizweb.dktcdn.net/100/302/551/themes/758295/assets/testimonial3.jpg?1699007615400"
                            alt="">
                        <div class="About_item-title">
                            <h4>10 năm hoạt động</h4>
                        </div>
                    </div>

                    <div class="About_item">
                        <div class="About_item-desc">
                            <p></p>
                        </div>
                        <img src="https://bizweb.dktcdn.net/100/302/551/themes/758295/assets/testimonial2.jpg?1699007615400"
                            alt="">
                        <div class="About_item-title">
                            <h4>15 Cửa hàng toàn quốc</h4>
                        </div>
                    </div>

                    <ul class="dots">
                        <li class="dots_active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    

    <section class="section__10">
        <div class="section__10__Support">
            <div class="Support">
                <div>
                    <i class="fa-solid fa-truck-moving"></i>
                </div>
                <div class="Support__Content">
                    <h3>MIỄN PHÍ VẬN CHUYỂN</h3>
                    <p>Nhận hàng trong vòng 3 ngày</p>
                </div>
            </div>

            <div class="Support">
                <div>
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <div class="Support__Content">
                    <h3>CHẤT LƯỢNG ĐẢM BẢO</h3>
                    <p>Top 10 thương hiệu uy tín 2017</p>
                </div>
            </div>

            <div class="Support">
                <div>
                    <i class="fa-solid fa-headphones-simple"></i>
                </div>
                <div class="Support__Content">
                    <h3>HỖ TRỢ 24/7</h3>
                    <p>Gọi điện - Zalo - iMessage - SMS</p>
                </div>
            </div>

            <div class="Support">
                <div>
                    <i class="fa-solid fa-rotate-left"></i>
                </div>
                <div class="Support__Content">
                    <h3>ĐỔI TRẢ DỄ DÀNG</h3>
                    <p>Trả lại hàng nếu không ưng ý</p>
                </div>
            </div>
        </div>
    </section>
</dive>