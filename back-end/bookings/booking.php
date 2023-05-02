<?php session_start();
session_regenerate_id(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php require_once("../../front-end/google_fonts.html"); ?>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> booking page </title>
</head>

<body>
   <?php
   require_once("../../db/db.php");
   if (isset($_REQUEST['booking'])) {
      $name = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['name']));
      $phone_number = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['phone_number']));
      $service_request = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['service_request']));
      $date = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['date']));
      $service_message = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['service_message']));
      //sql
      $sql = "INSERT INTO bookings(name, phone_number, service_request, date, service_message)
      VALUES('{$name}', '{$phone_number}', '{$service_request}', '{$date}', '{$service_message}')";
      //query 
      $query = mysqli_query($con, $sql);
      if ($query) {
         ?>
         <script>
            sweetAlert("Success", "Congrasulation you are successfully booking the service!!", "success");
            setTimeout(() => {
               <?php
               header("location:../../booking.php?booked");
               ?>
            }, 2000);
         </script>
         <?php
         exit();
      }

   } else {
      ?>
      <script>
         sweetAlert("Oops...", "Tray agian to booking !!", "error");
         setTimeout(() => {
            window.location = "../../booking.php";
         }, 2000);
      </script>
      <?php
      exit();
   }
   ?>
   <?php require_once("../../front-end/cdnfilelinks.html"); ?>
</body>

</html>