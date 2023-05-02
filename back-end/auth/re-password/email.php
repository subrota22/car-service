<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../../../front-end/google_fonts.html") ;?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login page </title>
</head>
<body>
<?php
session_start() ;
session_regenerate_id() ;
require("../../../db/db.php") ;
if(isset($_POST['sendOtp'])) {
    $email = htmlentities(mysqli_real_escape_string($con , $_POST['email']));
    $_SESSION['updateEmail'] = $email ;
    $select = "SELECT email FROM users WHERE email='$email'" ;
    $query = mysqli_query($con , $select) ;
    $rowCount  = mysqli_num_rows($query) ;
    if($rowCount == true) {
    $otpCode = rand(124445 , 124578) ;
    $_SESSION['otpCode']  = $otpCode ;
    header("location:otpForm.php");
    }else{
        ?>
        <script>
           sweetAlert("Oops...", "Incorrect email adderss !!", "error");
          setTimeout(() => {
           window.location = "./email_form.php" ;
          }, 2000);
        </script>
           <?php
        exit() ;
    }
}

?>
</body>
</html>