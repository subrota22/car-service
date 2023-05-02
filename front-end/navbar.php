<?php session_start();
session_regenerate_id(); ?>
<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>123 Street, New York, USA</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+012 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>


                <?php
                require_once("./db/db.php") ;
                if (isset($_SESSION['email'])) {
                    $sql = "SELECT user_id, first_name, last_name, profile FROM users WHERE email='{$_SESSION['email']}'";
                    $query = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($query);
  
                        ?>
                        <a class="btn btn-sm-rounded  text-primary me-0"target="_blank" rel="noopener noreferrer"
                            title=" <?php $row['first_name'] . "  " . $row['last_name'] ?>"
                            href="./back-end/users/edit_user_form.php?edit_id=<?php echo $row['user_id']; ?>">
                            <img src="./images/users/<?php echo $row['profile']; ?>" alt="logo"
                                style="height:50px; widht:50px; border:2px solid lime;" class="rounded-circle ms-4" />
                        </a>
                    <?php 
                   
                } ?>

            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"> <img src="./images/carServeLogo.png" alt="logo"
                style="height:85px; widht:110px;" /> CarServ</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link">Home</a>

            <?php
            if (!isset($_SESSION['email'])) {
                echo '<a href="./register.php" class="nav-item nav-link">Register</a>
                <a href="./login.php" class="nav-item nav-link">Login</a>';
            }

            ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="booking.php" class="dropdown-item">Booking</a>
                    <a href="team.php" class="dropdown-item">Technicians</a>
                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                    <a href="about.php" class="dropdown-item">About</a>
                    <a href="service.php" class="dropdown-item">Services</a>
                    <?php if (isset($_SESSION['email']) && (isset($_SESSION['email']) == "subrota45278@gmail.com")) {
                        echo '<a href="./users_info.php"  class="dropdown-item">Users</a>';
                    } ?>
                    <a href="404.php" class="dropdown-item">404 Page</a>
                </div>
            </div>
         
            <?php
            if (isset($_SESSION['email']) AND isset($_SESSION['email']) == 'subrota45278@gmail.com' ) {
               ?>
                  <a href="./bookings_info.php" class="nav-item nav-link">Total bookings</a>
               <?php
               
            }
            ?>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
            <?php
            if (isset($_SESSION['email'])) {
                echo '  <a href="./back-end/auth/logout.php" class="nav-item nav-link btn btn-danger text-white px-3">Log out <i class="fa-solid fa-right-from-bracket mx-2"></i></a>';
            }
            ?>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote <i
                class="fa fa-arrow-right"></i></a>
    </div>
</nav>
<!-- Navbar End -->