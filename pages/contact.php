<?php include("../includes/header.php") ?>

<div class="container text-center mt-5">
    <h2 class="fw-bold sublimaBold">Contact Us</h2>
    <div class="breadcrumb mb-0">
        <nav aria-label="breadcrumb" class="w-100">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<section class="">
        <div class="form-head mb-5 text-center">
            <h2 class="fw-bold sublimaBold">Send us a message</h2>
            <p class="text-center">We are online 24/7 we respond almost immediately</p>
        </div>
        <div class="d-flex align-items-center flex-column flex-md-row container">
            <form action="#" class="text-start w-100">
                <div class="form-group row gx-2">
                    <div class="col-md-6"><input type="text" name="" id="name" placeholder="Full Name"
                            class="border rounded p-3 w-100 mb-3 "></div>
                    <div class="col-md-6"><input type="email" name="" id="name" placeholder="Email Address"
                            class="border rounded p-3 w-100 mb-3"></div>
                </div>
                <div class="form-group">
                    <input type="tel" name="" id="name" placeholder="Mobile Number" class="border rounded p-3 w-100 mb-3">
                </div>
                <div class="form-group">
                    <input type="text" name="" id="msg_subject" placeholder="Message Subject"
                        class="border rounded p-3 w-100 mb-3">
                </div>

                <div class="form-group">
                    <Textarea placeholder="Your Message" class="p-3 mb-3 w-100 border rounded"></Textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="border rounded p-3 mb-3 bg-warning w-100">
                </div>
            </form>
            <div class="contact-img ms-md-3 d-none d-md-block">
                <img src="/assets/img/pexels-photo-1550337.webp" alt="" class="w-100 h-100">
            </div>
        </div>
</section>
<?php include("../includes/footer.php") ?>