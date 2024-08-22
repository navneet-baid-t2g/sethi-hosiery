<?php
$meta = [
    'title' => 'About Us | Sethi Hosiery',
    'description' => 'Learn about Sethi Hosiery, our mission, values, and commitment to providing premium hosiery products with exceptional quality and comfort.',
    'keywords' => 'about Sethi Hosiery, hosiery company history, Sethi Hosiery values, premium hosiery, quality hosiery',
    'robots' => 'index, follow',
    'author' => 'Sethi Hosiery',

    // Open Graph / Facebook
    'og:title' => 'About Us | Sethi Hosiery',
    'og:description' => 'Discover the story behind Sethi Hosiery. Our mission, values, and dedication to offering high-quality hosiery products.',
    'og:image' => '',
    'og:url' => '',
    'og:type' => 'website',

    // Twitter
    'twitter:card' => 'summary_large_image',
    'twitter:title' => 'About Us | Sethi Hosiery',
    'twitter:description' => 'Get to know Sethi Hosiery. Learn about our commitment to delivering premium hosiery with top-notch quality and style.',
    'twitter:image' => '',
];

$breadcrumbs = [
    ['label' => 'Home', 'url' => './'],
    ['label' => 'About Us', 'url' => '']
];
include('components/header.php');
include('components/breadcrumb.php');

renderBreadcrumb($breadcrumbs);
?>
<style>/* General Enhancements */
.section-title {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 1.5rem;
    text-transform: uppercase;
}

.image-container {
    overflow: hidden;
    border-radius: 10px;
}

.enhanced-img {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.enhanced-img:hover {
    transform: scale(1.05);
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
}

.about-us {
    padding: 60px 0;
}

p {
    font-size: 1rem;
    color: #555;
}

@media (max-width: 768px) {
    .section-title {
        font-size: 1.5rem;
    }
}
</style>
<!-- About Section Begin -->
<section class="about-us">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 col-md-6">
                <div class="image-container mb-4 mb-md-0">
                    <img src="./assets/img/about/tshirts_hanging_on_stand.jpg" alt="T-shirts hanging on Stand" class="img-thumbnail enhanced-img">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <h2 class="section-title">Company Profile</h2>
                <p>Established in 2009, Sethi Enterprises is the Wholesaler and Trader of Cotton Socks, Towel Socks, Skin Socks, Stocking, T-Shirts, Cotton Handkerchief. We are a Sole Proprietorship firm located at Delhi, India. We are backed by reliable vendors who are highly experienced in this domain. They help us meet the bulk and diverse needs of our esteemed customers in the most efficient manner.</p>
                <p>Our company has accumulated 15 years of networking contacts which enables us to offer our customers access to a global market.</p>
                <p>We maintain premium quality at our concern in terms of production and services. Our in-house quality test center ensures that only the quality product gets approval Before dispatch to defined destination. We supply our goods across pan India.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h2 class="section-title">Best Collection for All Generations</h2>
                <p>We offer a variety of manufacturing solutions to fit customer-specific requirements.</p>
                <p>Full-service hosiery product development, manufacturing, as well as 15 years of marketing and sales experience in the Industry.</p>
                <p>We are a reliable exporter and manufacturer of Socks & Plain T-Shirts. In addition, we also offer Corporate T-shirt with Customize Printing Facility. Based in New Delhi, India, we cater to worldwide requirements. More than 6 decades of presence in this industry has helped us accumulate tremendous accolades and appreciation from customers, who have been using our products for a very long time.</p>
            </div>
            <div class="col-lg-6 col-md-6 order-first order-md-last">
                <div class="image-container mb-4 mb-md-0">
                    <img src="./assets/img/about/garment-industry.jpg" alt="Garment Industry" class="img-thumbnail enhanced-img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
<?php
include('components/features.php');
include('components/footer.php');
?>
