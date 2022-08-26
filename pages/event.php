<?php include("../includes/header.php") ?>

<div class="container text-center d-flex flex-column align-items-center h-100 mt-5">
    <h2 class="fw-bold">Events</h2>
    <div class="breadcrumb mb-0">
        <nav aria-label="breadcrumb" class="w-100">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<div>
    <div class="event-group">
        <div id="events-body" class="py-5 my-5 container">
            <div class="event-nav p-3 bg-white mb-3 border-bottom d-flex flex-row justify-content-between ">
                <div class="d-md-flex justify-content-around d-none">
                    <div class="btn text-danger">All Events</div>
                    <div class="btn">Ongoing</div>
                    <div class="btn">Expired</div>
                    <div class="btn">in View</div>
                </div>
                <div class="dropdown d-block d-md-none">
                    <button class="btn btn-white  dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        All Events
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Ongoing</a></li>
                        <li><a class="dropdown-item" href="#">Expired</a></li>
                        <li><a class="dropdown-item" href="#">In View</a></li>

                    </ul>
                </div>
                <div class="sort">
                    <div class="btn btn-light shadow shadow-sm d-flex align-items-center">
                        <p class="mb-0 pe-3">Filter</p>
                        <ion-icon name="funnel-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col-md-4 border-0">
                    <div class="shadow shadow-sm">
                        <div class="event-img">
                            <img src="../assets/projectdigitalrural.jpg" alt="" class="w-100">
                        </div>
                        <div class="event-body py-4 px-3 bg-white">
                            <h3 class="fs-5 mb-3">Project digital rural 2.0 hangout</h3>
                            <p class="d-flex align-items-center text-danger">
                                <ion-icon name="time-outline" class="me-2"></ion-icon>24th June, 2022
                            </p>
                            <p class="d-flex align-items-center">
                                <ion-icon name="location-outline" class="me-2"></ion-icon>Charaton Hotel & Suites,Lagos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../includes/footer.php") ?>