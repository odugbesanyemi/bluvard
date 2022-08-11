<?php 
include('scripts/dbConnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tecxha IT Solutions">
    <meta name="description"
        content="Bluvard is a youth led organisation focused on bridging the education divide through non-conventional learning strategies for children in rural communities.">
    <title>Bluvard Education Initiative- Bridging the Education Divide</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="assets/logos/BLUVARD_FAVICON.svg" type="image/x-icon">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav class="">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="">
                    <p class="m-0"><span class="d-none d-md-inline">for more info on schedules call</span>  +2347015131887, 456038222</p>
                </div>
                <div class="">
                    <ion-icon name="logo-facebook" class="fs-3 p-md-3 p-1"></ion-icon>
                    <ion-icon name="logo-twitter" class="fs-3 p-md-3 p-1"></ion-icon>
                    <ion-icon name="logo-instagram" class="fs-3 p-md-3 p-1"></ion-icon>
                    <ion-icon name="logo-pinterest" class="fs-3 p-md-3 p-1"></ion-icon>
                </div>
            </div>
        </div>
    </nav>
    <header class="">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark align-items-center py-3">
            <div class="container align-items-center">
                <div class="navbar-brand d-flex align-items-center"><img src="assets/logos/Bluvard_svg_logo.svg" alt=""
                        width="50">
                    <p class="ps-1 fw-bold text-white mb-0" onclick="window.location.assign('#')">Bluvard Education
                        Initiative</p>
                </div>
                <button class="navbar-toggler border-0 shadow-none p-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse p-0" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="pages/about.php">The organisation</a></li>
                                <li><a class="dropdown-item" href="pages/about.php#about-team">Our Team</a></li>
                                <li><a class="dropdown-item" href="pages/blog.php">Blog</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Programmes</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../pages/projects.php?digital_rural">Digital
                                        Rural</a></li>
                                <li><a class="dropdown-item" href="../pages/projects.php?girls_in_tech">Girls in
                                        Tech</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="../pages/event.php">events</a>
                        <a class="nav-link" href="../pages/gallery.php">gallery</a>
                        <a class="nav-link" href="../pages/contact.php">contact</a>
                    </div>
                    <div id="nav-btn" class="ms-auto">
                        <a href="../pages/volunteer.php"><button type="button"
                                class="btn btn-yellow ms-3 d-flex justify-content-between align-items-center"
                                id="volunteerBtn" style="background-color:yellow; border:0;">volunteer <ion-icon
                                    class="ps-2" name="help-buoy-outline">
                                </ion-icon></button></a>
                    </div>
                </div>

            </div>
        </nav>
        <div id="header-icon-stack" class="d-none">
            <ion-icon name="logo-facebook" class="fs-3 py-4"></ion-icon>
            <ion-icon name="logo-twitter" class="fs-3 py-4"></ion-icon>
            <ion-icon name="logo-instagram" class="fs-3 py-4"></ion-icon>
            <ion-icon name="logo-pinterest" class="fs-3 py-4"></ion-icon>
        </div>
        <div id="hero" class="container d-flex align-items-start justify-content-center flex-column position-relative">
            <div id="hero-content" class="row">
                <div class="col-md-8">
                    <h1 id="hero-caption" class=""> Finding <span style="color:yellow;">Gems</span> in the rough</h1>
                    <p class="mb-3">Join us in our quest to bridge the education divide. support a child today</p>
                    <div>
                        <button class="btn btn-primary btn py-2 d-flex justify-content-between align-items-center"
                            onclick="window.location.assign('pages/about.php')">Learn more <ion-icon class="ps-2"
                                name="chevron-down-circle-outline"></ion-icon></button>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <section id="about" class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 container text-center">
                    <h2 class="mb-4 fw-bold fs-1 text-white text-center">1 in every 3 children
                        from sub-Saharan Africa
                        may never have the opportunity to go to school and 1 in every 5 out-of-school children are from
                        Nigeria</h2>
                    <p class="text-white text-center" data-aos="zoom-out-up">If quality education is not just a basic
                        human right but also
                        fundamental in closing the gaps created by inequality and ultimately reducing global poverty,
                        how then do we democratize access to quality education for young people in rural communities
                        across Nigeria?
                    </p>
                    <button class="button btn btn-light d-flex align-items-center mx-auto">Read more <ion-icon name="arrow-forward-circle-outline" class="ms-3 fs-4"></ion-icon></button>
                </div>
            </div>
        </div>

    </section>
    <section id="programs" class=" position-relative p-0">
        <div class="programs-header d-flex align-items-center">
            <P class="m-0 text-center bg-danger px-5 py-4 text-white">WHAT WE DO</P>
            <h2 class="mb-0 px-4 serif fw-bold text-center">Our Initiatives</h2>
        </div>
        <div class="programs-showcase py-5 my-5">
            <div class="program container">
                <div class="row g-4 justify-content-end align-items-end">
                    <div class="col-md-4 bg-white">
                        <div class="">
                            <div class="p-4 ">
                                <img src="assets/IMG_20211207_112142_184.jpg" alt="" class="w-100 mb-4">
                                <h2 class="fw-bold mb-3">Project Digital Rural</h2>
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
                        <div class="">
                            <div class="p-4 ">
                                <h2 class="fw-bold mb-3">Center For Education and Lifelong skills(CELLS)</h2>
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
                        <div class="">
                            <div class="p-4 ">
                                <h2 class="fw-bold mb-3">Rural Heroes</h2>
                                <p class=""> Every month, we bring the spotlight to one young person in a rural
                                    community using their skill/ talent to impact the lives of others in their
                                    community.
                                </p>
                                <div class="">
                                    <a href="#" class="">Click more</a><ion-icon name="arrow-forward-circle-outline" class="ms-3 fs-4 "></ion-icon>
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
    <section id="partners">
        <div class="container">
            <div class="partners-title text-center">
                <h2 class="my-3">Our partners</h2>
                <p>We have worked with a few organisations and tech startups to bring to life our visions. Become one
                    today lets showcase you.</p>
            </div>
            <div id="partners-showcase" class="d-flex justify-content-around  align-items-center py-md-5">
                <div class="partner-logo"><img src="assets/microsoft-logo-2012-present.jpeg" alt=""></div>
                <div class="partner-logo"><img src="assets/Tech4Dev-IAmAWomanTechster-Campaign.jpg" alt=""></div>
                <div class="partner-logo"><img src="assets/logo-global-youth-mobilization.png" alt=""></div>
                <div class="partner-logo"><img src="assets/tecxha logo-04.jpg" alt=""></div>
                <div class="partner-logo"><img src="assets/LBS-sustainability-centre-logo_big.png" alt=""></div>
                <div class="partner-logo"><img src="assets/innocentChukwumalogo.png" alt=""></div>
                <div class="partner-logo"><img src="assets/carrignton_youth_fellowship.png" alt=""></div>
                <div class="partner-logo"><img src="assets/young_africa_leadership.png" alt=""></div>
            </div>
        </div>
    </section>
    <?php include("includes/footer.php") ?>