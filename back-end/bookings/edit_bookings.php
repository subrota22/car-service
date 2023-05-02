<?php session_start() ; session_regenerate_id(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php require_once("../../front-end/google_fonts.html"); ?>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> bookings update page </title>
</head>
<body>
   <?php
   require_once("../../db/db.php");
   if (isset($_REQUEST['save_info'])) {
      $name = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['name']));
      $phone_number = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['phone_number']));
      $service_request = htmlspecialchars(mysqli_real_escape_string($con,$_REQUEST['service_request']));
      $date = strlen(htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['date'])));
      $service_message =htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['service_message']));
      $edit_id = htmlspecialchars(mysqli_real_escape_string($con, $_REQUEST['edit_id']));

      $sql = "UPDATE bookings SET name='{$name}', phone_number='{$phone_number}', service_request='{$service_request}', service_message='{$service_message}' WHERE bookings_id='{$edit_id}'";
      $query = mysqli_query($con, $sql);
      //query 
      if ($query) {
        ?>
        <script>
           sweetAlert("Updated", "Booking information updated successfully !!", "success");
           setTimeout(() => {
              window.location = "../../index.php";
           }, 2000);
        </script>
        <?php
      }

   } else {
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