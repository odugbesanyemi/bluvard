<!-- this is the login page for all admin users 
anyone trying to login to change data will be required to have a login data 
-->
<!-- session check to see if user is already logged in -->
<?php 
session_start();
include('includes/connect.php');
if (isset($_SESSION['logged_in'])){
    // redirect to index.php
    header('location:index.php');
} else{
}

?>
<?php include('includes/adminheader.php') ?>

<div class="px-5 py-5 p-lg-0">
    <div class="d-flex justify-content-center">
        <div
            class="col-12 col-md-9 col-lg-7 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                    <div class="text-center mb-12">
                        <!-- <a class="d-inline-block" href="#">
                                <img src="https://preview.webpixels.io/web/img/logos/clever-primary-sm.svg" class="h-12" alt="...">

                            </a> -->
                        <span class="d-inline-block d-lg-block h1 mb-lg-6 me-3">👋</span>
                        <h1 class="ls-tight font-bolder h2">
                            Welcome back!
                        </h1>
                        <p class="mt-2">Let's build someting great</p>
                    </div>
                    <form method="post" action="script/login.php">
                        <div class="mb-5">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username"
                                required>
                        </div>
                        <div class="mb-5">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                autocomplete="current-password" name="password" required>
                        </div>
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="check_example" id="check_example">
                                <label class="form-check-label" for="check_example">
                                    Keep me logged in
                                </label>
                            </div>
                        </div>
                        <div>
                            <button href="#" class="btn btn-primary w-full" type="submit" name="loginBtn">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/adminfooter.php') ?>