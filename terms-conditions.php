<?php
$meta = [
    'title' => 'Terms and Conditions | Sethi Hosiery',
    'description' => 'Review the Terms and Conditions for using Sethi Hosiery’s website and services.',
    'keywords' => 'terms and conditions, Sethi Hosiery terms, website usage policy',
    'robots' => 'index, follow',
    'author' => 'Sethi Hosiery',

    // Open Graph / Facebook
    'og:title' => 'Terms and Conditions | Sethi Hosiery',
    'og:description' => 'Read the Terms and Conditions governing the use of Sethi Hosiery’s website and services.',
    'og:image' => '',
    'og:url' => '',
    'og:type' => 'website',

    // Twitter
    'twitter:card' => 'summary_large_image',
    'twitter:title' => 'Terms and Conditions | Sethi Hosiery',
    'twitter:description' => 'Understand the Terms and Conditions of using Sethi Hosiery’s website and services.',
    'twitter:image' => '', 
];

$breadcrumbs = [
    ['label' => 'Home', 'url' => './'],
    ['label' => 'Terms & Conditions', 'url' => '']
];
include('components/header.php');
include('components/breadcrumb.php');

renderBreadcrumb($breadcrumbs);
?>
<!-- Terms & Conditions Section Begin -->
<section class="terms-conditions py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h1 class="mb-4">Terms & Conditions</h1>

                <p>Welcome to Sethi Hosiery. These terms and conditions outline the rules and regulations for the use of our website <a href="https://sethihosiery.com/" class="text-danger">https://sethihosiery.com/</a>. By accessing this website, we assume you accept these terms and conditions. Do not continue to use Seth Hosiery if you do not agree to all of the terms and conditions stated on this page.</p>

                <h2 class="mt-4">1. Intellectual Property Rights</h2>
                <p>Unless otherwise stated, Seth Hosiery and/or its licensors own the intellectual property rights for all material on this website. All intellectual property rights are reserved. You may access this from Seth Hosiery for your personal use, subject to restrictions set in these terms and conditions.</p>

                <h2 class="mt-4">2. User Comments</h2>
                <p>Certain parts of this website offer the opportunity for users to post and exchange opinions and information. Seth Hosiery does not filter, edit, publish, or review comments before their presence on the website. Comments do not reflect the views and opinions of Seth Hosiery, its agents, or affiliates. To the extent permitted by applicable laws, Seth Hosiery shall not be liable for the Comments or for any liability, damages, or expenses caused or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

                <h2 class="mt-4">3. Hyperlinking to Our Content</h2>
                <p>The following organizations may link to our Website without prior written approval:</p>
                <ul class="list-unstyled pl-4">
                    <li class="mb-2">Government agencies.</li>
                    <li class="mb-2">Search engines.</li>
                    <li class="mb-2">News organizations.</li>
                    <li class="mb-2">Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses.</li>
                    <li class="mb-2">Systemwide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Website.</li>
                </ul>

                <h2 class="mt-4">4. iFrames</h2>
                <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

                <h2 class="mt-4">5. Your Privacy</h2>
                <p>Please read our <a href="./privacy-notice" class="text-danger">Privacy Notice</a>.</p>

                <h2 class="mt-4">6. Reservation of Rights</h2>
                <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amend these terms and conditions and its linking policy at any time.</p>

                <h2 class="mt-4">7. Removal of Links from Our Website</h2>
                <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us at any moment. We will consider requests to remove links, but we are not obligated to do so or to respond directly to you.</p>

                <h2 class="mt-4">8. Disclaimer</h2>
                <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties, and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
                <ul class="list-unstyled pl-4">
                    <li class="mb-2">Limit or exclude our or your liability for death or personal injury.</li>
                    <li class="mb-2">Limit or exclude our or your liability for fraud or fraudulent misrepresentation.</li>
                    <li class="mb-2">Limit any of our or your liabilities in any way that is not permitted under applicable law.</li>
                    <li class="mb-2">Exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                </ul>

                <p>The limitations and prohibitions of liability set in this section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort, and for breach of statutory duty.</p>
            </div>
        </div>
    </div>
</section>
<!-- Terms & Conditions Section End -->
<?php
include('components/features.php');
include('components/footer.php');
?>
