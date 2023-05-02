<?php session_start() ; session_regenerate_id(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php require_once("../../front-end/google_fonts.html"); ?>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> user update page </title>
</head>
<body>
   <?php
   require_once("../../db/db.php");
   if (isset($_REQUEST['save_info'])) {
      $first_name = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['first_name']));
      $last_name = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['last_name']));
      $email = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['email']));
    
        $file_name = $_FILES['profile']['name'];
        $file_size = $_FILES['profile']['size'];
        $file_tmp = $_FILES['profile']['tmp_name'];
        $file_error = $_FILES['profile']['error'];
        $file_type = $_FILES['profile']['type'];
        $fileEX = explode(".", $file_name);
        $file_ext = strtolower(end($fileEX));
        $extentions = array("jpg", "png", "jpeg", "web", "gif");
        $new_image_name = uniqid() . ".$file_ext";
      
        if (in_array($file_ext, $extentions) == false) {
         ?>
         <script>
            sweetAlert("Oops...", "Please select an image type of jpg , jpeg or png !!", "error");
            setTimeout(() => {
               window.location = "../../index.php";
            }, 2000);
         </script>
         <?php
         exit() ;
        }
           if ($file_size > 2097152) {  
            ?>
            <script>
               sweetAlert("Oops...", " Please select an image less than 2 MB !!", "error");
               setTimeout(() => {
                  window.location = "../../index.php";
               }, 2000);
            </script>
            <?php
            exit() ;
           }  
              if (!empty($file_error)) {
               ?>
               <script>
                  sweetAlert("Oops...", " You have a file error try agian!!", "error");
                  setTimeout(() => {
                     window.location = "../../index.php";
                  }, 2000);
               </script>
               <?php
               exit() ;
              }
                 $location = "../../images/users/".$new_image_name;
                 move_uploaded_file($file_tmp, $location);
              } else {
             
              }
      
     
      $user_password = htmlspecialchars(mysqli_real_escape_string($con, md5($_REQUEST['user_password'])));
      $checkPasswordLength = strlen(htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['user_password'])));
      $date_time =htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['date_time']));
      $edit_id = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['edit_id']));

      $sql = "UPDATE users SET first_name='{$first_name}', last_name='{$last_name}', email='{$email}', user_password='{$user_password}', profile='{$new_image_name}', date_time='{$date_time}' WHERE user_id='{$edit_id}'";
      $query = mysqli_query($con, $sql);
      //query 
      if ($query) {
        ?>
        <script>
           sweetAlert("Updated", "User information updated successfully !!", "success");
           setTimeout(() => {
              window.location = "../../index.php";
           }, 2000);
        </script>
        <?php
      }
 else {
      ?>
      <script>
         sweetAlert("Oops...", "Pleaser insert your data in the form !!", "error");
         setTimeout(() => {
            window.location = "../../index.php";
         }, 2000);
      </script>
      <?php
      exit();
   }
   ?>

   <?php require_once("../../front-end/cdnfilelinks.html"); ?>
</body>

</html>