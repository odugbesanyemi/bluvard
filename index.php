<?php 
include('scripts/dbConnect.php');
include('includes/header.php');
pageHeader('Home | Bluvard Education Inititiative','At Bluvard Education Initiative, Our Vision is for an Africa where access to holistic education becomes the everyday reality of all children living in rural communities regardless of gender, tribe, or religion');
include('includes/popup.php');
?>
<div class="hero" data-aos="fade-up">
    <div class="d-flex flex-column flex-md-row position-relative align-items-center container">
        <div>
            <h1>Bridging Educational Barriers; Inspiring Hope.</h1>
            <div class="btn-group">
                <a href="pages/about"><button> Learn More <i class="fa fa-long-arrow-right ms-3"
                            aria-hidden="true"></i></button></a>
                <a href="pages/volunteer"><button class="bgSecondaryColor text-white">Volunteer</button></a>
            </div>
        </div>
        <!-- <img src="assets/img/ben-white-83tkHLPgg2Q-unsplash.png" alt="" class=""> -->
    </div>
</div>
</div>

<section id="about" class="" style="min-height:300px; display:flex; flex-direction:column; justify-content:center;">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="z-index:0;">
            <div class="carousel-inner">
                <div class="carousel-item position-relative">
                    <p class="text-dark text-center">  If the prevalent school curriculums are not sufficient to prepare young people for the future, how then can we transform education beyond the confines of the classrooms?</p>
                </div>                
                <div class="carousel-item position-relative active">
                    <p class="text-center">If quality education is not just a basic human right but also fundamental in closing the gaps created by inequality, and ultimately reducing global poverty, how then do we democratize access to quality education for young people in rural communities across Nigeria?</p>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
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
<section id="programs" class="position-relative bg-white p-md-5 p-4">
    <div class="programs-header d-flex align-items-center justify-content-center">
        <h2 class="py-5 px-4 fs-1 fw-bold text-center" style="font-family:serif;color:var(--primaryColor)">Our Programmes</h2>
    </div>
    <div class="programs-showcase container d-flex flex-column justify-content-center " style="min-height:400px;">
        <div class="row justify-content-end align-items-stretch g-4 programs-row">
            <div class="col-lg-4 bg-white">
                <div class="program">
                    <div class="program-title">
                        <h2 class="fw-bold fs-5">Project Digital Rural</h2>
                    </div>
                    <img src="assets/img/DSC_1505.jpg" alt="" class="w-100 my-3">
                    <div class="program-desc py-3">
                        <p>Equipping out-of-school/unemployed youths in rural communities across Nigeria with in-depth
                            digital skills, and mentorship sufficient to launch a career in different digital
                            fields
                        </p>
                        <a href="pages/digital_rural.php"><button class="programBtn">Read More <i
                                    class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 bg-white ">
                <div class="program">
                    <div class="program-title">
                        <h2 class="fw-bold fs-5">Center For Education and Lifelong skills</h2>
                    </div>
                    <img src="assets/img/IMG-20211222-WA0015.jpg" alt="" class="w-100 my-3">
                    <div class="program-desc py-3">
                        <p>At Bluvard, we establish local innovation hubs in rural or underserved
                            communities across Nigeria. These CELLS serve as points of convergence for young
                            people can collaborate, innovate and build together.
                        </p>
                        <a href="#"><button class="programBtn">Read More <i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 bg-white">
                <div class="program">
                    <div class="program-title">
                        <h2 class="fw-bold fs-5">Rural Heroes</h2>
                    </div>
                    <img src="assets/img/bluvardHeroes.jpg" alt="" class="w-100 my-3" style="object-position:center;">
                    <div class="program-desc py-3">
                        <p>Every month, we bring the spotlight to one young person in a rural
                            community using their skill/ talent to impact the lives of others in their
                            community.
                        </p>
                        <a href="pages/rural_heroes.php"><button class="programBtn">Read More <i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="partners">
    <div class="container">
        <div class="partners-title text-center">
            <h2 class="my-3 fw-bold fs-1" style="font-family:serif;color:var(--primaryColor)">Our partners</h2>
        </div>
        <div id="partners-showcase" class="d-flex justify-content-around g-4 align-items-center py-md-5"
            style="gap:30px ;">
            <!-- <div class="partner-logo"><img src="assets/img/microsoft-logo-2012-present.jpeg" alt=""></div> -->
            <!-- <div class="partner-logo"><img src="assets/img/Tech4Dev-IAmAWomanTechster-Campaign.jpg" alt=""></div> -->
            <div class="partner-logo"><img src="assets/img/logo-global-youth-mobilization.png" alt=""></div>
            <div class="partner-logo"><img src="assets/img/tecxha logo-04.jpg" alt=""></div>
            <!-- <div class="partner-logo"><img src="assets/img/LBS-sustainability-centre-logo_big.png" alt="" width="30"> -->
        </div>
        <!-- <div class="partner-logo"><img src="assets/img/innocentChukwumalogo.png" alt="" width="30"></div> -->
        <!-- <div class="partner-logo"><img src="assets/img/carrignton_youth_fellowship.png" alt="" width="30"></div> -->
        <!-- <div class="partner-logo"><img src="assets/img/young_africa_leadership.png" alt="" width="30"></div> -->
    </div>
    </div>
</section>
<?php include("includes/footer.php") ?>