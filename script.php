<?php
// // Increase the maximum execution time
// set_time_limit(300); // Set to 300 seconds (5 minutes)

// // Path to the JSON file
// $jsonFilePath = 'products.json';

// // Read the JSON file content
// $jsonContent = file_get_contents($jsonFilePath);

// // Decode the JSON content into an associative array
// $dataArray = json_decode($jsonContent, true);

// // Directory to save the downloaded images
// $downloadDir = 'downloads/';
// if (!is_dir($downloadDir)) {
//     mkdir($downloadDir, 0777, true);
// }

// // Maximum number of images to process per batch
// $batchSize = 10;
// $totalImages = 0;

// foreach ($dataArray as $data) {
//     // Extract the images string and convert it into an array
//     $imageUrls = explode(', ', $data['Images']);
    
//     // Process images in batches
//     $batchCount = 0;
//     foreach ($imageUrls as $url) {
//         if ($batchCount >= $batchSize) {
//             // Sleep for a short period to prevent script timeout
//             sleep(1);
//             $batchCount = 0;
//         }
        
//         // Get the filename from the URL
//         $filename = basename($url);
//         $filePath = $downloadDir . $filename;
        
//         // Check if the file already exists
//         if (!file_exists($filePath)) {
//             // Save the image to the download directory
//             file_put_contents($filePath, file_get_contents($url));
//             echo "Downloaded: $filename<br>";
//             $totalImages++;
//         } else {
//             echo "File already exists: $filename<br>";
//         }

//         $batchCount++;
//     }
// }

// echo "Total images downloaded: $totalImages";

?>

<?php
// // File paths
// $file1Path = 'products.json';
// $file2Path = 'slugs.json';
// $outputFilePath = 'updated_file1.json';

// // Read JSON data from file1
// $data1 = json_decode(file_get_contents($file1Path), true);

// // Read JSON data from file2
// $data2 = json_decode(file_get_contents($file2Path), true);

// // Create a dictionary to map IDs to slugs from file2
// $idToSlug = [];
// foreach ($data2 as $item) {
//     $idToSlug[(int)$item['ID']] = $item['post_name'];
// }

// // Update data1 with the slug from file2
// foreach ($data1 as &$item) {
//     $itemId = (int)$item['ID'];
//     if (isset($idToSlug[$itemId])) {
//         $item['slug'] = $idToSlug[$itemId];
//     }
// }

// // Write the updated data to a new file
// file_put_contents($outputFilePath, json_encode($data1, JSON_PRETTY_PRINT));

// echo "Updated data has been written to $outputFilePath";
?>

<?php
// // Load JSON data from file1 and file2
// $file1 = json_decode(file_get_contents('products.json'), true);
// $file2 = json_decode(file_get_contents('categories.json'), true);

// // Initialize an array to store the combined result
// $combined = [];

// // Loop through each product in file1
// foreach ($file1 as $product) {
//     // Get the product ID from file1
//     $productId = $product['ID'];

//     // Remove the existing 'Categories' data from file1
//     unset($product['Categories']);

//     // Initialize a categories array
//     $categories = [];

//     // Loop through file2 to find matching categories by product_id
//     foreach ($file2 as $category) {
//         if ($category['product_id'] === $productId) {
//             // Add matching category data to the categories array
//             $categories[] = [
//                 'term_id' => $category['term_id'],
//                 'category_name' => $category['category_name'],
//                 'category_slug' => $category['category_slug']
//             ];
//         }
//     }

//     // Add the categories array to the product
//     $product['Categories'] = $categories;

//     // Add the modified product to the combined array
//     $combined[] = $product;
// }

// // Save the combined data back to a new JSON file
// file_put_contents('combined_file.json', json_encode($combined, JSON_PRETTY_PRINT));

// echo "The files have been merged successfully!\n";

?>


<?php

// // Path to the existing categories JSON file
// $inputFilePath = 'categories.json';

// // Path to the output merged categories JSON file
// $outputFilePath = 'merged_categories.json';

// try {
//     // Read the JSON file
//     $json = file_get_contents($inputFilePath);
//     if ($json === false) {
//         throw new Exception("Error reading file: $inputFilePath");
//     }

//     // Decode JSON data
//     $categories = json_decode($json, true);
//     if ($categories === null) {
//         throw new Exception("Error decoding JSON from file: $inputFilePath");
//     }

//     // Use an associative array to filter out duplicate categories
//     $uniqueCategories = [];

//     foreach ($categories as $category) {
//         // Create a unique key for each category using term_id and category_slug
//         $key = $category['term_id'] . '-' . $category['category_slug'];
        
//         // Add the category to the associative array if it's not already there
//         if (!isset($uniqueCategories[$key])) {
//             $uniqueCategories[$key] = [
//                 'term_id' => $category['term_id'],
//                 'name' => $category['category_name'],
//                 'slug' => $category['category_slug']
//             ];
//         }
//     }

//     // Convert associative array to a simple indexed array
//     $uniqueCategoriesArray = array_values($uniqueCategories);

//     // Encode the unique categories to JSON
//     $mergedJson = json_encode($uniqueCategoriesArray, JSON_PRETTY_PRINT);
//     if ($mergedJson === false) {
//         throw new Exception("Error encoding JSON");
//     }

//     // Write the merged JSON to the output file
//     $writeResult = file_put_contents($outputFilePath, $mergedJson);
//     if ($writeResult === false) {
//         throw new Exception("Error writing file: $outputFilePath");
//     }

//     echo "Categories successfully merged and written to $outputFilePath";

// } catch (Exception $e) {
//     echo "An error occurred: " . $e->getMessage();
// }

?>

<?php

// Path to the existing products JSON file
$inputFilePath = 'products.json';

// Path to the output updated products JSON file
$outputFilePath = 'updated_products.json';

try {
    // Read the JSON file
    $json = file_get_contents($inputFilePath);
    if ($json === false) {
        throw new Exception("Error reading file: $inputFilePath");
    }

    // Decode JSON data
    $products = json_decode($json, true);
    if ($products === null) {
        throw new Exception("Error decoding JSON from file: $inputFilePath");
    }

    // Process each product to remove category names and slugs
    foreach ($products as &$product) {
        if (isset($product['Categories'])) {
            // Filter categories to keep only term_id
            $product['Categories'] = array_map(function($category) {
                return [
                    'term_id' => $category['term_id']
                ];
            }, $product['Categories']);
        }
    }

    // Encode the updated products to JSON
    $updatedJson = json_encode($products, JSON_PRETTY_PRINT);
    if ($updatedJson === false) {
        throw new Exception("Error encoding JSON");
    }

    // Write the updated JSON to the output file
    $writeResult = file_put_contents($outputFilePath, $updatedJson);
    if ($writeResult === false) {
        throw new Exception("Error writing file: $outputFilePath");
    }

    echo "Products successfully updated and written to $outputFilePath";

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

?>

