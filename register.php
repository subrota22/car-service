<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register page</title>
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
    <?php require_once("./front-end/navbar.php") ; ?>
    <!-- Navbar End -->
      <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
      <div class="container-fluid page-header-inner py-5">
          <div class="container text-center">
              <h1 class="display-3 text-white mb-3 animated slideInDown">Register now </h1>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center text-uppercase">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Pages</a></li>
                      <li class="breadcrumb-item text-white active" aria-current="page">Register</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
 <!-- Page Header End -->
      <!-- form start -->
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
       
            <form method="post" class="was-validated" action="./back-end/auth/register.php" enctype="multipart/form-data">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="first_name" id="first_name" class="form-control" required/>
                    <label class="form-label" for="first_name">First name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="last_name" id="last_name" class="form-control" required/>
                    <label class="form-label" for="last_name">Last name</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control" required/>
                <label class="form-label" for="email">Email address</label>
              </div>

                    <!-- Profile input -->
                    <div class="form-outline mb-4">
                <input type="file" name="profile" id="profile" class="form-control" required/>
                <label class="form-label" for="profile">profile</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" min="10" max="20" id="password" class="form-control" required/>
                <label class="form-label" for="password">Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="labelCheckInput" checked  required/>
                <label class="form-check-label" for="labelCheckInput">
                Agree with this terms and conditions
                </label>
              </div>
           <div>
            <p> <span>Alereday have an account</span> <a href="./login.php" class="text-success">Login here</a> </p>
           </div>
              <!-- Submit button -->
              <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
              Register
              </button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://i.ibb.co/1XR1nbr/car.gif" class="rounded-4 shadow-4 h-100 w-100"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
      <!-- form end --> 

      <!-- Chat app start -->
    <?php require_once("./front-end/chat_app.html"); ?>
      <!-- Chat app end -->
      
    <!-- Footer Start -->
    <?php require_once("./front-end/footer.html") ;?>
    <!-- Footer End -->

<!-- cdn file links -->
<?php  require_once("./front-end/cdnfilelinks.html"); ?>
</body>
</html>