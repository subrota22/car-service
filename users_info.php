<!DOCTYPE html>
<html lang="en">
<style>
    .user_profile{
        height: 50px;
        width: 50px;
        border-radius: 50%;
        border: 2px solid lime;
    }
    .user_profile:hover{
        height: 50px;
        width: 50px;
        border-radius: 50%;
        box-shadow: 2px 3px 2px 3px yellow;  
        transition-duration: 1s;
    }
    .fa-trash:hover{cursor:pointer;}
</style>
<head>
    <meta charset="utf-8">
    <title>Users information</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- cnd links for font familiy -->
    <?php require_once("./front-end/google_fonts.html"); ?>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <?php require_once("./front-end/navbar.php"); ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Users information</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">USERS</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <?php require_once("./back-end/users/users.php"); ?>
    <!-- users information end -->

    <!-- Footer Start -->
    <?php require_once("./front-end/footer.html"); ?>
    <!-- Footer End -->
<!-- Chat app start -->
<?php require_once("./front-end/chat_app.html"); ?>
      <!-- Chat app end -->
    <!-- cdn file links -->
    <?php require_once("./front-end/cdnfilelinks.html") ?>

</body>

</html>