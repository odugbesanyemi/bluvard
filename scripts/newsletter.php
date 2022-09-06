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
        $sql = "INSERT INTO `newslettermembers`(`email`) VALUES (?)";
        if ($stmt = mysqli_prepare($conn,$sql)){
            // bind data
            mysqli_stmt_bind_param($stmt,"s", $param_email);
            $param_email = $_POST['newsletteremail'];
            mysqli_stmt_execute($stmt);
            // header("location: $_SERVER[HTTP_REFERER]");
            $message = "Congratulations";
        }
        // return back to page referrer
    }

}

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
    <link rel="stylesheet" href="../css/pages.css">
    <link rel="shortcut icon" href="../assets/logos/BLUVARD_FAVICON.svg" type="image/x-icon">
    <link rel="stylesheet" href="../slick-1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="../slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="py-5">
        <div class="container">
            <div class="row container">
                <div class="col-md-8  m-auto" style="background-color:var(--primaryColor)">
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