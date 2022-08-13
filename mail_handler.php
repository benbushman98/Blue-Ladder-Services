<?php 
if(isset($_POST['submit'])){
    $to = "daniel@chooseblueladder.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $number = $_POST['number'];
    $subject = "Website Submission";
    $subject2 = "Copy of your Contact Request";
    $message = $first_name . " " . $last_name . " | " . $number . " | " . " wrote the following message:" . "\n\n" . $_POST['message'];
    $message2 = "Thank you for submitting a contact request. We will contact you shortly." . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Blue Ladder Services</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">
</head>

<body>
    <main>
        <div class="container col-12 d-flex justify-content-center" id="blueladderlogo">
            <img class="mt-4" id="Logo" src="./assets/img/Blue-Ladder-Logo.png" alt="Blue Ladder Logo">
        </div>

        <div class="container col-12 d-flex justify-content-center" id="navbarlist">
            <ul id="navbarlist" class="row">
                <li class="m-3"><a href="./index.html">Home</a></li>
            </ul>
        </div>

        <p id="requestsubmit" class="text-dark">Thank you for submitting your request. We will contact you soon.</p>
</body>
</html>