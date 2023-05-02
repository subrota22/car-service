<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="otp-verification-form">
  <label for="otp-code">Enter the OTP code:</label>
  <input type="text" name="otp-code" id="otp-code" />
  <button type="submit">Verify OTP code</button>
</form>

<script>
  $(document).ready(function() {
    $("#otp-verification-form").submit(function(event) {
      event.preventDefault();
      var otpCode = $("#otp-code").val();
      $.ajax({
        url: "verify_otp.php",
        method: "POST",
        data: { otp_code: otpCode },
        success: function(response) {
          alert(response);
        }
      });
    });
  });
</script>

<?php
  $enteredOtpCode = $_POST["otp_code"];
  $generatedOtpCode = $_SESSION["otp_code"]; // retrieve the OTP code generated earlier from the session variable

  if ($enteredOtpCode == $generatedOtpCode) {
    echo "Your phone number has been verified successfully.";
  } else {
    echo "Invalid OTP code. Please try again.";
  }
?>


</body>
</html>
