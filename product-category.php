<?php
// Check if parameters exist and sanitize them
$categorySlug = isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '';
$subcategorySlug = isset($_GET['subcategory']) ? htmlspecialchars($_GET['subcategory']) : '';
$subsubcategorySlug = isset($_GET['subsubcategory']) ? htmlspecialchars($_GET['subsubcategory']) : '';

// Include your ProductManager class
include_once('ProductManager/ProductManager.php');

$productManager = new ProductManager();
$products = [];
// Get current page from query string or set default to 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 9; // Set limit of products per page


$productsData = $productManager->getProductsByHierarchy($categorySlug, $subcategorySlug, $subsubcategorySlug, $page, $limit);
$products = $productsData['products'];
$totalProducts = $productsData['total'];
$breadcrumbsData = $productsData['breadrumb'];

// Initialize breadcrumbs with Home and Shop
$breadcrumbs = [
    ['label' => 'Home', 'url' => './'],
    ['label' => 'Shop', 'url' => './shop']
];
if (!empty($products)) {
    // Build URL paths dynamically
    $urlPath = './product-category'; // Base path for category URLs
    foreach ($breadcrumbsData as $key => $breadcrumb) {
        // Append the current breadcrumb to the URL path
        $urlPath .= '/' . $breadcrumb['url'];
        $breadcrumbs[] = [
            'label' => $breadcrumb['label'],
            'url' => $urlPath
        ];
    }
    // Ensure the last breadcrumb (current page) does not have a URL
    if (!empty($breadcrumbs)) {
        $breadcrumbs[count($breadcrumbs) - 1]['url'] = '';
    }
}

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
// Build the base URL for pagination
$baseUrl = './product-category';
if ($categorySlug) {
    $baseUrl .= "/$categorySlug";
    if ($subcategorySlug) {
        $baseUrl .= "/$subcategorySlug";
        if ($subsubcategorySlug) {
            $baseUrl .= "/$subsubcategorySlug";
        }
    }
}
$meta = [
    'title' => ucfirst($categorySlug) . ' | Sethi Hosiery',
    'description' => 'Browse our collection of products in this category.',
    'keywords' => 'category, products, Sethi Hosiery',
    'robots' => 'index, follow',
    'author' => 'Sethi Hosiery',

    // Open Graph / Facebook
    'og:title' => ucfirst($categorySlug) . ' | Sethi Hosiery',
    'og:description' => 'Browse products in this category at Sethi Hosiery.',
    'og:image' => '', // Set this dynamically if available
    'og:url' => $_SERVER['REQUEST_URI'],
    'og:type' => 'website',

    // Twitter
    'twitter:card' => 'summary_large_image',
    'twitter:title' => ucfirst($categorySlug) . ' | Sethi Hosiery',
    'twitter:description' => 'Explore our products in this category.',
    'twitter:image' => '', // Set this dynamically if available
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
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="product__item <?php echo isset($product['Is featured?']) && $product['Is featured?'] ? 'sale' : ''; ?>">
                                    <div class="product__item__pic set-bg" data-setbg="<?php echo isset($product['Images']) ? explode(',', $product['Images'])[0] : 'default-image.png'; ?>">
                                        <?php if (isset($product['Is featured?']) && $product['Is featured?']): ?>
                                            <div class="label">Sale</div>
                                        <?php endif; ?>
                                        <ul class="product__hover">
                                            <li><a href="<?php echo isset($product['Images']) ? explode(',', $product['Images'])[0] : '#'; ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="./product/<?= $product['slug'] ?>"><?php echo htmlspecialchars($product['Name']); ?></a></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!-- Pagination -->
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <!-- Previous Button -->
                                <?php if ($page > 1): ?>
                                    <a href="<?= $baseUrl ?>/page/<?= $page - 1 ?>"><i class="fa fa-angle-left"></i></a>
                                <?php endif; ?>

                                <!-- Page Number Links -->
                                <?php for ($i = $start; $i <= $end; $i++): ?>
                                    <a href="<?= $baseUrl ?>/page/<?= $i ?>" class="<?= $i === $page ? 'active' : '' ?>"><?= $i ?></a>
                                <?php endfor; ?>

                                <!-- Next Button -->
                                <?php if ($page < $totalPages): ?>
                                    <a href="<?= $baseUrl ?>/page/<?= $page + 1 ?>"><i class="fa fa-angle-right"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- No Products Found -->
                        <div class="col-lg-12 text-center">
                            <div class="no-products">
                                <i class="fa fa-search fa-3x"></i>
                                <h2>No Products Found</h2>
                                <p>We couldn't find any products matching your criteria. Please try searching for something else.</p>
                                <a href="./shop" class="btn btn-danger">Explore Products</a>
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