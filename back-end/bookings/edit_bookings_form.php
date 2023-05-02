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
<link rel="shortcut icon" href="../../images/carServeLogo.png" type="image/x-icon" />

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
    <title>Edit bookings</title>
    <link rel="shortcut icon" href="../../images/carServeLogo.png" type="image/x-icon" />
</head>

<body id="body">
    <form class="form-horizontal" method="post" action="./edit_bookings.php" enctype="multipart/form-data">
        <?php
        if (isset($_REQUEST['edit_id'])) {
            $edit_id = $_REQUEST['edit_id'];
            require_once("../../db/db.php");
            $sql = "SELECT * FROM bookings WHERE bookings_id='{$edit_id}'";
            $query = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($query);
            ?>
            <?php
            if ($row) {
                ?>

                <div class="container bootstrap snippets bootdey">
                    <h1 class="text-primary">Edit bookings information</h1>
                    <hr>
                    <div class="row">

                        <!-- edit form column -->
                        <div class="col-md-9 personal-info">

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Edit booking info by using this form.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <h3>Bookings info</h3>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Phone number:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Service request:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="service_request"
                                        value="<?php echo $row['service_request']; ?>" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Service message:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="service_message"
                                        value="<?php echo $row['service_message']; ?>" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Date:</label>
                                <div class="date col-lg-8 my-" id="date1" data-target-input="nearest">
                                    <input type="text" name="date" class="form-control my-2 border-0 datetimepicker-input"
                                        value="<?php echo $row['date']; ?>" placeholder="Service Order Date"
                                        data-target="#date1" data-toggle="datetimepicker">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="edit_id" value="<?php echo $row['bookings_id']; ?>"
                                    class="btn btn-primary my-2 w-50 mx-auto" />
                            </div>

                            <div class="form-group">
                                <div class="date col-lg-8 my-" id="date1" data-target-input="nearest">
                                    <input type="submit" name="save_info" value="Save info"
                                        class="btn btn-primary my-2 w-50 mx-auto" />
                                </div>
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
<script>
        window.__lc = window.__lc || {};
        window.__lc.license = 15389142;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
      </script>
      <noscript><a href="https://www.livechat.com/chat-with/15389142/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
      <!-- End of LiveChat code -->
      
      
</body>

</html>