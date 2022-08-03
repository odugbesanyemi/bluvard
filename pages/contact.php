<?php include("../includes/header.php") ?>

<div class="container">
    <h2 class="fw-bold">Contact Us</h2>
    <p>Need Help? we are just a message away.</p>
    <div class="breadcrumb mb-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<section class="">
    <div class="container">
        <div class="d-flex align-items-center flex-column flex-md-row">
            <form action="#" class="text-start w-100 container">
                <div class="form-head mb-5">
                    <h2 class="fw-bold">SEND US A MESSAGE</h2>
                    <p>We are online 24/7 we respond almost immediately</p>
                </div>
                <div class="form-group row gx-2">
                    <div class="col-md-6"><input type="text" name="" id="name" placeholder="Full Name"
                            class="border p-4 w-100 mb-3 "></div>
                    <div class="col-md-6"><input type="email" name="" id="name" placeholder="Email Address"
                            class="border p-4 w-100 mb-3"></div>
                </div>
                <div class="form-group">
                    <input type="tel" name="" id="name" placeholder="Mobile Number" class="border p-4 w-100 mb-3">
                </div>
                <div class="form-group">
                    <input type="text" name="" id="msg_subject" placeholder="Message Subject"
                        class="border p-4 w-100 mb-3">
                </div>

                <div class="form-group">
                    <Textarea placeholder="Your Message" class="p-4 mb-3 w-100 border"></Textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="border p-4 mb-3 bg-warning w-100">
                </div>
            </form>
            <div class="contact-img">
                <img src="/assets/pexels-photo-1550337.webp" alt="" class="w-100">
            </div>
        </div>
    </div>
</section>
<?php include("../includes/footer.php") ?>