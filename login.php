<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Log in</title>
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
        <h1 class="display-3 text-white mb-3 animated slideInDown">Log in now </h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Log in</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <!-- form start -->
  <section>
    <div class="container py-5 h-100 rounded">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card">
            <div class="d-flex flex-row g-0">
              <div class="col-md-6  col-lg-7 d-flex  d-none d-md-block">
                <img src="https://i.ibb.co/L6CqTgg/login.gif" alt="login form" class="img-fluid d-sm-none d-lg-block"
                  style="border-radius: 1rem 0 0 1rem; height:100vh; width:100vw;" />
              </div>
              <div class="align-items-center">
                <div class="card-bod d-flex flex-row p-4 p-lg-5 text-black">
                  <form method="post" class="was-validated" action="./back-end/auth/login.php">
                    <div class="form-outline mb-4">
                      <input type="email" name="email" id="email" class="form-control form-control-lg" required />
                      <label class="form-label" for="email">Email address</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="password" class="form-control form-control-lg"
                        required />
                      <label class="form-label" for="password">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-outline-success w-100 btn-lg btn-block"  name="login" type="submit">Login</button>
                    </div>
                    <span> <a href="./back-end/auth/re-password/email_form.php" target="_blank"
                        rel="noopener noreferrer">forgot password ? </a></span>

                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account?
                      <a href="./register.php" class="text-success">Register here</a>
                    </p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- form end -->
  <!-- Chat app start -->
  <?php require_once("./front-end/chat_app.html"); ?>
      <!-- Chat app end -->
  <!-- Footer Start -->
  <?php require_once("./front-end/footer.html"); ?>
  <!-- Footer End -->

  <!-- cdn file links -->
  <?php require_once("./front-end/cdnfilelinks.html"); ?>
</body>

</html>