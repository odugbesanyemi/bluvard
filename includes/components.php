<!-- we will be defining php components here -->
<!-- mail components, -->
<?php 
// 1. Mail component 
// will send an Html Mail to selected mail

function sendMail ($to,$senderName,$senderMail,$sendertel,$subject,$message){

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// Additional headers
$headers .= 'From: '.$senderName.'<'.$senderMail.'>' . "\r\n";
$htmlContent = "
    <html> 
    <head> 
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>    
        <title>New Message</title> 
    </head> 
    <body style='background-color:ghostwhite; padding:10%;'>
        <div style='background-color:#10294c;padding:5%;color:white;'>
            <h1 style=margin:20px 0; color:white;>Someone just messaged Bluvard Education Initiative</h1> 
            <div style='background-color:white; margin-top:20px; border-radius:10px;padding:5%;'>
                <h5 style='color:#10294c;'>$message</h5>
                <p style='margin-top:20px;color:#10294c;'>sender:$senderMail</p>
                <p style='color:#10294c;'> Sender Telephone: $sendertel</p>
            </div>
        </div>
    </body> 
    </html>
";

if(mail($to,$subject,$htmlContent,$headers)){
    include('../includes/header.php');
    pageHeader('message sent Successfully |Bluvard leadership Initiative','');
    echo "
        <div style='min-height:500px' class='d-flex flex-column justify-content-center align-items-center'>
            <div class='text-center'>
                <img src='../assets/img/messagesent.jpg' width='200'>
                <h2 class='my-3 text-secondary'>Message Sent. Thank you.</h2>
                <h5 class='text-secondary'>We will get Back to you Soonest</h3>
                <a href='$_SERVER[HTTP_REFERER]'> Go back </a>
            </div>
        </div>
    ";
    include('../includes/footer.php');
}else{
    include('../includes/header.php');
    pageHeader('Error Sending Message |Bluvard leadership Initiative', '');
    echo "
        <div style='min-height:500px' class='d-flex flex-column justify-content-center align-items-center'>
            <div class='text-center'>
                <img src='../assets/img/messagefailed.jpg' width='200'>
                <h2 class='my-3 text-secondary'>Message Sending Failed. Try Again.</h2>
                <a href='$_SERVER[HTTP_REFERER]'> Go back </a>
            </div>
        </div>
    ";
    include('../includes/footer.php');
}
}

// get the data from the user for sending message 
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$firstName = $lastName = $name = $email = $tel = $subject = $message = "";

if (isset($_POST['sendMessage'])) {
    $name = test_input($_POST["fullname"]);
    $email = test_input($_POST["email"]);
    $tel = test_input($_POST["tel"]);
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);

    sendMail('hello@bluvard.org', $name, $email,$tel,$subject, $message);
}

if(isset($_POST['volunteerBtn'])){
 $firstName = test_input($_POST['firstName']);
 $lastName = test_input($_POST['lastName']);
 $email = test_input($_POST['email']);
 $tel = test_input($_POST['tel']);
 $message = test_input($_POST['message']);

    sendMail('hello@bluvard.org',$firstName." ". $lastName,$email,$tel,"APPLICATION TO BECOME A VOLUNTEER",$message);
}



?>
