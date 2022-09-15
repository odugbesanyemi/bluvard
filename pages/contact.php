<?php  include("../includes/header.php");
pageHeader("Contact us | Bluvard Education Initiative","Send us a message today.")
?>

<div class="container text-center">
    <h2 class="fw-bold sublimaBold">Contact Us</h2>
    <div class="breadcrumb mb-0">
        <nav aria-label="breadcrumb" class="w-100">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="../">Home</a></li>
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
        <form action="../includes/components.php" class="text-start col-md-7 mx-auto" method="POST">
            <div class="form-group row gx-2">
                <div class="col-md-6"><input type="text" name="fullname" id="name" placeholder="Full Name *" class="border rounded p-3 w-100 mb-3 " required></div>
                <div class="col-md-6"><input type="email" name="email" id="name" placeholder="Email Address *" class="border rounded p-3 w-100 mb-3" required></div>
            </div>
            <div class="form-group">
                <input type="tel" name="tel" id="number" placeholder="Mobile Number *" class="border rounded p-3 w-100 mb-3" required>
            </div>
            <div class="form-group">
                <input type="text" name="subject" id="msg_subject" placeholder="Message Subject *" class="border rounded p-3 w-100 mb-3" required>
            </div>
            <div class="form-group">
                <Textarea placeholder="Your Message *" name="message" class="p-3 mb-3 w-100 border rounded" required></Textarea>
            </div>
            <div class="form-group">
                <button class="border-0 rounded p-3 mb-3 w-100"style="background-color:var(--primaryColor); color:white"><i class="fa fa-check" aria-hidden="true" name="sendMessage"></i> Submit</button>
            </div>
        </form>
    </div>
</section>
<?php include("../includes/footer.php") ?>