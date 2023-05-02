<!DOCTYPE html>
<html lang="en">
<!-- Bootsrap cdn links -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"
    integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<head>
    <style>
        body {
            margin-top: 20px;
        }

        .avatar {
            width: 200px;
            height: 200px;
        }

        .user_profile {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            border: 2px solid lime;
        }

        .user_profile:hover {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            box-shadow: 2px 3px 2px 3px yellow;
            transition-duration: 1s;
        }

        .fa-trash:hover {
            cursor: pointer;
        }

        #body {
            background-image: url("https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/f6c2dd49664051.58bb23d5ebe9a.gif");
            background-size: cover;
            background-attachment: fixed;
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <link rel="shortcut icon" href="../../images/carServeLogo.png" type="image/x-icon" />
</head>

<body id="body">
    <form class="form-horizontal" method="post" action="./update_user.php" enctype="multipart/form-data">
        <?php
        if (isset($_REQUEST['edit_id'])) {
            $edit_id = $_REQUEST['edit_id'];
            require_once("../../db/db.php");
            $sql = "SELECT user_id, first_name, last_name, email, profile, user_password, date_time FROM users WHERE user_id='{$edit_id}'";
            $query = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($query);
            ?>
            <?php
            if ($row) {
                ?>

                <div class="container bootstrap snippets bootdey">
                    <h1 class="text-primary">Edit User Profile</h1>
                    <hr>
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="../../images/users/<?php echo $row['profile']; ?>"
                                    class="avatar img-circle img-thumbnail" alt="avatar">
                                <h6>Upload a different photo...</h6>

                                <input type="file" class="form-control" name="profile" value="<?php echo $row['profile'] ?>" />
                            </div>
                        </div>

                        <!-- edit form column -->
                        <div class="col-md-9 personal-info">

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Edit your single user information by using this form.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <h3>User info</h3>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">First name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="first_name"
                                        value="<?php echo $row['first_name']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Last name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="last_name"
                                        value="<?php echo $row['last_name']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="user_password"
                                        value="<?php echo $row['user_password']; ?>" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Date:</label>
                                <div class="date col-lg-8 my-" id="date1" data-target-input="nearest">
                                    <input type="text" name="date_time" class="form-control my-2 border-0 datetimepicker-input"
                                        value="<?php echo $row['date_time']; ?>" placeholder="Joining Date" data-target="#date1"
                                        data-toggle="datetimepicker">
                                </div>
                      
                            <div class="form-group">
                                <div class="col-lg-8">
                                <input type="submit" name="save_user_info" value="Save info"
                                    class="btn btn-primary my-2 w-50 mx-auto" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="edit_id" value="<?php echo $row['user_id']; ?>"
                                    class="btn btn-primary my-2 w-50 mx-auto" />
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </form>
        </body>

        </html>
        <?php
            } else {
                ?>
        <script>
            swal("Opps!", "Your date is not deleted", "error")

            setTimeout(() => {
                window.location = "../../users_info.php";
            }, 2000);
        </script>
        <?php
            }

        }
        ?>


<?php require_once("../../front-end/cdnfilelinks.html"); ?>

</body>

</html>