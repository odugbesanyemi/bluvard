<?php include("../includes/header.php") ?>

<div class="container text-center">
    <h2 class="fw-bold sublimaBold">Contact Us</h2>
    <div class="breadcrumb mb-0">
        <nav aria-label="breadcrumb" class="w-100">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item " aria-current="page">Contact us</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<section class="" style="padding:10% !important;">
    <div class="form-head mb-5 text-center">
        <h2 class="fw-bold sublimaBold">Send us a message</h2>
        <p class="text-center">We are online 24/7 we respond almost immediately</p>
    </div>
    <div class="row">
        <form action="#" class="text-start col-md-7 mx-auto">
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
                <button class="border-0 rounded p-3 mb-3 w-100"
                    style="background-color:var(--primaryColor); color:white"><i class="fa fa-check"
                        aria-hidden="true"></i> Submit</button>
            </div>
        </form>
    </div>
</section>
<?php include("../includes/footer.php") ?>