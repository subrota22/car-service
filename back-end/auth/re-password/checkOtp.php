<?php
session_start() ;
session_regenerate_id() ;
require("../../../db/db.php") ;
if(isset($_POST['otpSubmit'])) {
    $compareOtp = htmlentities(mysqli_real_escape_string($con , $_POST['otpCode']));
    $checkOtp =  $_SESSION['otpCode']  ;
    if($compareOtp==$checkOtp){
        header("location:recover.html");
     }else{
        echo "<h2 style='color:red;'>Invalid otp enter valid otp to proceed . </h2>" ;
    }
}
?>