<footer>
    <div class="container px-4 px-md-0">
        <div class="row py-md-5 pb-0 py-5">
            <div class="footer-about col-md-3">
                <ul class="text-left text-md-start">
                    <img src="../assets/logos/Bluvard_svg_logo.svg" class="w-25" alt="">
                    <h4 class="pt-4 fs-5">Bluvard</h4>
                    <h5 class="fs-6 fw-light">Education Initiative</h5>
                    <div id="icon-stack"
                        class="d-flex me-lg-3  d-md-flex pt-3 justify-content-start justify-content-md-start bg-transparent">
                        <ion-icon name="logo-facebook" class="fs-3 pe-2"></ion-icon>
                        <ion-icon name="logo-twitter" class="fs-3 px-2"></ion-icon>
                        <ion-icon name="logo-instagram" class="fs-3 px-2"></ion-icon>
                        <ion-icon name="logo-pinterest" class="fs-3 px-2"></ion-icon>
                    </div>
                </ul>
            </div>
            <div class="footer-quicklinks col-md-3">
                <ul class="text-start text-md-start">
                    <h4>Quick Links </h4>
                    <li> <a href="../index.php">Home</a></li>
                    <li> <a href="../pages/about.php">About us</a></li>
                    <li> <a href="../pages/projects.php">Our Programs</a></li>
                    <li> <a href="../pages/contact.php">Contact Us</a></li>
                    <li> <a href="../pages/gallery.php">Our Gallery</a></li>
                </ul>
            </div>
            <div class="footer-ourlinks col-md-3">
                <ul class="text-start text-md-start">
                    <h4>Our Links </h4>
                    <li> <a href="../pages/volunteer.php">Become a Volunteer</a></li>
                    <li> <a href="../pages/event.php?category=upcoming">Upcoming Events</a></li>
                    <li> <a href="../pages/event.php?category=upcoming">Ongoing Programs</a></li>
                    <li> <a href="#">Become a sponsor</a></li>
                </ul>
            </div>
            <div class="footer-newsletter col-md-3">
                <ul class="text-start text-md-start">
                    <h4>Newsletter</h4>
                    <p class="text-white my-3">Subscribe to get latest news and information on our programs,special
                        offers and lifetime deals
                    </p>
                    <form action="../scripts/newsletter.php" method="POST">
                        <div class="newsletter-form mb-3">
                            <input type="text" name="newslettername" id="" placeholder="Full Name"
                                class="border-0 form-control bg-none shadow-none" required>
                        </div>
                        <div class="form-group d-flex newsletter-form">
                            <input type="email" name="newsletteremail" id="" placeholder="Email Address"
                                class="border-0 form-control shadow-none" required>
                            <button class="border-0">SUBSCRIBE</button>
                        </div>
                    </form>
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-under">
        <div class="container py-3 text-center text-center">
            <p class="text-center">Copyright &copy; 2022 Bluvard Education Initiative </p>
        </div>

    </div>
</footer>
</body>
<script src="../js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js "
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
</script>
<script type="text/javascript " src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>
<script>
$(document).ready(function() {
    // $(".blog-extract-carousel ").slick();
    // create a function that sets the below settings 
    $.fn.slickElement = function(elem,num) {
        $(elem).slick({
            arrow: true,
            dots: true,
            prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
            autoplay: true,
            autoplaySpeed: 6000,
            fade: false,
            row: 1,
            slidesPerRow: 3,
            slidesToShow: num,
            responsive: [{
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }]
        })
    }
    $.fn.slickElement('.blog-extract-carousel',2)
    $.fn.slickElement('#partners-showcase',4)

})
</script>
<script>
AOS.init();
</script>

</html>