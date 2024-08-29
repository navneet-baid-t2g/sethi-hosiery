<?php
class ProductManager
{
    private $productsFilePath;
    private $categoriesFilePath;
    private $productsData;
    private $categoriesData;

    public function __construct()
    {
        $this->productsFilePath = __DIR__ . '/products.json';
        $this->categoriesFilePath = __DIR__ . '/categories.json';
        $this->loadData();
    }

    // Load data from the JSON files
    private function loadData()
    {
        $this->productsData = json_decode(
            file_get_contents($this->productsFilePath),
            true
        ) ?: throw new Exception("Products file not found: " . $this->productsFilePath);

        $this->categoriesData = json_decode(
            file_get_contents($this->categoriesFilePath),
            true
        ) ?: throw new Exception("Categories file not found: " . $this->categoriesFilePath);
    }

    // Function to get term_id from slug
    private function getTermIdBySlug($slug)
    {
        $categorySlugs = array_column($this->categoriesData, 'term_id', 'slug');
        return $categorySlugs[$slug] ?? null;
    }

    // Function to get category by term_id
    private function getCategoryById($termId)
    {
        foreach ($this->categoriesData as $category) {
            if ($category['term_id'] == $termId) {
                return [
                    'label' => $category['name'],
                    'url' => $category['slug']
                ];
            }
        }
        return null;
    }
    // Function to get products by hierarchical category with pagination
    public function getProductsByHierarchy($categorySlug = null, $subcategorySlug = null, $subsubcategorySlug = null, $page = 1, $perPage = 9)
    {
        $filteredProducts = [];

        // Build category IDs array
        $categoryIds = [];
        $categoriesPath=[];
        if ($subsubcategorySlug) {
            $categoryIds[] = $this->getTermIdBySlug($subsubcategorySlug);
            $categoriesPath[] = $this->getCategoryById($this->getTermIdBySlug($categorySlug));
            $categoriesPath[] = $this->getCategoryById($this->getTermIdBySlug($subcategorySlug));
            $categoriesPath[] = $this->getCategoryById($this->getTermIdBySlug($subsubcategorySlug));
        } elseif ($subcategorySlug) {
            $categoryIds[] = $this->getTermIdBySlug($subcategorySlug);
            $categoriesPath[] = $this->getCategoryById($this->getTermIdBySlug($categorySlug));
            $categoriesPath[] = $this->getCategoryById($this->getTermIdBySlug($subcategorySlug));
        } elseif ($categorySlug) {
            $categoryIds[] = $this->getTermIdBySlug($categorySlug);
            $categoriesPath[] = $this->getCategoryById($this->getTermIdBySlug($categorySlug));
        }

        // Filter products by category IDs
        if (!empty($categoryIds)) {
            foreach ($this->productsData as $product) {
                $productCategories = array_column($product['Categories'], 'term_id');
                if (array_intersect($categoryIds, $productCategories)) {
                    $filteredProducts[] = $product;
                }
            }
        }

        // Implement pagination
        $totalProducts = count($filteredProducts);
        $offset = ($page - 1) * $perPage;
        $paginatedProducts = array_slice($filteredProducts, $offset, $perPage);

        return [
            'products' => $paginatedProducts,
            'total' => $totalProducts,
            'perPage' => $perPage,
            'currentPage' => $page,
            'totalPages' => ceil($totalProducts / $perPage),
            'breadrumb' => $categoriesPath
        ];
    }


    // Function to get a product by slug along with category details
    public function getProductBySlug($slug)
    {
        $categoryMap = array_column($this->categoriesData, null, 'term_id');

        foreach ($this->productsData as $product) {
            if (isset($product['slug']) && $product['slug'] === $slug) {
                $productDetails = $product;
                // Map category details
                if (isset($productDetails['Categories'])) {
                    $productDetails['Categories'] = array_map(function ($category) use ($categoryMap) {
                        return $categoryMap[$category['term_id']] ?? [
                            'term_id' => $category['term_id'],
                            'name' => 'Unknown',
                            'slug' => 'unknown'
                        ];
                    }, $productDetails['Categories']);
                }
                return $productDetails;
            }
        }
        return null;
    }

    // Function to get featured products
    public function getFeaturedProducts()
    {
        $featuredProducts = [];

        foreach ($this->productsData as $product) {
            if (isset($product['Is featured?']) && $product['Is featured?'] === 1) {
                $featuredProducts[] = $product;
            }
        }

        return !empty($featuredProducts) ? $featuredProducts : null;
    }

     // Function to get indexed products
     public function getHomePageProducts()
     {
         $indexedProducts = [];
 
         foreach ($this->productsData as $product) {
             if (isset($product['On Index?']) && $product['On Index?'] === 1) {
                 $indexedProducts[] = $product;
             }
         }
 
         return !empty($indexedProducts) ? $indexedProducts : null;
     }

    // Function to get all products with pagination
    public function getAllProducts($page = 1, $perPage = 9)
    {
        $totalProducts = count($this->productsData);
        $offset = ($page - 1) * $perPage;
        $paginatedProducts = array_slice($this->productsData, $offset, $perPage);

        return [
            'products' => $paginatedProducts,
            'total' => $totalProducts,
            'perPage' => $perPage,
            'currentPage' => $page,
            'totalPages' => ceil($totalProducts / $perPage),
        ];
    }
}
