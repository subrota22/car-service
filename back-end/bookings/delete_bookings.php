<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootsrap cdn links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!--Sweet alert-->
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete bookings</title>
</head>

<body>
    <?php
     require_once("../../db/db.php");
    if (isset($_REQUEST['delete_id'])) {
        $delete_id = $_REQUEST['delete_id'];
        $sql = "DELETE FROM bookings WHERE bookings_id='{$delete_id}'";
        $query = mysqli_query($con, $sql);
        ?>
        <?php
        if ($query) {
            ?>
            <script>
                swal("Good job!", "Your date is successfully deleted", "success")

                setTimeout(() => {
                    window.location = "../../bookings_info.php" ; 
                }, 2000);
            </script>
            <?php
        } else {
            ?>
            <script>
               swal("Opps!", "Your date is not deleted", "error")

                setTimeout(() => {
                    window.location = "../../bookings_info.php" ; 
                }, 2000);
            </script>
            <?php
        }

    }
    ?>




</body>

</html>