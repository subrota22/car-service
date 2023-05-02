<!DOCTYPE html>
<html lang="en">

<head>
    <!-- bootstrap css cdn  link  -->

       <!-- Favicon -->
   <link href="../img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="../lib/animate/animate.min.css" rel="stylesheet">
<link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="../css/bootstrap.min.css" rel="stylesheet">


    <!-- register css link  -->
    <link rel="stylesheet" href="../css/register.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body class="registerBody">
        <!-- navbar   -->
        <?php require_once("../front-end/navbar.php"); ?>
    <form action="" method="post" enctype="multipart/form-data" class="form was-validated w-50 p-5 mx-auto  text-white">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-input form-control" placeholder="Enter your name"
                required />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-input form-control" placeholder="Enter your email"
                required />
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="number" name="phoneNumber" id="phoneNumber" class="form-input form-control"
                placeholder="Enter your phoneNumber" required />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-input form-control"
                placeholder="Enter your password" required />
        </div>
        <div class="form-group">
            <label for="email">Country</label>
            <select name="country" id="country" class="form-input form-control">
                <option selected disabled> Choice your country name </option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="India">India</option>
                <option value="UK">UK</option>
                <option value="USA">USA</option>
                <option value="Paris">Paris</option>
            </select>
        </div>
        <div>
            <small>Have an account ? <span> <a href="./front-end/login.html" target="_blank"
                        rel="noopener noreferrer">login</a> </span> </small>
        </div>
        <input type="submit" value="Register" name="submit" class="form-input w-100 mt-3 btn btn-outline-primary" />
    </form>
        
    <!-- footer -->
        <?php require_once("../front-end/footer.html"); ?>
        
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>
</html>