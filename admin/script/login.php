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
        mysqli_stmt_bind_param($stmt,'s',$param_username);
    }
    if(isset($_POST['loginBtn'])){
        // check if the username is enrolled
        // first step get the data froom the database
        if($_POST['username']=="admin"){
            // means an admin is trying to login onto the system 
            // hence check if admin password tallies with the 
            $param_username = 'admin';
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            // now check the passwords if they match by first getting the password 
            while($row = mysqli_fetch_array($result)){
                $dbPassword = $row['password'];
            }
            if ($dbPassword == $_POST['password']){
                // means the admin password is correct. continue to login and set the session logged_in variable to true
                $_SESSION['logged_in']= true;
                header('location:../index.php');
            }else{
                echo'you have provided the wrong password';
            }
        }else{
            // loggin for other users
            echo 'You are a regular user';
        }
        
    }   
    
?>