<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../../../front-end/google_fonts.html"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> recover </title>
</head>

<body>
    <?php
    session_start();
    session_regenerate_id();
    require("../../../db/db.php");
    if (isset($_POST['updatepa'])) {
        $newPassword = htmlentities(mysqli_real_escape_string($con, $_POST['password']));
        $checkLength = strlen($newPassword);
        if ($checkLength < 10  OR $checkLength > 20) {
            ?>
            <script>
                sweetAlert("Oops...", " Enter your password between 10 to 20 character !!", "error");
                setTimeout(() => {
                    window.location = "./recover.html";
                }, 2000);
            </script>
            <?php
            exit();
        }
  
        $scurePassword = md5($newPassword);
        $confirmPassword = htmlentities(mysqli_real_escape_string($con, $_POST['cpassword']));
        if ($newPassword == $confirmPassword) {
            $updatePassword = "UPDATE users SET user_password ='$scurePassword'  WHERE email ='{$_SESSION['updateEmail']}'";
            $query = mysqli_query($con, $updatePassword);
            if ($query == true) {
                header("location:../../../login.php");
            } else {
                ?>
                <script>
                    sweetAlert("Oops...", "Failed to update password tray again!!", "error");
                    setTimeout(() => {
                        window.location = "./recover.html";
                    }, 2000);
                </script>
                <?php
                exit();
            }
        } else {
            ?>
            <script>
                sweetAlert("Oops...", " Password mismatched tray again !!", "error");
                setTimeout(() => {
                    window.location = "./recover.html";
                }, 2000);
            </script>
            <?php
            exit();
        }

    }

    ?>
</body>

</html>