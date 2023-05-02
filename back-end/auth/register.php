<?php session_start() ; session_regenerate_id(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php require_once("../../front-end/google_fonts.html"); ?>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> register page </title>
</head>

<body>
   <?php
   require_once("../../db/db.php");
   if (isset($_POST['submit'])) {
      $first_name = htmlspecialchars(mysqli_real_escape_string($con, $_POST['first_name']));
      $last_name = htmlspecialchars(mysqli_real_escape_string($con, $_POST['last_name']));
      $email = htmlspecialchars(mysqli_real_escape_string($con, $_POST['email']));
      if (empty($_FILES['profile'])) {
         $new_name = $_POST['old_image'];
      } else {
         $file_name = $_FILES['profile']['name'];
         $file_size = $_FILES['profile']['size'];
         $file_tmp = $_FILES['profile']['tmp_name'];
         $file_error = $_FILES['profile']['error'];
         $file_type = $_FILES['profile']['type'];
         $fileEX = explode(".", $file_name);
         $file_ext = strtolower(end($fileEX));
         $extentions = array("jpg", "png", "jpeg", "web", "gif");
         if (in_array($file_ext, $extentions)) {
            if ($file_size <= 2097152) {
               $new_image_name = uniqid() . ".$file_ext";
               if (empty($file_error)) {
                  $location = "../../images/users/" . $new_image_name;
                  move_uploaded_file($file_tmp, $location);
               } else {
                  ?>
                  <script>
                     sweetAlert("Oops...", " Please select an image file !!", "error");
                     setTimeout(() => {
                        window.location = "../../register.php";
                     }, 2000);
                  </script>
                  <?php
               }
            } else {
               ?>
               <script>
                  sweetAlert("Oops...", " Please select an image less than 2 MB !!", "error");
                  setTimeout(() => {
                     window.location = "../../register.php";
                  }, 2000);
               </script>
               <?php
            }
         } else {
            ?>
            <script>
               sweetAlert("Oops...", "Please select an image type of jpg , jpeg or png !!", "error");
               setTimeout(() => {
                  window.location = "../../register.php";
               }, 2000);
            </script>
            <?php
         }
      }
      ;

      $user_password = htmlspecialchars(mysqli_real_escape_string($con, md5($_POST['password'])));
      $checkPasswordLength = strlen(htmlspecialchars(mysqli_real_escape_string($con, $_POST['password'])));
      $date_time = date("Y/m/d h:i:sa");

      if ($checkPasswordLength < 10 || $checkPasswordLength > 20) {
         ?>
         <script>
            sweetAlert("Oops...", "Please enter your password between 10 ot 20 characters !!", "error");
            setTimeout(() => {
               window.location = "../../register.php";
            }, 2000);
         </script>
         <?php
         exit();
      }
      $sql = "INSERT INTO users(first_name, last_name , email, user_password, profile, date_time)
    VALUES('{$first_name}', '{$last_name}', '{$email}', '{$user_password}', '{$new_image_name}','{$date_time}')";
      $query = mysqli_query($con, $sql);
      //query 
      if ($query) {
         header("location:../../login.php");
      }

   } else {
      ?>
      <script>
         sweetAlert("Oops...", "Pleaser insert your data in the form !!", "error");
         setTimeout(() => {
            window.location = "../../register.php";
         }, 2000);
      </script>
      <?php
      exit();
   }
   ?>

   <?php require_once("../../front-end/cdnfilelinks.html"); ?>
</body>

</html>