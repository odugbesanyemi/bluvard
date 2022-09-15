    <footer>
        <div class="container px-4 px-md-0">
            <div class="row py-md-5 pb-0 py-5">
                <div class="footer-about col-md-3">
                    <ul class="text-left text-md-start">
                        <div class="footer-logo d-flex align-items-center justify-content-center">
                            <div class="logo-img">
                                <img src="../assets/logos/Bluvard_svg_logo_footer.svg" width="50" alt="">
                            </div>
                            <div class="logo-text ms-3">
                                <h4 class="fs-2 fw-bold fs-md-5 m-0">Bluvard</h4>
                                <h5 class="fs-6 fw-light">Education Initiative</h5>
                            </div>
                        </div>
                        <div id="icon-stack"
                            class="d-flex me-lg-3 mb-md-0 mb-4  d-md-flex pt-3 justify-content-center justify-content-md-center text-dark bg-transparent">
                            <a href="https://twitter.com/Bluvard_NGO?t=ozqhyY8xwC5sfCy0QtjARQ&s=09"><i
                                    class="fa fa-twitter" aria-hidden="true" style="color:#00acee;"></i></a>
                            <a href="https://instagram.com/invites/contact/?i=nak86oc8ut2f&utm_content=lpgyjhz"> <i class="fa fa-instagram" aria-hidden="true" style="color:#f77737;"></i></a>
                                <a href="https://www.linkedin.com/company/the-bluvard-education-initiative/"><i
                                    class="fa fa-linkedin" aria-hidden="true"  style="color:#ffffff;"></i></a>
                        </div>
                    </ul>
                </div>
                <hr class="d-md-none">
                <div class="footer-quicklinks col-6 col-md-3">
                    <ul class="text-start text-md-start">
                        <h4>Quick Links </h4>
                        <li> <a href="../index.php">Home</a></li>
                        <li> <a href="../pages/about.php">About us</a></li>
                        <li> <a href="../pages/digital_rural.php">project Digital Rural</a></li>
                        <!-- <li> <a href="../pages/projects.php">Our Programs</a></li> -->
                        <li> <a href="../pages/contact.php">Contact Us</a></li>
                        <li> <a href="../pages/gallery.php">Our Gallery</a></li>
                    </ul>
                </div>
                <div class="footer-ourlinks col-6 col-md-3">
                    <ul class="text-start text-md-start">
                        <h4>Our Links </h4>
                        <li> <a href="../pages/volunteer.php">Become a Volunteer</a></li>
                        <li> <a href="../pages/event.php?category=upcoming">Upcoming Events</a></li>
                        <li> <a href="../pages/event.php?category=upcoming">Ongoing Programs</a></li>
                        <li> <a href="#">Donate</a></li>
                    </ul>
                </div>

                <div class="footer-newsletter col-md-3">
                    <ul class="text-start text-md-start text-center">
                        <h4 class="fw-bold">NEWSLETTER</h4>
                        <p class=" my-2">Subscribe to become a part of our community
                        </p>
                        <form action="../scripts/newsletter.php" method="POST">
                            <!-- <div class="newsletter-form mb-3">
                                <input type="text" name="newslettername" id="" placeholder="Full Name"
                                    class="border-0 form-control bg-none shadow-none" required>
                            </div> -->
                            <div class="form-group d-flex newsletter-form">
                                <input type="email" name="newsletteremail" id="newsletterForm"
                                    placeholder="Email Address" class="border-0 form-control shadow-none rounded"
                                    required>
                                <button class="border-0">SUBSCRIBE</button>
                            </div>
                        </form>
                    </ul>

                </div>
            </div>
        </div>
        <div class="footer-under">
            <div class="container py-3 text-center">
                <p class="text-center">Copyright &copy; 2022 Bluvard Education Initiative </p>
            </div>
        </div>
    </footer>
    </body>

    <script src="../js/script.js"></script>
    <script src="../assets/mklb/js/mklb.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>
    <script>
        $(document).ready(function() {
            // $(".blog-extract-carousel ").slick();
            // create a function that sets the below settings 
            $.fn.slickElement = function(elem, num) {
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
            $.fn.slickElement('.blog-extract-carousel', 2)
            $.fn.slickElement('#partners-showcase', 2)
            $.fn.slickElement('.priority-showcase', 1)
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.6.0/lightgallery.min.js" integrity="sha512-2Vd6dnkrqkfNnWC9qlNhcy3IaWYwggi4xW/98lt76TfBOvzhWLCCrxELko/qFiwgsZRn1jd5MbtcF8cgBmkuDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        AOS.init();
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6317231b37898912e9677632/1gc9629e3';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    </html>