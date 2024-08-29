<?php
// Initialize variables and flags
$name = $email = $subject = $message = "";
$errors = [];
$successMessage = "";
$errorMessage = "";

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    // Validate email
    if (empty($_POST["email"])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Validate subject
    if (empty($_POST["subject"])) {
        $errors[] = "Subject is required.";
    } else {
        $subject = htmlspecialchars(trim($_POST["subject"]));
    }

    // Validate message
    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } else {
        $message = htmlspecialchars(trim($_POST["message"]));
    }

    // If no errors, send the email
    if (empty($errors)) {
        $toAdmin = "info@sethihosiery.com";
        $toUser = $email; // Send a thank you email to the user

        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $emailContent = "<p><strong>Name:</strong> $name</p>
                         <p><strong>Email:</strong> $email</p>
                         <p><strong>Subject:</strong> $subject</p>
                         <p><strong>Message:</strong><br>$message</p>";

        // Send email to admin
        if (mail($toAdmin, $subject, $emailContent, $headers)) {
            // Send thank you email to user
            $thankYouSubject = "Thank you for contacting Sethi Hosiery";
            $thankYouMessage = "<p>Dear $name,</p>
                                <p>Thank you for reaching out to us. We have received your message and will get back to you shortly.</p>
                                <p>Best regards,<br>Sethi Hosiery</p>";
            if (mail($toUser, $thankYouSubject, $thankYouMessage, $headers)) {
                $successMessage = "Your message has been sent successfully.";
            } else {
                $errorMessage = "Failed to send thank you email.";
            }
        } else {
            $errorMessage = "Failed to send your message.";
        }

        // Clear the form after sending
        $name = $email = $subject = $message = "";
    }
}
?>

<?php
$meta = [
    'title' => 'Contact Us | Sethi Hosiery',
    'description' => 'Get in touch with Sethi Hosiery. Find our contact details and reach out for support, inquiries, or feedback.',
    'keywords' => 'contact us, Sethi Hosiery contact, customer support, reach out',
    'robots' => 'index, follow',
    'author' => 'Sethi Hosiery',

    // Open Graph / Facebook
    'og:title' => 'Contact Us | Sethi Hosiery',
    'og:description' => 'Contact Sethi Hosiery for support, inquiries, or feedback. Find our contact information here.',
    'og:image' => '',
    'og:url' => '',
    'og:type' => 'website',

    // Twitter
    'twitter:card' => 'summary_large_image',
    'twitter:title' => 'Contact Us | Sethi Hosiery',
    'twitter:description' => 'Reach out to Sethi Hosiery with your questions or feedback. Contact details available here.',
    'twitter:image' => '',
];

$breadcrumbs = [
    ['label' => 'Home', 'url' => './'],
    ['label' => 'Contact', 'url' => '']
];
include('components/header.php');
include('components/breadcrumb.php');

renderBreadcrumb($breadcrumbs);
?>
<style>
    .success-message {
        color: green;
        font-weight: bold;
    }

    .error-message {
        color: red;
        font-weight: bold;
    }

    .error-list {
        color: red;
        list-style-type: none;
        padding: 0;
    }

    .error-list li {
        margin-bottom: 5px;
    }
</style>
<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__content">
                    <div class="contact__address">
                        <h5>Contact Us</h5>
                        <ul>
                            <li>
                                <h6><i class="fa fa-map-marker"></i> Location</h6>
                                <a href="https://g.page/sethi-enterprises-delhi">63 Ground Floor, Sethi Enterprises, Pocket-2, Sector-24, Rohini, Delhi, 110085</a>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone"></i> Phone Number</h6>
                                <p><span><a href="tel:+91-8447797948">+91-8447797948</a></span><span><a href="tel:+91-9958450733">+91-9958450733</a></span></p>
                            </li>
                            <li>
                                <h6><i class="fa fa-envelope"></i> Email Address</h6>
                                <a href="mailto:info@sethihosiery.com" class="link-">info@sethihosiery.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact__form">
                        <h5>SEND MESSAGE</h5>
                        <?php if (!empty($successMessage)) { ?>
                            <div class="alert alert-success" role="alert"><?php echo $successMessage; ?></div>
                        <?php } ?>
                        <?php if (!empty($errorMessage)) { ?>
                            <div class="alert alert-danger" role="alert"><?php echo $errorMessage; ?></div>
                        <?php } ?>
                        <?php if (!empty($errors)) { ?>
                            <ul class="error-list">
                                <?php foreach ($errors as $error) { ?>
                                    <li><?php echo $error; ?></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        <form action="" method="POST">
                            <input type="text" name="name" placeholder="Name*" value="<?php echo htmlspecialchars($name); ?>" required>
                            <input type="email" name="email" placeholder="Email*" value="<?php echo htmlspecialchars($email); ?>" required>
                            <input type="text" name="subject" placeholder="Subject*" value="<?php echo htmlspecialchars($subject); ?>" required>
                            <textarea name="message" placeholder="Message*" required><?php echo htmlspecialchars($message); ?></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6997.577139375257!2d77.089824!3d28.725864!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d07602b1b84b5%3A0xa3bfa8d7e0dad2bd!2sSETHI%20ENTERPRISES!5e0!3m2!1sen!2sin!4v1724245808871!5m2!1sen!2sin"
                        height="780" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<?php
include('components/features.php');
include('components/footer.php');
?>