<?php 
include('scripts/dbConnect.php');
include('includes/header.php');
?>
    <div class="hero">
        <h1>Hello world</h1>
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
            <h2 class="mb-5 px-4 fs-1 serif fw-bold text-center sublimaBold">Our Initiatives</h2>
        </div>
        <div class="programs-showcase">
            <div class="program container">
                <div class="row justify-content-end align-items-stretch ">
                    <div class="col-md-4 bg-white">
                        <div class="rounded rounded-3 h-100">
                            <div class="p-4 ">
                                <img src="assets/img/IMG_20211207_112142_184.jpg" alt="" class="w-100 mb-4 rounded rounded-2">
                                <h2 class="fw-bold mb-3 fs-5">Project Digital Rural</h2>
                                <p class="">Project Digital Rural is a digital inclusion project aimed at equipping
                                    out-of-school/unemployed youths in rural communities across Nigeria with in-depth
                                    digital skills, and mentorship sufficient to launch a career in different digital
                                    fields
                                </p>
                                <div class="">
                                    <a href="#" class="">Click more </a><ion-icon name="arrow-forward-circle-outline" class="ms-3 fs-4 "></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 bg-white ">
                        <div class=" rounded rounded-3">
                            <div class="p-4 ">
                                <img src="assets/img/DSC_1491.jpg " alt="" class="w-100 mb-4 rounded rounded-2">
                                <h2 class="fw-bold mb-3 fs-5">Center For Education and Lifelong skills</h2>
                                <p class=""> At Bluvard, we establish local innovation hubs in rural or underserved
                                    communities across Nigeria. These CELLS serve as points of convergence for young
                                    people can collaborate, innovate and build together.
                                </p>
                                <div class="">
                                    <a href="#" class="">Click more</a><ion-icon name="arrow-forward-circle-outline" class="ms-3 fs-4 "></ion-icon>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 bg-white">
                        <div class="rounded rounded-3">
                            <div class="p-4">
                                <img src="assets/img/DSC_1505.jpg" alt="" class="w-100 mb-4 rounded rounded-2">
                                <h2 class="fw-bold mb-3 fs-5">Rural Heroes</h2>
                                <p class=""> Every month, we bring the spotlight to one young person in a rural
                                    community using their skill/ talent to impact the lives of others in their
                                    community.
                                </p>
                                <div class="">
                                    <a href="pages/digital_rural.php" class="">Click more</a><ion-icon name="arrow-forward-circle-outline" class="ms-3 fs-4 "></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="learnmore">
        <div class="text-center container">
            <p class="text-center">WE WELCOME YOU TO LEARN ABOUT US</p>
            <h3 class="fs-2 fw-bold mb-4">We would be happy to hear from you.</h3>
            <button class="btn btn-primary px-4 py-2 btn-sm d-flex align-items-center justify-content-center rounded-pill mx-auto">Contact Us <ion-icon name="arrow-forward-circle-outline" class="ps-2 text-white fs-5"></ion-icon></button>
        </div>
    </section>
    <section id="news">
        <div class="container">
            <p>OUR LATEST NEWS</p>
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <h2 class="fw-bold serif">VISIT OUR INSIGHTS AND LATEST NEWS</h2>
                <p>
                    <a href="pages/blog.php">Visit our blog <ion-icon name="arrow-forward-outline" class="ms-4">
                        </ion-icon></a>
                </p>
            </div>
            <div id="blog-extract" class="my-5">
                <div class="blog-extract-carousel">
                    <div class="news-elem">
                        <div class="news-head p-relative">
                            <img src="assets/IMG-20211222-WA0015.jpg " class="w-100" alt=" ">
                            <div class="img-shadow d-flex flex-column align-items-center justify-content-center">
                                <div class="container">
                                    <p
                                        class="d-flex align-items-center text-white flex-column text-warning justify-content-around">
                                        <ion-icon name="heart-outline" class="fs-1 text-white"></ion-icon>
                                        <span>2,220</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-bottom my-4 px-3 d-flex flex-column justify-content-around">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <ion-icon name="calendar-outline" class="pe-2 mb-0"></ion-icon> 25th May, 2022
                                </div>
                            </div>
                            <h4 class="fs-2">Tecxha partners with Bluvard Education Initiative</h4>
                            <p>Read more</p>
                        </div>
                    </div>
                    <div class="news-elem">
                        <div class="news-head">
                            <img src="assets/IMG-20211222-WA0015.jpg" class="w-100" alt=" ">
                            <div class="img-shadow d-flex flex-column align-items-center justify-content-center">
                                <div class="container">
                                    <p
                                        class="d-flex align-items-center text-white flex-column text-warning justify-content-around">
                                        <ion-icon name="heart-outline" class="fs-1 text-white"></ion-icon>
                                        <span>2,220</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-bottom my-4 px-3 d-flex flex-column justify-content-around">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <ion-icon name="calendar-outline" class="pe-2 mb-0"></ion-icon> 25th May, 2022
                                </div>
                            </div>
                            <h4 class="fs-2">The Girl Child future</h4>
                            <p>Read more</p>
                        </div>
                    </div>

                    <div class="news-elem">
                        <div class="news-head">
                            <img src="assets/IMG-20211222-WA0015.jpg" class="w-100" alt="">
                            <div class="img-shadow d-flex flex-column align-items-center justify-content-center">
                                <div class="container">
                                    <p
                                        class="d-flex align-items-center text-white flex-column text-warning justify-content-around">
                                        <ion-icon name="heart-outline" class="fs-1 text-white"></ion-icon>
                                        <span>2,220</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-bottom my-4 px-3 d-flex flex-column justify-content-around">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <ion-icon name="calendar-outline" class="pe-2 mb-0"></ion-icon> 25th May, 2022
                                </div>
                            </div>
                            <h4 class="fs-2">Tecxha partners with Bluvard</h4>
                            <p>Read more</p>
                        </div>
                    </div>
                    <div class="news-elem">
                        <div class="news-head ">
                            <img src="assets/IMG-20211222-WA0015.jpg" class="w-100" alt="">
                            <div class="img-shadow d-flex flex-column align-items-center justify-content-center">
                                <div class="container">
                                    <p
                                        class="d-flex align-items-center text-white flex-column text-warning justify-content-around">
                                        <ion-icon name="heart-outline" class="fs-1 text-white"></ion-icon>
                                        <span>2,220</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-bottom my-4 px-3 d-flex flex-column justify-content-around">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <ion-icon name="calendar-outline" class="pe-2 mb-0"></ion-icon> 25th May, 2022
                                </div>
                            </div>
                            <h4 class="fs-2">The Girl Child future</h4>
                            <p>Read more</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Events" class="bg-danger">
        <div class="container">
            <p>OUR EVENTS</p>
            <h2 class="fw-bold serif fw-bold">UPCOMING EVENTS</h2>
            <div id="events-body" class="py-4">
                <div class="row gy-3">
                    <div class="col-md-4 border-0">
                        <div class="bg-white">
                            <div class="event-img">
                                <img src="assets/projectdigitalrural.jpg" alt="" class="w-100">
                            </div>
                            <div class="event-body py-4 px-4">
                                <h3 class="">Visit To Motherless Homes</h3>
                                <p class="d-flex align-items-center mb-0">
                                    <ion-icon name="time-outline" class="me-2 mb-0"></ion-icon>24th June, 2022
                                </p>
                                <p class="d-flex align-items-center">
                                    <ion-icon name="location-outline" class="me-2"></ion-icon>Charaton Hotel &
                                    Suites,Lagos
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-0">
                        <div class="bg-white">
                            <div class="event-img">
                                <img src="assets/projectdigitalrural.jpg" alt="" class="w-100">
                            </div>
                            <div class="event-body py-4 px-4">
                                <h3 class="">Visit To Motherless Homes</h3>
                                <p class="d-flex align-items-center mb-0">
                                    <ion-icon name="time-outline" class="me-2 mb-0"></ion-icon>24th June, 2022
                                </p>
                                <p class="d-flex align-items-center">
                                    <ion-icon name="location-outline" class="me-2"></ion-icon>Charaton Hotel &
                                    Suites,Lagos
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-white">
                            <div class="event-img">
                                <img src="assets/projectdigitalrural.jpg" alt="" class="w-100">
                            </div>
                            <div class="event-body py-4 px-4">
                                <h3 class="">Visit To Motherless Homes</h3>
                                <p class="d-flex align-items-center mb-0">
                                    <ion-icon name="time-outline" class="me-2 mb-0"></ion-icon>24th June, 2022
                                </p>
                                <p class="d-flex align-items-center">
                                    <ion-icon name="location-outline" class="me-2"></ion-icon>Charaton Hotel &
                                    Suites,Lagos
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <a href="#" class="my-3 d-flex align align-items-center">see more events <ion-icon
                        name="arrow-forward-outline" class="ms-4"></ion-icon></a>
            </div>
        </div>
    </section> -->
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