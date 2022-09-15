<?php include("../includes/header.php") ?>

<div class="container text-center">
    <h2 class="fw-bold sublimaBold">Volunteer</h2>
    <div class="breadcrumb mb-0">
        <nav aria-label="breadcrumb" class="w-100">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Volunteer</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<section>
    <div class="container">
    
        <div class="d-flex flex-column flex-md-row align-items-stretch">
            <div class="volunteer-img">
                <img src="/assets/img/volunteer.jpg" alt="" class="w-100 h-100 rounded rounded-3">
            </div>
            <div class="volunteer-data w-100 mt-md-0 p-2 py-4 p-md-4 theme1">
                <div class="form-head mb-5">
                    <h2 class="fw-bold fs-1 sublimaBold secondaryColor">Lets Meet you</h2>
                    <p class="textmute">Do you want to join our team of global changers? fill the form to begin today?</p>
                </div>                
                <form action="#" class="text-start w-100 ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="" id="name" placeholder="First Name" class="border border-1 border-primary p-3 w-100 mb-3 rounded ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="" id="name" placeholder="Last Name" class="border border-1 border-primary p-3 w-100 mb-3 rounded ">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="" id="name" placeholder="Email Address" class="border border-1 border-primary p-3 w-100 mb-3 rounded ">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="" id="name" placeholder="Mobile Number" class="border border-1 border-primary p-3 w-100 mb-3 rounded ">
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="" id="" cols="20" rows="5" placeholder="How can you help? "class="p-3 w-100 border border-1 border-primary rounded "></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="border-0 p-3 mb-3 w-100 rounded bgSecondaryColor text-white"><i class="fa fa-check " aria-hidden="true"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include("../includes/footer.php") ?>