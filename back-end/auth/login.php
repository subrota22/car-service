<?php session_start();
session_regenerate_id(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php require_once("../../front-end/google_fonts.html"); ?>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Login page </title>
</head>

<body>
   <?php
   require_once("../../db/db.php");
   if (isset($_REQUEST['login'])) {
      $email = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['email']));
      $user_password = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['password']));
      $scurePassword = md5($user_password);
      $checkPasswordLength = strlen($user_password);
      $date_time = date("Y/m/d h:i:sa");

      if ($checkPasswordLength < 10 || $checkPasswordLength > 20) {
         ?>
         <script>
            sweetAlert("Oops...", "Please enter your password between 10 ot 20 characters !!", "error");
            setTimeout(() => {
               window.location = "../../login.php";
            }, 2000);
         </script>
         <?php
         exit();
      }

      $sql = "SELECT email , user_password FROM users WHERE email = '{$email}' AND user_password = '{$scurePassword}'";
      //query 
      $query = mysqli_query($con, $sql);
      $row_count = mysqli_num_rows($query);
      if ($row_count > 0) {
         $row = mysqli_fetch_assoc($query);
         $_SESSION['email'] = $row['email'];
         header("location:../../index.php");
      } else {
         ?>
         <script>
            sweetAlert("Oops...", "Please insert your correct information !!", "error");
            setTimeout(() => {
               window.location = "../../login.php";
            }, 2000);
         </script>
         <?php
         exit();
      }

   } else {
      ?>
      <script>
         sweetAlert("Oops...", "Tray agian to login !!", "error");
         setTimeout(() => {
            window.location = "../../login.php";
         }, 2000);
      </script>
      <?php
      exit();
   }
   ?>
   <?php require_once("../../front-end/cdnfilelinks.html"); ?>
</body>
</html>