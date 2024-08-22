<?php
$meta = [
    'title' => 'Shipping & Return Policy | Sethi Hosiery',
    'description' => 'Find out about Sethi Hosiery’s Shipping & Return Policy, including delivery times, costs, and return procedures.',
    'keywords' => 'shipping policy, return policy, Sethi Hosiery shipping, Sethi Hosiery returns',
    'robots' => 'index, follow',
    'author' => 'Sethi Hosiery',

    // Open Graph / Facebook
    'og:title' => 'Shipping & Return Policy | Sethi Hosiery',
    'og:description' => 'Learn about our Shipping & Return Policy at Sethi Hosiery, including details on delivery and returns.',
    'og:image' => '',  
    'og:url' => '',
    'og:type' => 'website',

    // Twitter
    'twitter:card' => 'summary_large_image',
    'twitter:title' => 'Shipping & Return Policy | Sethi Hosiery',
    'twitter:description' => 'Get details on our Shipping & Return Policy, including delivery times and return instructions.',
    'twitter:image' => '',  
];

$breadcrumbs = [
    ['label' => 'Home', 'url' => './'],
    ['label' => 'Shipping & Returns', 'url' => '']
];
include('components/header.php');
include('components/breadcrumb.php');

renderBreadcrumb($breadcrumbs);
?>
<!-- Shipping & Returns Section Begin -->
<section class="shipping-returns py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h1 class="mb-4">Shipping & Returns</h1>

                <h2 class="mt-4">1. Shipping Policy</h2>
                <p>At Sethi Hosiery, we strive to provide prompt and efficient shipping. Below are our shipping policies:</p>
                <ul class="list-unstyled pl-4">
                    <li class="mb-2"><strong>Order Processing:</strong> All orders are processed within 1-2 business days. Orders are not processed or shipped on weekends or holidays.</li>
                    <li class="mb-2"><strong>Shipping Rates & Delivery Estimates:</strong> Shipping charges for your order will be calculated and displayed at checkout. Delivery estimates vary depending on your location and shipping method chosen.</li>
                    <li class="mb-2"><strong>Shipment Confirmation & Order Tracking:</strong> You will receive a shipment confirmation email once your order has shipped containing your tracking number(s). The tracking number will be active within 24 hours.</li>
                    <li class="mb-2"><strong>International Shipping:</strong> We currently do not ship outside [Your Country].</li>
                </ul>

                <h2 class="mt-4">2. Return Policy</h2>
                <p>If you are not entirely satisfied with your purchase, we're here to help. Our return policy is as follows:</p>
                <ul class="list-unstyled pl-4">
                    <li class="mb-2"><strong>Returns:</strong> You have [Number of Days] calendar days to return an item from the date you received it. To be eligible for a return, your item must be unused and in the same condition that you received it, and it must be in the original packaging.</li>
                    <li class="mb-2"><strong>Refunds:</strong> Once we receive your item, we will inspect it and notify you that we have received your returned item. We will immediately notify you on the status of your refund after inspecting the item. If your return is approved, we will initiate a refund to your original method of payment.</li>
                    <li class="mb-2"><strong>Shipping Costs:</strong> You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are non-refundable. If you receive a refund, the cost of return shipping will be deducted from your refund.</li>
                </ul>

                <h2 class="mt-4">3. Contact Us</h2>
                <p>If you have any questions about our Shipping & Returns policies, please contact us at:</p>
                <address>
                    <p>Email: <a href="mailto:info@sethihosiery.com" class="text-danger">info@sethihosiery.com</a></p>
                    <p>Address: 63 Ground Floor, Sethi Enterprises, Pocket-2, Sector-24, Rohini, Delhi, 110085</p>
                </address>
            </div>
        </div>
    </div>
</section>
<!-- Shipping & Returns Section End -->
<?php
include('components/features.php');
include('components/footer.php');
?>
