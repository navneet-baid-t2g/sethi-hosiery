    <?php
    $meta = [
        'title' => 'Premium Hosiery Products | Sethi Hosiery',
        'description' => 'Discover a wide range of premium hosiery products at Sethi Hosiery. Quality, comfort, and style for everyone.',
        'keywords' => 'hosiery, premium hosiery, Sethi Hosiery, comfortable innerwear, stylish hosiery, hosiery for men, women, kids',
        'robots' => 'index, follow',
        'author' => 'Sethi Hosiery',

        // Open Graph / Facebook
        'og:title' => 'Premium Hosiery Products | Sethi Hosiery',
        'og:description' => 'Explore the finest collection of hosiery products at Sethi Hosiery. Shop T-shirts, innerwear, and more.',
        'og:image' => '',
        'og:url' => '',
        'og:type' => 'website',

        // Twitter
        'twitter:card' => 'summary_large_image',
        'twitter:title' => 'Premium Hosiery Products | Sethi Hosiery',
        'twitter:description' => 'Shop high-quality hosiery products at Sethi Hosiery. Unmatched comfort and style.',
        'twitter:image' => '',
    ];

    include('components/header.php'); ?>

    <section class="banner-area">
        <div class="all-banner-slide owl-carousel">
            <div class="single-banner-slide" style="background-image: url(assets/img/banner/banner-2.jpg);">
                <div class="content">
                    <h2>Make Customize Promotional T-Shirt With Logo & Designs</h2>
                    <p>We Provide best design at wholesale price and ensure timely delivery to our clients all over India.</p>
                    <a href="#">Contact Us</a>
                </div>
            </div>
            <div class="single-banner-slide" style="background-image: url(assets/img/banner/banner-1.jpg);">
                <div class="content">
                    <h2>Make Pure Cotton T-Shirt, Customize T-Shirt Manufacturer & Wholesaler in Delhi</h2>
                    <p>These Products Are Stylish , Comfortable & Shrink Resistant & Specially And Also Available For Uniforms.</p>
                    <a href="#">Shop Now</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Banner Section End -->
    <?php include('components/analytics.php'); ?>

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                        data-setbg="assets/img/categories/category-1.png">
                        <div class="categories__text">
                            <h4 class="mb-2">Customize Promotional <br>
                                T-Shirts</h4>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item" style="background:#BDE3D8;">
                                <div class="categories__text">
                                    <h4>Hooded T-shirt's</h4>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item" style="background: #D4D4EE;" >
                                <div class="categories__text">
                                    <h4>Yoga T-Shirt's</h4>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item" style="background: #FCDCE1;" >
                                <div class="categories__text">
                                    <h4>Sports T-Shirt's</h4>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item" style="background: #CCE3F5;">
                                <div class="categories__text">
                                    <h4>Round Neck T-shirt's</h4>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".women">Women’s</li>
                        <li data-filter=".men">Men’s</li>
                        <li data-filter=".kid">Kid’s</li>
                        <li data-filter=".accessories">Accessories</li>
                        <li data-filter=".cosmetic">Cosmetics</li>
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-1.jpg">
                            <div class="label new">New</div>
                            <ul class="product__hover">
                                <li><a href="assets/img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Buttons tweed blazer</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-2.jpg">
                            <ul class="product__hover">
                                <li><a href="assets/img/product/product-2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
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
                            <div class="product__price">$ 49.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix accessories">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-3.jpg">
                            <div class="label stockout">out of stock</div>
                            <ul class="product__hover">
                                <li><a href="assets/img/product/product-3.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
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
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix cosmetic">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-4.jpg">
                            <ul class="product__hover">
                                <li><a href="assets/img/product/product-4.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Slim striped pocket shirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix kid">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-5.jpg">
                            <ul class="product__hover">
                                <li><a href="assets/img/product/product-5.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Fit micro corduroy shirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-6.jpg">
                            <div class="label sale">Sale</div>
                            <ul class="product__hover">
                                <li><a href="assets/img/product/product-6.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Tropical Kimono</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-7.jpg">
                            <ul class="product__hover">
                                <li><a href="assets/img/product/product-7.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
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
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-8.jpg">
                            <div class="label">Sale</div>
                            <ul class="product__hover">
                                <li><a href="assets/img/product/product-8.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Water resistant backpack</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Discount Section Begin -->
    <section class="discount">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="discount__pic">
                        <img src="assets/img/small-banner.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="discount__text">
                        <h4 class="mb-3">Design Your Own T-Shirt Now!
                        </h4>
                        <p>Unleash your creativity and make a statement with your very own custom-designed T-shirt. At Sethi Hosiery, we provide you with the tools and flexibility to bring your unique ideas to life.</p>
                        <a href="#">Design Your T-Shirt</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trend Section Begin -->
    <section class="trend spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Hot Trend</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="assets/img/trend/ht-1.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="assets/img/trend/ht-2.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Pendant earrings</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="assets/img/trend/ht-3.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Cotton T-Shirt</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Best seller</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="assets/img/trend/bs-1.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Cotton T-Shirt</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="assets/img/trend/bs-2.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Zip-pockets pebbled tote <br />briefcase</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="assets/img/trend/bs-3.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Round leather bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Feature</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="assets/img/trend/f-1.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Bow wrap skirt</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="assets/img/trend/f-2.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Metallic earrings</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="assets/img/trend/f-3.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Flap cross-body bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trend Section End -->


    <!-- Discount Section End -->
    <section class="clients spad">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4>MEET OUR CLIENTS</h4>
                    </div>
                </div>
            </div>
            <div class="logo-grid">
                <a href="./assets/img/clients/img-1.1-1.jpg" title="Castrol">
                    <img src="./assets/img/clients/img-1.1-1.jpg" alt="Castrol" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-1.2-1.jpg" title="Make My Trip">
                    <img src="./assets/img/clients/img-1.2-1.jpg" alt="Make My Trip" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-1.5-1.jpg" title="Savlon Swasth India">
                    <img src="./assets/img/clients/img-1.5-1.jpg" alt="Savlon Swasth India" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-3-1.jpg" title="Mahindra Finance">
                    <img src="./assets/img/clients/img-3-1.jpg" alt="Mahindra Finance" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-3.3-1.jpg" title="Parachute Advansed">
                    <img src="./assets/img/clients/img-3.3-1.jpg" alt="Parachute Advansed" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-3.4-1.jpg" title="Godrej Expert">
                    <img src="./assets/img/clients/img-3.4-1.jpg" alt="Godrej Expert" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-4.4-1.jpg" title="Tata Tea Agni - Elaichi Chai">
                    <img src="./assets/img/clients/img-4.4-1.jpg" alt="Tata Tea Agni - Elaichi Chai" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-10-1.jpg" title="DOITIS">
                    <img src="./assets/img/clients/img-10-1.jpg" alt="DOITIS" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-11-1.jpg" title="Amazon">
                    <img src="./assets/img/clients/img-11-1.jpg" alt="Amazon" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-12-1.jpg" title="Maja Land">
                    <img src="./assets/img/clients/img-12-1.jpg" alt="Maja Land" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-13-1.jpg" title="SFIO">
                    <img src="./assets/img/clients/img-13-1.jpg" alt="SFIO" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-16-1.jpg" title="All Flags Travels">
                    <img src="./assets/img/clients/img-16-1.jpg" alt="All Flags Travels" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/img-18-1.jpg" title="Parmanu Defence Academy">
                    <img src="./assets/img/clients/img-18-1.jpg" alt="Parmanu Defence Academy" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/tata-1.jpg" title="Tata Tea Premium">
                    <img src="./assets/img/clients/tata-1.jpg" alt="Tata Tea Premium" class="bw" loading="lazy">
                </a>
                <a href="./assets/img/clients/tata-tea-1.jpg" title="Tata Tea Agni">
                    <img src="./assets/img/clients/tata-tea-1.jpg" alt="Tata Tea Agni" class="bw" loading="lazy">
                </a>
            </div>
        </div>
    </section>
    <?php include('components/features.php'); ?>
    <?php include('components/footer.php'); ?>