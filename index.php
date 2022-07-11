<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tecxha IT Solutions">
    <meta name="description" content="Bluvard is a youth led organisation focused on bridging the education divide through non-conventional learning strategies for children in rural communities.">
    <title>Bluvard Education Initiative- Bridging the Education Divide</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header class="py-4">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark container">
            <div class="container">
                <div class="navbar-brand d-flex align-items-center"><img src="assets/bluvard2.svg" alt="" width="80">
                    <p class="ps-3 fw-bold text-white mb-0"><small> BLUVARD</small> </p>
                </div>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active mx-md-2" aria-current="page" href="../index.php">Home</a>
                        <a class="nav-link" href="../pages/about.php">About Us</a>
                        <a class="nav-link" href="../pages/event.php">Events</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Projects</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../pages/projects.php?digital_rural">Digital Rural</a></li>
                                <li><a class="dropdown-item" href="../pages/projects.php?girls_in_tech">Girls in Tech</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../pages/events.php">New</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="../pages/gallery.php">Gallery</a>
                        <a class="nav-link" href="../pages/contact.php">contact Us</a>
                    </div>
                    <div id="nav-btn" class="ms-auto">
                        <a href="../pages/volunteer.php"><button type="button" class="btn btn-primary ms-3 d-flex justify-content-between align-items-center" id="volunteerBtn">Become a volunteer <ion-icon class="ps-2" name="help-buoy-outline"></ion-icon></button></a>
                    </div>
                </div>

            </div>
        </nav>
        <div id="header-icon-stack" class="d-flex flex-row flex-md-column me-lg-3 d-none d-md-flex">
            <ion-icon name="logo-facebook" class="fs-3 py-4"></ion-icon>
            <ion-icon name="logo-twitter" class="fs-3 py-4"></ion-icon>
            <ion-icon name="logo-instagram" class="fs-3 py-4"></ion-icon>
            <ion-icon name="logo-pinterest" class="fs-3 py-4"></ion-icon>
        </div>
        <div id="hero" class="container  d-md-flex align-items-center justify-content-center flex-column ">
            <div id="hero-content">
                <h1 id="hero-caption" class=""> Finding <span style="color:yellow;">Gems</span> in the rough</h1>
                <span id="brush"></span>
                <p class="fs-5">Join us in our quest to bridge the education divide. support a child today</p>
                <div>
                    <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center"onclick="window.location.assign('pages/about.php')">Learn more <ion-icon class="ps-2" name="chevron-down-circle-outline"></ion-icon></button>
                </div>
            </div>
            <!-- <div id="hero-img" class="d-none d-md-block">
                <img src="assets/pexels-roman.jpg" alt="">
            </div> -->
        </div>
        <!-- <div class="cursor-down text-center">
            <ion-icon name="arrow-down-circle-outline" class="text-white fs-1"></ion-icon>
        </div> -->
    </header>
    <section id="about">
        <div id="what-we-do" class="container">
            <p>WHO WE ARE</p>
            <h2 class="mb-4 serif fw-bold text-uppercase">ABOUT US</h2>
            <div class="d-flex align-items-center flex-column flex-lg-row">
                <img src="assets/17.jpg" alt="" class="about-img">
                <p class="px-0 px-md-5 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, illum eligendi deleniti quis labore, molestiae id quidem rerum laboriosam recusandae sequi doloribus error eius neque consectetur! Ullam ipsa aspernatur molestiae. Lorem ipsum
                    dolor sit, amet consectetur adipisicing elit. Qui harum non sint, eligendi iure magnam distinctio odit id consequuntur deleniti, atque, labore nemo aperiam soluta nisi a adipisci ducimus illum.
                </p>
            </div>
            <div id="what-we-do-group" class="d-flex flex-column flex-md-row p-4 mx-md-0 px-md-0">
                <div class="text-secondary p-4 about-card text-left mx-md-2 my-3 my-md-0 text-center">
                    <img src="assets/mission.png" alt="" class="mb-4">
                    <h3 class="text-success">Our Mission</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quidem quisquam assumenda impedit perspiciatis mollitia, quaerat, saepe voluptatibus debitis eos quae sit. Consequatur impedit, odio expedita nulla facilis perferendis nobis.</p>
                    <button class="btn d-flex align-items-center justify-content-center "onclick="window.location.assign('pages/about.php?#about-mission')">read more<ion-icon name="chevron-forward-outline" class="ps-3"></ion-icon></button>
                </div>
                <div class="text-secondary p-4 about-card text-left mx-md-2 my-3 my-md-0 text-center">
                    <img src="assets/visionary.png" alt="" class="mb-4">
                    <h3 class="text-warning">Our Vision</h3>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quidem quisquam assumenda impedit perspiciatis mollitia, quaerat, saepe voluptatibus debitis eos quae sit. Consequatur impedit, odio expedita nulla facilis perferendis nobis.</p>
                    <button class="btn d-flex align-items-center justify-content-center "onclick="window.location.assign('pages/about.php?#about-vision')">read more<ion-icon name="chevron-forward-outline" class="ps-3"></ion-icon></button>

                </div>
                <div class="text-secondary p-4 about-card text-left mx-md-2 my-3 my-md-0 text-center">
                    <i class="fa fa-desktop" aria-hidden="true"></i><img src="assets/goal.png" alt="" class="mb-4">
                    <h3 class="text-danger">Our Goals</h3>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quidem quisquam assumenda impedit perspiciatis mollitia, quaerat, saepe voluptatibus debitis eos quae sit. Consequatur impedit, odio expedita nulla facilis perferendis nobis.</p>
                    <button class="btn d-flex align-items-center justify-content-center"onclick="window.location.assign('pages/about.php?#about-goals')">read more<ion-icon name="chevron-forward-outline" class="ps-3"></ion-icon></button>
                </div>
            </div>
        </div>
    </section>
    <section id="programs" class="">
        <div class="container overflow-hidden">
            <P>WHAT WE DO</P>
            <h2 class="mb-4 serif mb-5 fw-bold">OUR PROGRAMS</h2>
            <div id="programs-container" class="row gx-4 gy-3">
                <div class="col-md-4">
                    <div class="programs-card">
                        <img src="assets/projectdigitalrural.jpg" alt="">
                        <div class="programs-card-details mb-4">
                            <h3 class="">Project Digital Rural</h3>
                            <p class="programs-card-desc">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius pariatur praesentium delectus, voluptate quas fuga veritatis
                                <div class="programs-card-social d-flex justify-content-start align-items-center">
                                    <ion-icon name="logo-instagram" class="fs-4 pe-4"></ion-icon>
                                    <ion-icon name="logo-facebook" class="fs-4 pe-4"></ion-icon>
                                    <ion-icon name="logo-twitter" class="fs-4 pe-4"></ion-icon>
                                </div>
                            </p>
                            <button class="btn d-flex justify-content-between align-items-center btn-outline-secondary" onclick="window.location.assign('pages/digital_rural.php')">Read more <ion-icon class="ps-2" name="chevron-down-circle-outline"></ion-icon></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="programs-card">
                        <img src="assets/projectdigitalrural.jpg" alt="">
                        <div class="programs-card-details mb-4">
                            <h3 class="">Project Digital Rural</h3>
                            <p class="programs-card-desc">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius pariatur praesentium delectus, voluptate quas fuga veritatis
                                <div class="programs-card-social d-flex justify-content-start align-items-center ">
                                    <ion-icon name="logo-instagram" class="fs-4 pe-4"></ion-icon>
                                    <ion-icon name="logo-facebook" class="fs-4 pe-4"></ion-icon>
                                    <ion-icon name="logo-twitter" class="fs-4 pe-4"></ion-icon>
                                </div>
                            </p>
                            <button class="btn d-flex justify-content-between align-items-center btn-outline-secondary">Read more <ion-icon class="ps-2" name="chevron-down-circle-outline"></ion-icon></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="programs-card">
                        <img src="assets/IMG-20211222-WA0015.jpg" alt="">
                        <div class="programs-card-details mb-4">
                            <h3 class="">Project Digital Rural</h3>
                            <p class="programs-card-desc">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius pariatur praesentium delectus, voluptate quas fuga veritatis
                                <div class="programs-card-social d-flex justify-content-start align-items-center ">
                                    <ion-icon name="logo-instagram" class="fs-4 pe-4"></ion-icon>
                                    <ion-icon name="logo-facebook" class="fs-4 pe-4"></ion-icon>
                                    <ion-icon name="logo-twitter" class="fs-4 pe-4"></ion-icon>
                                </div>
                            </p>
                            <button class="btn d-flex justify-content-between align-items-center btn-outline-secondary">Read more <ion-icon class="ps-2" name="chevron-down-circle-outline"></ion-icon></button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <section id="learnmore">
        <div class="text-center container">
            <p class="fs-6">WE WELCOME YOU TO LEARN ABOUT US</p>
            <h3 class="fs-1 mb-4 fw-bolder serif">WE WOULD BE HAPPY TO HEAR FROM YOU</h3>
            <button class="btn btn-primary px-4 py-3 mt-4">Contact Us</button>
        </div>
    </section>
    <section id="news">
        <div class="container">
            <p>OUR LATEST NEWS</p>
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <h2 class="fw-bold serif">VISIT OUR INSIGHTS AND LATEST NEWS</h2>
                <p>
                    <a href="#">Visit our blog  <ion-icon name="arrow-forward-outline" class="ms-4"></ion-icon></a>
                </p>
            </div>
            <div id="blog-extract" class="my-5">
                <div class="blog-extract-carousel">
                    <div class="news-elem">
                        <div class="news-head p-relative">
                            <img src="assets/IMG-20211222-WA0015.jpg " class="w-100" alt=" ">
                            <div class="img-shadow d-flex flex-column align-items-center justify-content-center">
                                <div class="container">
                                    <p class="d-flex align-items-center text-white flex-column text-warning justify-content-around"><ion-icon name="heart-outline" class="fs-1 text-white"></ion-icon><span>2,220</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="news-bottom my-4 px-3 d-flex flex-column justify-content-around">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <ion-icon name="calendar-outline" class="pe-2"></ion-icon> 25th May, 2022
                                </div>
                                <div>
                                    <ion-icon name="bookmark-outline" class="pe-2"></ion-icon>Digital Rural</div>
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
                                    <p class="d-flex align-items-center text-white flex-column text-warning justify-content-around"><ion-icon name="heart-outline" class="fs-1 text-white"></ion-icon><span>2,220</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="news-bottom my-4 px-3 d-flex flex-column justify-content-around">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <ion-icon name="calendar-outline" class="pe-2"></ion-icon> 25th May, 2022
                                </div>
                                <div>
                                    <ion-icon name="bookmark-outline" class="pe-2"></ion-icon>Digital Rural</div>
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
                                    <p class="d-flex align-items-center text-white flex-column text-warning justify-content-around"><ion-icon name="heart-outline" class="fs-1 text-white"></ion-icon><span>2,220</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="news-bottom my-4 px-3 d-flex flex-column justify-content-around">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <ion-icon name="calendar-outline" class="pe-2"></ion-icon> 25th May, 2022
                                </div>
                                <div>
                                    <ion-icon name="bookmark-outline" class="pe-2"></ion-icon>Digital Rural</div>
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
                                    <p class="d-flex align-items-center text-white flex-column text-warning justify-content-around"><ion-icon name="heart-outline" class="fs-1 text-white"></ion-icon><span>2,220</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="news-bottom my-4 px-3 d-flex flex-column justify-content-around">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <ion-icon name="calendar-outline" class="pe-2"></ion-icon> 25th May, 2022
                                </div>
                                <div>
                                    <ion-icon name="bookmark-outline" class="pe-2"></ion-icon>Digital Rural</div>
                            </div>
                            <h4 class="fs-2">The Girl Child future</h4>
                            <p>Read more</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Events" class="">
        <div class="container">
        <p>OUR EVENTS</p>
        <h2 class="fw-bold serif fw-bold" >UPCOMING EVENTS</h2>
        <div id="events-body" class="py-4">
            <div class="row">
                <div class="col-md-4 border-0">
                    <div class="event-img">
                        <img src="assets/projectdigitalrural.jpg" alt="" class="w-100 rounded">
                    </div>
                    <div class="event-body py-4 px-2">
                        <h3 class="">Visit To Motherless Homes</h3>
                        <p class="d-flex align-items-center"><ion-icon name="time-outline" class="me-2"></ion-icon>24th June, 2022</p>
                        <p class="d-flex align-items-center"><ion-icon name="location-outline" class="me-2"></ion-icon>Charaton Hotel & Suites,Lagos</p>
                    </div>
                </div>
                <div class="col-md-4 border-0">
                    <div class="event-img">
                        <img src="assets/projectdigitalrural.jpg" alt="" class="w-100 rounded">
                    </div>
                    <div class="event-body py-4 px-2">
                        <h3 class="">Visit To Motherless Homes</h3>
                        <p class="d-flex align-items-center"><ion-icon name="time-outline" class="me-2"></ion-icon>24th June, 2022</p>
                        <p class="d-flex align-items-center"><ion-icon name="location-outline" class="me-2"></ion-icon>Charaton Hotel & Suites,Lagos</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="event-img">
                        <img src="assets/projectdigitalrural.jpg" alt="" class="w-100 rounded">
                    </div>
                    <div class="event-body py-4 px-2">
                        <h3 class="">Visit To Motherless Homes</h3>
                        <p class="d-flex align-items-center"><ion-icon name="time-outline" class="me-2"></ion-icon>24th June, 2022</p>
                        <p class="d-flex align-items-center"><ion-icon name="location-outline" class="me-2"></ion-icon>Charaton Hotel & Suites,Lagos</p>
                    </div>
                </div>
            </div>
            <a href="#" class="my-3 d-flex align align-items-center">see more events <ion-icon name="arrow-forward-outline" class="ms-4"></ion-icon></a>
        </div>
        </div>
    </section>
    <section id="partners">
        <div class="container">
            <div class="partners-title text-center">
                <h2 class="my-3">Our partners</h2>
                <p>We have worked with a few organisations and tech startups to bring to life our visions. Become one today lets showcase you.</p>
            </div>
            <div id="partners-showcase" class="d-flex justify-content-around  align-items-center py-md-5">
                <img src="assets/microsoft-logo-2012-present.jpeg" alt="" >
                <img src="assets/Tech4Dev-IAmAWomanTechster-Campaign.jpg" alt="" >
                <img src="assets/logo-global-youth-mobilization.png" alt="" >
            </div>
        </div>
    </section>
<?php include("includes/footer.php") ?>