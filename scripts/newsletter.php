<?php 
include('dbConnect.php');
$error = ""; 
$message = "";
// first we will check if user already has an email address with the 
 $sql = "SELECT * FROM newslettermembers WHERE email = ? ";
 if($stmt = mysqli_prepare($conn,$sql)){
    mysqli_stmt_bind_param($stmt,"s",$param_email);
    $param_email = $_POST['newsletteremail'];
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_fetch_assoc($result)>0){
        // echo "results already exist";
        $error .= "Email already registered";
    }else{
        // results doesn't exist so we can move further to save user details
        //we want  to connect to newslettermembers and save details that users leave to the website
        $sql = "INSERT INTO `newslettermembers`(`fullName`,`email`) VALUES (?,?)";
        if ($stmt = mysqli_prepare($conn,$sql)){
            // bind data
            mysqli_stmt_bind_param($stmt,"ss",$param_fullname, $param_email);
            $param_fullname = $_POST['newslettername'];
            $param_email = $_POST['newsletteremail'];
            mysqli_stmt_execute($stmt);
            // header("location: $_SERVER[HTTP_REFERER]");
            $message = "Congratulations";
        }
        // return back to page referrer
    }

}
include('../includes/header.php');

?>

<div class="container text-center">
    <h2 class="fw-bold">Newsletter</h2>
    <p>Don't be left out on our programs and events. Get updates early </p>
    <div class="breadcrumb mb-0">
        <nav aria-label="breadcrumb" class="text-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row container">
            <div class="col-md-6 bg-white text-center p-5">
                <img src="../assets/envelope.jpg" alt="" class="w-50">
                <p class="fw-bold fs-3 text-primary text-center">NEWSLETTER</p>
            </div>
            <div class="col-md-6 bg-dark">
                <div class="p-5 text-light">
                    <h3 class="fw-bold fs-1" style="color:yellow">Thank You</h3>
                    <p class="fs-4 lh-0 fw-bold">For subscribing to our Newsletter</p>
                    <p>Bluvard Education initiative newsletter is the best way to find out about our current
                        programs
                        and events</p>
                    <p>once or twice a month, you will receive a newsletter with information about Bluvard's
                        Programs,
                        and much more
                        events
                    </p>
                    <p class="small"><small>we're happy to have you on board!</small> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../includes/footer.php');
?>