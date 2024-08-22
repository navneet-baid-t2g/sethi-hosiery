<?php
$meta = [
    'title' => 'Privacy Notice | Sethi Hosiery',
    'description' => 'Read Sethi Hosiery’s Privacy Notice to understand how we collect, use, and protect your personal information.',
    'keywords' => 'privacy notice, data protection, personal information, Sethi Hosiery privacy',
    'robots' => 'index, follow',
    'author' => 'Sethi Hosiery',

    // Open Graph / Facebook
    'og:title' => 'Privacy Notice | Sethi Hosiery',
    'og:description' => 'Understand how Sethi Hosiery handles your personal data with our comprehensive Privacy Notice.',
    'og:image' => '', 
    'og:url' => '',
    'og:type' => 'website',

    // Twitter
    'twitter:card' => 'summary_large_image',
    'twitter:title' => 'Privacy Notice | Sethi Hosiery',
    'twitter:description' => 'Learn about how Sethi Hosiery protects your personal information with our Privacy Notice.',
    'twitter:image' => '',  
];

$breadcrumbs = [
    ['label' => 'Home', 'url' => './'],
    ['label' => 'Privacy Notice', 'url' => '']
];
include('components/header.php');
include('components/breadcrumb.php');

renderBreadcrumb($breadcrumbs);
?>
<!-- Policy Section Begin -->
<section class="privacy-policy py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h1 class="mb-4">Privacy Notice</h1>
                <p class="text-muted">Last updated: 21.08.2024</p>
                
                <p>Welcome to Sethi Hosiery! This Privacy Notice explains how we collect, use, disclose, and safeguard your information when you visit our website <a href="https://sethihosiery.com/" class="text-danger">https://sethihosiery.com/</a>. Please read this notice carefully. If you do not agree with the terms of this Privacy Notice, please do not access the site.</p>
                
                <h2 class="mt-4">1. Information We Collect</h2>
                <p>We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>
                <ul class="list-unstyled pl-4">
                    <li class="mb-2"><strong>Personal Data:</strong> Personally identifiable information, such as your name, shipping address, email address, and telephone number, and demographic information, that you voluntarily give to us when you register with the Site or when you choose to participate in various activities related to the Site.</li>
                    <li class="mb-2"><strong>Derivative Data:</strong> Information our servers automatically collect when you access the Site, such as your IP address, your browser type, your operating system, your access times, and the pages you have directly viewed before and after accessing the Site.</li>
                    <li class="mb-2"><strong>Financial Data:</strong> Financial information, such as data related to your payment method (e.g., valid credit card number, card brand, expiration date) that we may collect when you purchase, order, return, exchange, or request information about our services from the Site.</li>
                </ul>
                
                <h2 class="mt-4">2. Use of Your Information</h2>
                <p>Having accurate information about you permits us to provide you with a smooth, efficient, and customized experience. Specifically, we may use information collected about you via the Site to:</p>
                <ul class="list-unstyled pl-4">
                    <li class="mb-2">Assist law enforcement and respond to subpoenas.</li>
                    <li class="mb-2">Compile anonymous statistical data and analysis for use internally or with third parties.</li>
                    <li class="mb-2">Create and manage your account.</li>
                    <li class="mb-2">Deliver targeted advertising, coupons, newsletters, and other information regarding promotions and the Site to you.</li>
                    <li class="mb-2">Email you regarding your account or order.</li>
                    <li class="mb-2">Monitor and analyze usage and trends to improve your experience with the Site.</li>
                    <li class="mb-2">Notify you of updates to the Site.</li>
                    <li class="mb-2">Offer new products, services, and/or recommendations to you.</li>
                    <li class="mb-2">Process payments and transactions.</li>
                </ul>
                
                <h2 class="mt-4">3. Disclosure of Your Information</h2>
                <p>We may share information we have collected about you in certain situations. Your information may be disclosed as follows:</p>
                <ul class="list-unstyled pl-4">
                    <li class="mb-2"><strong>By Law or to Protect Rights:</strong> If we believe the release of information about you is necessary to respond to legal process, to investigate or remedy potential violations of our policies, or to protect the rights, property, and safety of others, we may share your information as permitted or required by any applicable law, rule, or regulation.</li>
                    <li class="mb-2"><strong>Business Transfers:</strong> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</li>
                    <li class="mb-2"><strong>Third-Party Service Providers:</strong> We may share your information with third-party service providers that perform services for us or on our behalf, such as payment processing, data analysis, email delivery, hosting services, customer service, and marketing assistance.</li>
                </ul>
                
                <h2 class="mt-4">4. Security of Your Information</h2>
                <p>We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable, and no method of data transmission can be guaranteed against any interception or other type of misuse.</p>
                
                <h2 class="mt-4">5. Policy for Children</h2>
                <p>We do not knowingly solicit information from or market to children under the age of 13. If we learn that we have collected personal information from a child under age 13 without verification of parental consent, we will delete that information as quickly as possible.</p>
                
                <h2 class="mt-4">6. Changes to This Privacy Notice</h2>
                <p>We may update this Privacy Notice from time to time in order to reflect, for example, changes to our practices or for other operational, legal, or regulatory reasons. We encourage you to review this Privacy Notice periodically to stay informed about our collection, use, and disclosure of your information.</p>
                
                <h2 class="mt-4">7. Contact Us</h2>
                <p>If you have questions or comments about this Privacy Notice, please contact us at:</p>
                <address>
                    <p>Email: <a href="mailto:info@sethihosiery.com" class="text-danger">info@sethihosiery.com</a></p>
                    <p>Address: 63 Ground Floor, Sethi Enterprises, Pocket-2, Sector-24, Rohini, Delhi, 110085</p>
                </address>
            </div>
        </div>
    </div>
</section>
<!-- Policy Section End -->
<?php
include('components/features.php');
include('components/footer.php');
?>
