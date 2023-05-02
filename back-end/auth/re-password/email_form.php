<!DOCTYPE html>
<html lang="en">
<style>
  .head-group {
    background-color: rgba(145, 8, 145, 0.4);
    text-align: center;
    font-size: large;
    height: 60px;
    color: rgb(10, 238, 29);
    padding-top: 12px;
  }

  .form {
    background-color: rgba(24, 6, 126, 0.4);
    padding: 42px;
    color: white;
  }

  .body {
    background-image: url("https://i.ibb.co/ph8FWkw/otp.gif");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
</style>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send otp </title>
  <link rel="shortcut icon" href="../../../images/carServeLogo.png" type="image/x-icon" />
</head>

<body class="body">
  <br> <br> <br> <br>

  <form action="email.php" method="post" class="was-validated w-25 m-auto form rounded">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" placeholder="Enter your valid email" class="form-control" required />
      <div class="invalid-feedback"> Enter your valid email as soon as possiable </div>
      <div class="valid-feedback">This will be valid if you entered valid .</div>
    </div>
    <div class="form-group" style="display: flex-end;">
      <input type="checkbox" name="check" id="check" class="p-2 m-3 form-check-input" required />
      &nbsp; &nbsp; &nbsp; &nbsp;
      <label for="check" style="margin-top: 8px;" class="form-check-label">Check the box </label>
    </div>

    <br><br>
    <div class="form-group">
      <input type="submit" value="Send otp" name="sendOtp" class="btn btn-info btn-block" />
    </div>
  </form>
</body>

</html>