<?php 
    session_start();
    include('../includes/connect.php');
    // collect data and check against database 
    // steps for validating users 
    // 1. check if userresponse is alrready registered
    // 2. if registered, check if the password matches with the username.
    // 3. after which you can then direct users to the dashboard
    $sql = "SELECT * FROM `admin` WHERE username = ?";
    if($stmt = mysqli_prepare($conn,$sql)){
        // bind parameters
        
    }
    if(isset($_POST['loginBtn'])){
        // check if the username is enrolled
        // first step get the data froom the database
        if($_POST['username']=="admin"){
            
                                                 
        }
        
    }   
    
?>