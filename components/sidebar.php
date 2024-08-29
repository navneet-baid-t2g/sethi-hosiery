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
?>
<div class="col-lg-3 col-md-3 order-md-last order-first">
    <div class="shop__sidebar">
        <!-- Recent Products Section -->
        <div class="recent-products">
            <div class="section-title">
                <h4>Featured Products</h4>
            </div>
            <div class="recent-products-list">
                <?php 
                $count = 0;
                foreach ($indexedProducts as $product): 
                    if ($count >= 5) break; // Stop if 5 products have been displayed
                    $count++;
                ?>
                    <div class="row mb-2">
                        <div class="col-4">
                            <img src="<?= htmlspecialchars(explode(',', $product['Images'])[0], ENT_QUOTES, 'UTF-8') ?>" alt="">
                        </div>
                        <div class="col-8">
                            <h6><a href="./product/<?= $product['slug'] ?>" class="text-dark"><?php echo htmlspecialchars($product['Name']); ?></a></h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
