<?php
$meta = [
    'title' => 'Shop | Sethi Hosiery',
    'description' => 'Get in touch with Sethi Hosiery. Find our contact details and reach out for support, inquiries, or feedback.',
    'keywords' => 'contact us, Sethi Hosiery contact, customer support, reach out',
    'robots' => 'index, follow',
    'author' => 'Sethi Hosiery',

    // Open Graph / Facebook
    'og:title' => 'Contact Us | Sethi Hosiery',
    'og:description' => 'Contact Sethi Hosiery for support, inquiries, or feedback. Find our contact information here.',
    'og:image' => '',
    'og:url' => '',
    'og:type' => 'website',

    // Twitter
    'twitter:card' => 'summary_large_image',
    'twitter:title' => 'Contact Us | Sethi Hosiery',
    'twitter:description' => 'Reach out to Sethi Hosiery with your questions or feedback. Contact details available here.',
    'twitter:image' => '',
];
$breadcrumbs = [
    ['label' => 'Home', 'url' => './'],
    ['label' => 'Shop', 'url' => '']
];
include('components/header.php');
include('components/breadcrumb.php');

renderBreadcrumb($breadcrumbs);

?>

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 order-md-last order-first">
                <div class="shop__sidebar">
                    <div class="sidebar__filter">
                        <div class="section-title">
                            <h4>Shop by price</h4>
                        </div>
                        <div class="filter-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="99"></div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <p>Price:</p>
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                        <a href="#">Filter</a>
                    </div>
                    <!-- Recent Products Section -->
                    <div class="recent-products">
                        <div class="section-title">
                            <h4>Shop by price</h4>
                        </div>
                        <div class="recent-products-list">
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img src="assets/img/shop/shop-1.jpg" alt="">
                                </div>
                                <div class="col-8"><h6><a href="#" class="text-dark">Furry hooded parka</a></h6></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img src="assets/img/shop/shop-2.jpg" alt="">
                                </div>
                                <div class="col-8"><h6><a href="#" class="text-dark">Flowy Striped Skirt</a></h6></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img src="assets/img/shop/shop-3.jpg" alt="">
                                </div>
                                <div class="col-8"><h6><a href="#" class="text-dark">Crock Effect bag</a></h6></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img src="assets/img/shop/shop-4.jpg" alt="">
                                </div>
                                <div class="col-8"><h6><a href="#" class="text-dark">Dark Wash Xavi Jeans</a></h6></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 order-md-first order-last">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/shop/shop-1.jpg">
                                <div class="label new">New</div>
                                <ul class="product__hover">
                                    <li><a href="assets/img/shop/shop-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>

                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Furry hooded parka</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/shop/shop-2.jpg">
                                <ul class="product__hover">
                                    <li><a href="assets/img/shop/shop-2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>

                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Flowy striped skirt</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/shop/shop-3.jpg">
                                <ul class="product__hover">
                                    <li><a href="assets/img/shop/shop-3.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>

                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Croc-effect bag</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/shop/shop-4.jpg">
                                <ul class="product__hover">
                                    <li><a href="assets/img/shop/shop-4.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>

                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Dark wash Xavi jeans</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/shop/shop-5.jpg">
                                <div class="label">Sale</div>
                                <ul class="product__hover">
                                    <li><a href="assets/img/shop/shop-5.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>

                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Ankle-cuff sandals</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/shop/shop-6.jpg">
                                <ul class="product__hover">
                                    <li><a href="assets/img/shop/shop-6.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>

                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Contrasting sunglasses</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/shop/shop-7.jpg">
                                <ul class="product__hover">
                                    <li><a href="assets/img/shop/shop-7.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>

                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Circular pendant earrings</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/shop/shop-8.jpg">
                                <div class="label stockout stockblue">Out Of Stock</div>
                                <ul class="product__hover">
                                    <li><a href="assets/img/shop/shop-8.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>

                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Cotton T-Shirt</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/shop/shop-9.jpg">
                                <div class="label">Sale</div>
                                <ul class="product__hover">
                                    <li><a href="assets/img/shop/shop-9.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>

                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Water resistant zips backpack</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="pagination__option">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
<?php
include('components/features.php');
include('components/footer.php');
?>