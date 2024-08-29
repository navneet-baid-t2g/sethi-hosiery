<?php
// Include ProductManager class
include_once('ProductManager/ProductManager.php');

// Instantiate ProductManager and fetch products
$productManager = new ProductManager();

// Get current page from query string or set default to 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 9; // Set limit of products per page

// Fetch paginated products
$productsData = $productManager->getAllProducts($page, $limit);
$products = $productsData['products'];
$totalProducts = $productsData['total'];

// Calculate total pages
$totalPages = ceil($totalProducts / $limit);
// Define range of pages to show
$range = 3; // Number of page links to show
$start = max(1, $page - 1);
$end = min($totalPages, $page + $range - 2);

// Ensure the range covers at least $range pages
if ($end - $start < $range - 1) {
    $start = max(1, $end - $range + 1);
}
// Meta and breadcrumbs setup
$meta = [
    'title' => 'Shop | Sethi Hosiery',
    'description' => 'Get in touch with Sethi Hosiery. Find our contact details and reach out for support, inquiries, or feedback.',
    'keywords' => 'contact us, Sethi Hosiery contact, customer support, reach out',
    'robots' => 'index, follow',
    'author' => 'Sethi Hosiery',

    // Open Graph / Facebook
    'og:title' => 'Shop | Sethi Hosiery',
    'og:description' => 'Shop Sethi Hosiery for support, inquiries, or feedback. Find our contact information here.',
    'og:image' => '',
    'og:url' => '',
    'og:type' => 'website',

    // Twitter
    'twitter:card' => 'summary_large_image',
    'twitter:title' => 'Shop | Sethi Hosiery',
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
            <?php include_once('components/sidebar.php'); ?>
            <div class="col-lg-9 col-md-9 order-md-first order-last">
                <div class="row">
                    <?php if (empty($products)): ?>
                        <div class="col-12 text-center">
                            <div class="no-products">
                                <i class="fa fa-search fa-3x animated-icon"></i>
                                <h3>No Products Found</h3>
                                <p>Sorry, we couldn't find any products.</p>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($products as $product): ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="product__item <?php echo isset($product['sale']) ? 'sale' : ''; ?>">
                                    <div class="product__item__pic set-bg" data-setbg="<?= htmlspecialchars(explode(',', $product['Images'])[0], ENT_QUOTES, 'UTF-8') ?>">
                                        <?php if (isset($product['sale'])): ?>
                                            <div class="label">Sale</div>
                                        <?php endif; ?>
                                        <ul class="product__hover">
                                            <li><a href="<?= htmlspecialchars(explode(',', $product['Images'])[0], ENT_QUOTES, 'UTF-8') ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="product/<?php echo $product['slug'] ?>"><?php echo htmlspecialchars($product['Name']); ?></a></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- Pagination -->
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <!-- Previous Button -->
                                <?php if ($page > 1): ?>
                                    <a href="shop/page/<?= $page - 1 ?>"><i class="fa fa-angle-left"></i></a>
                                <?php endif; ?>

                                <!-- Page Number Links -->
                                <?php for ($i = $start; $i <= $end; $i++): ?>
                                    <a href="shop/page/<?= $i ?>" class="<?= $i === $page ? 'active' : '' ?>"><?= $i ?></a>
                                <?php endfor; ?>

                                <!-- Next Button -->
                                <?php if ($page < $totalPages): ?>
                                    <a href="shop/page/<?= $page + 1 ?>"><i class="fa fa-angle-right"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
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