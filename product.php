<?php
// Get the slug from the URL
if (!isset($_GET['slug']) || empty($_GET['slug'])) {
    // Redirect to /shop if no slug is provided
    header("Location: ./shop");
    exit();
}

include_once('ProductManager/ProductManager.php');
$product = null;
try {
    $manager = new ProductManager();
    $slug = $_GET['slug'];
    $product = $manager->getProductBySlug($slug);
    if (!$product) {
        echo "Product not found.";
        die();
    }
    $featuredProducts = $manager->getFeaturedProducts();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    die();
}

// Meta data for the page
$meta = [
    'title' => $product['Name'],
    'description' => 'Get in touch with Sethi Hosiery. Find our contact details and reach out for support, inquiries, or feedback.',
    'keywords' => 'contact us, Sethi Hosiery contact, customer support, reach out',
    'robots' => 'index, follow',
    'author' => 'Sethi Hosiery',

    // Open Graph / Facebook
    'og:title' => 'Product | Sethi Hosiery',
    'og:description' => 'Contact Sethi Hosiery for support, inquiries, or feedback. Find our contact information here.',
    'og:image' => '',
    'og:url' => '',
    'og:type' => 'website',

    // Twitter
    'twitter:card' => 'summary_large_image',
    'twitter:title' => 'Product | Sethi Hosiery',
    'twitter:description' => 'Reach out to Sethi Hosiery with your questions or feedback. Contact details available here.',
    'twitter:image' => '',
];

// Get product categories and build breadcrumbs
$categories = $product['Categories'] ?? [];
$breadcrumbs = [
    ['label' => 'Home', 'url' => './'],
    ['label' => 'Shop', 'url' => './shop']
];

// Add category breadcrumbs dynamically
foreach ($categories as $category) {
    $breadcrumbs[] = [
        'label' => $category['name'],
        'url' => "./product-category/{$category['slug']}"
    ];
}

// Add the current product to breadcrumbs
$breadcrumbs[] = ['label' => $product['Name'], 'url' => ''];

// Include components
include('components/header.php');
include('components/breadcrumb.php');
renderBreadcrumb($breadcrumbs);

?>
<!-- Product Details Section Begin -->
<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__left product__thumb nice-scroll">
                        <?php
                        $images = explode(',', $product['Images']);
                        foreach ($images as $key => $image) {
                            $key++; ?>
                            <a class="pt <?= $key === 1 ? 'active' : ''; ?>" href="<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>#product-<?= $key; ?>">
                                <img src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($product['Name'], ENT_QUOTES, 'UTF-8'); ?>">
                            </a>
                        <?php } ?>
                    </div>

                    <div class="product__details__slider__content">
                        <div class="product__details__pic__slider owl-carousel">
                            <?php foreach ($images as $key => $image) {
                                $key++; ?>
                                <img data-hash="product-<?= $key; ?>" class="product__big__img" src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($product['Name'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <h3><?php echo htmlspecialchars($product['Name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p><?php echo nl2br($product['Short description']); ?></p>

                    <div class="product__details__widget">
                        <ul>
                            <li>
                                <span>Available color:</span>
                                <div class="color__checkbox">
                                    <label for="red">
                                        <input type="radio" name="color__radio" id="red" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="black">
                                        <input type="radio" name="color__radio" id="black">
                                        <span class="checkmark black-bg"></span>
                                    </label>
                                    <label for="grey">
                                        <input type="radio" name="color__radio" id="grey">
                                        <span class="checkmark grey-bg"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Available size:</span>
                                <div class="size__btn">
                                    <label for="xs-btn" class="active">
                                        <input type="radio" id="xs-btn">
                                        xs
                                    </label>
                                    <label for="s-btn">
                                        <input type="radio" id="s-btn">
                                        s
                                    </label>
                                    <label for="m-btn">
                                        <input type="radio" id="m-btn">
                                        m
                                    </label>
                                    <label for="l-btn">
                                        <input type="radio" id="l-btn">
                                        l
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="product__details__button">
                        <!-- Get a Quote Form Begin -->
                        <div id="quoteForm" class="row">
                            <div class="col-lg-12">
                                <h4 class="mb-2">Get a Quote</h4>
                                <form id="getQuoteForm" action="submit_quote" method="post">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="moq">MOQ</label>
                                            <input type="text" class="form-control" id="moq" name="moq" placeholder="Minimum 10" required>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="additional_info">Message</label>
                                            <textarea class="form-control" id="additional_info" name="additional_info" rows="4" placeholder="Any additional information or special requirements" required></textarea>
                                        </div>
                                    </div>
                                    <button class="cart-btn"><span class="far fa-envelope"></span> Request a Quote</button>
                                </form>
                            </div>
                        </div>
                        <!-- Get a Quote Form End -->


                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Description</h6>
                            <div><?php echo nl2br($product['Description']) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="related__title">
                    <h5>FEATURED PRODUCTS</h5>
                </div>
            </div>
            <?php
            // Get the current URI
            $currentUri = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');

            // Remove the last segment from the URI
            $uriParts = explode('/', rtrim($currentUri, '/'));
            array_pop($uriParts); // Remove the last part
            $baseUri = implode('/', $uriParts);

            foreach ($featuredProducts as $featuredproduct) {
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="<?= htmlspecialchars(explode(',', $featuredproduct['Images'])[0], ENT_QUOTES, 'UTF-8') ?>">
                            <div class="label new">Featured</div>
                            <ul class="product__hover">
                                <li><a href="<?= htmlspecialchars(explode(',', $featuredproduct['Images'])[0], ENT_QUOTES, 'UTF-8') ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="<?php echo htmlspecialchars($baseUri . '/' . $featuredproduct['slug'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($featuredproduct['Name'], ENT_QUOTES, 'UTF-8'); ?></a></h6>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>
<!-- Product Details Section End -->

<?php
include('components/features.php');
include('components/footer.php');
?>