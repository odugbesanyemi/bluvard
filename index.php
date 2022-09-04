<?php 
include('scripts/dbConnect.php');
include('includes/header.php');
?>
        <div class="hero">
            <div>
                <h1>Driving inclusive Education and Inspiring Hope. </h1>
                <div class="btn-group">
                    <button> Learn More</button>
                    <button>Donate</button>
                </div>
            </div>
        </div>
    </div>
    <section id="about" class=""  style="min-height:300px; display:flex; flex-direction:column; justify-content:center;">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel" style="z-index:0;">
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active">
                        <p class="text-center">1 in every 3 children from sub-Saharan Africa may never have the opportunity to go to school and 1 in every 5 out-of-school children are from Nigeria</p>
                    </div>
                    <div class="carousel-item position-relative">
                        <p class="text-dark text-center" data-aos="zoom-out-up">If quality education is not just a basic
                            human right but also
                            fundamental in closing the gaps created by inequality and ultimately reducing global poverty,
                            how then do we democratize access to quality education for young people in rural communities
                            across Nigeria?
                        </p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>            
            <div class="row ">
                <div class="col-md-10 container text-center">
                    <h2 class="mb-4 fw-bold fs-1 text-white text-center"></h2>

                </div>
            </div>
        </div>

    </section>
    <section id="programs" class="position-relative bg-white" >
        <div class="programs-header d-flex align-items-center justify-content-center">
            <h2 class="mb-5 px-4 fs-1 fw-bold text-center" style="font-family:serif;color:var(--primaryColor)">Our Initiatives</h2>
        </div>
        <div class="programs-showcase container">
            <div class="row justify-content-end align-items-stretch g-4 programs-row">
                <div class="col-md-4 bg-white">
                    <div class="program">
                        <!-- <div class="p-4">
                            <img src="assets/img/IMG_20211207_112142_184.jpg" alt="" class="w-100 mb-4 rounded rounded-2">
                            <p class="">Project Digital Rural is a digital inclusion project aimed at equipping
                                out-of-school/unemployed youths in rural communities across Nigeria with in-depth
                                digital skills, and mentorship sufficient to launch a career in different digital
                                fields
                            </p>
                            <div class="">
                                <a href="#" class="">Click more </a><ion-icon name="arrow-forward-circle-outline" class="ms-3 fs-4 "></ion-icon>
                            </div>
                        </div> -->
                        <div class="program-title">
                            <h2 class="fw-bold fs-5">Project Digital Rural</h2>
                        </div>
                        <div class="program-desc py-3">
                            <p>Equipping out-of-school/unemployed youths in rural communities across Nigeria with in-depth
                                digital skills, and mentorship sufficient to launch a career in different digital
                                fields
                            </p>
                            <a href=""><button class="programBtn">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bg-white ">
                    <div class="program">
                        <!-- <div class="p-4 ">
                            <img src="assets/img/DSC_1491.jpg " alt="" class="w-100 mb-4 rounded rounded-2">
                            <p class=""> At Bluvard, we establish local innovation hubs in rural or underserved
                                communities across Nigeria. These CELLS serve as points of convergence for young
                                people can collaborate, innovate and build together.
                            </p>
                            <div class="">
                                <a href="#" class="">Click more</a><ion-icon name="arrow-forward-circle-outline" class="ms-3 fs-4 "></ion-icon>
                            </div>
                        </div> -->
                        <div class="program-title">
                            <h2 class="fw-bold fs-5">Center For Education and Lifelong skills</h2>
                        </div>
                        <div class="program-desc py-3">
                            <p>At Bluvard, we establish local innovation hubs in rural or underserved
                                communities across Nigeria. These CELLS serve as points of convergence for young
                                people can collaborate, innovate and build together.
                            </p>
                            <a href=""><button class="programBtn">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 bg-white" >
                    <div class="program">
                        <!-- <div class="p-4">
                            <img src="assets/img/DSC_1505.jpg" alt="" class="w-100 mb-4 rounded rounded-2">
                            <p class=""> Every month, we bring the spotlight to one young person in a rural
                                community using their skill/ talent to impact the lives of others in their
                                community.
                            </p>
                            <div class="">
                                <a href="pages/digital_rural.php" class="">Click more</a><ion-icon name="arrow-forward-circle-outline" class="ms-3 fs-4 "></ion-icon>
                            </div>
                        </div> -->
                        <div class="program-title">
                            <h2 class="fw-bold fs-5">Rural Heroes</h2>
                        </div>
                        <div class="program-desc py-3">
                            <p>Every month, we bring the spotlight to one young person in a rural
                                community using their skill/ talent to impact the lives of others in their
                                community.
                            </p>
                            <a href=""><button class="programBtn">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>                        
                        </div>                          
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id = "partners">
        <div class="container">
            <div class="partners-title text-center">
                <h2 class="my-3 sublimaBold">Our partners</h2>
            </div>
            <div id="partners-showcase" class="d-flex justify-content-around  align-items-center py-md-5">
                <!-- <div class="partner-logo"><img src="assets/img/microsoft-logo-2012-present.jpeg" alt=""></div> -->
                <!-- <div class="partner-logo"><img src="assets/img/Tech4Dev-IAmAWomanTechster-Campaign.jpg" alt=""></div> -->
                <div class="partner-logo"><img src="assets/img/logo-global-youth-mobilization.png" alt=""  width="30"></div>
                <div class="partner-logo"><img src="assets/img/tecxha logo-04.jpg" alt=""  width="30"></div>
                <div class="partner-logo"><img src="assets/img/LBS-sustainability-centre-logo_big.png" alt=""  width="30"></div>
                <div class="partner-logo"><img src="assets/img/innocentChukwumalogo.png" alt=""  width="30"></div>
                <div class="partner-logo"><img src="assets/img/carrignton_youth_fellowship.png" alt=""  width="30"></div>
                <div class="partner-logo"><img src="assets/img/young_africa_leadership.png" alt="" width="30"></div>
            </div>
        </div>
    </section>
<?php include("includes/footer.php") ?>