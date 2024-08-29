<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./"><img src="assets/img/logo.png" alt=""></a>
                    </div>
                    <p>We offer a variety of manufacturing solutions to fit customer specific requirements.</p>
                    <!-- <div class="footer__payment">
                        <a href="#"><img src="assets/img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="assets/img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="assets/img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="assets/img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="assets/img/payment/payment-5.png" alt=""></a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="./shop">Shop</a></li>
                        <li><a href="./about-us">About Us</a></li>
                        <li><a href="./contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Information</h6>
                    <ul>
                        <li><a href="./sitemap.xml">Sitemap</a></li>
                        <li><a href="./privacy-notice">Privacy Notice</a></li>
                        <li><a href="./shipping-returns">Shipping & Returns</a></li>
                        <li><a href="./terms-conditions">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>NEWSLETTER</h6>
                    <form id="newsletterForm">
                        <input type="email" id="email" placeholder="Email">
                        <button type="submit" class="site-btn" id="subscribeBtn">Subscribe</button>
                        <div id="formMessage" style="color: red; margin-top: 10px;"></div>
                    </form>
                    <!-- <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Designed by <a href="https://tech2globe.com">Tech2globe</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <!-- <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div> -->
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
<!-- Js Plugins -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    document.getElementById('newsletterForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form from submitting

        var email = document.getElementById('email').value;
        var subscribeBtn = document.getElementById('subscribeBtn');
        var messageDiv = document.getElementById('formMessage');

        // Disable the subscribe button
        subscribeBtn.disabled = true;
        subscribeBtn.textContent = 'Submitting...';
        // Clear previous messages
        messageDiv.textContent = '';

        // Simple email validation
        if (!email || !validateEmail(email)) {
            messageDiv.textContent = 'Please enter a valid email address.';
            // Enable the subscribe button
            subscribeBtn.disabled = false;
            subscribeBtn.textContent = 'Subscribe';
            return;
        }

        // Submit the form via Fetch API
        fetch('submit-newsletter', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    email: email,
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageDiv.style.color = 'green';
                    messageDiv.textContent = 'Subscription successful!';
                    document.getElementById('email').value = '';
                } else {
                    messageDiv.style.color = 'red';
                    messageDiv.textContent = 'There was an error. Please try again.';
                }
            })
            .catch(() => {
                messageDiv.style.color = 'red';
                messageDiv.textContent = 'There was an error. Please try again.';
            }).finally(() => {
                // Enable the subscribe button
                subscribeBtn.disabled = false;
                subscribeBtn.textContent = 'Subscribe';
            });
    });

    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
</script>

</body>

</html>