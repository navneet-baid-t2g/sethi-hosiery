    <?php
    include_once('ProductManager/ProductManager.php');
    $indexedProducts = null;
    try {
        $manager = new ProductManager();
        $indexedProducts = $manager->getHomePageProducts();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
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
                    <a href="contact">Contact Us</a>
                </div>
            </div>
            <div class="single-banner-slide" style="background-image: url(assets/img/banner/banner-1.jpg);">
                <div class="content">
                    <h2>Make Pure Cotton T-Shirt, Customize T-Shirt Manufacturer & Wholesaler in Delhi</h2>
                    <p>These Products Are Stylish , Comfortable & Shrink Resistant & Specially And Also Available For Uniforms.</p>
                    <a href="shop">Shop Now</a>
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
                            <a href="product-category/t-shirts/promotional-t-shirts/">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item" style="background:#BDE3D8;">
                                <div class="categories__text">
                                    <h4>Hooded T-shirt's</h4>
                                    <a href="product-category/hooded-t-shirts-manufacturers/">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item" style="background: #D4D4EE;">
                                <div class="categories__text">
                                    <h4>Yoga T-Shirt's</h4>
                                    <a href="product-category/yoga-t-shirts/">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item" style="background: #FCDCE1;">
                                <div class="categories__text">
                                    <h4>Sports T-Shirt's</h4>
                                    <a href="product-category/sports-t-shirts/">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item" style="background: #CCE3F5;">
                                <div class="categories__text">
                                    <h4>Round Neck T-shirt's</h4>
                                    <a href="product-category/round-neck-t-shirts/">Shop now</a>
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
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4>FEATURED PRODUCTS</h4>
                    </div>
                </div>
            </div>
            <div class="row property__gallery">
                <?php
                // Get the current URI
                $currentUri = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');

                // Remove the last segment from the URI
                $uriParts = explode('/', rtrim($currentUri, '/'));
                $baseUri = implode('/', $uriParts);
                foreach ($indexedProducts as $product): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= htmlspecialchars(explode(',', $product['Images'])[0], ENT_QUOTES, 'UTF-8') ?>">
                                <div class="label new">Featured</div>
                                <ul class="product__hover">
                                    <li><a href="<?= htmlspecialchars(explode(',', $product['Images'])[0], ENT_QUOTES, 'UTF-8') ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="<?php echo htmlspecialchars($baseUri . '/product/' . $product['slug'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($product['Name'], ENT_QUOTES, 'UTF-8'); ?></a></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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