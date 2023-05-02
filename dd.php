<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Otp </title>
</head>
<body>
<form id="otp-form" method="post">
  <label for="phone-number">Enter your phone number:</label>
  <input type="text" name="phone-number" id="phone-number" />
  <button type="submit" name="send">Send OTP code</button>
</form>

<script>
  $(document).ready(function() {
    $("#otp-form").submit(function(event) {
      event.preventDefault();
      var phoneNumber = $("#phone-number").val();
      $.ajax({
        url: "send_otp.php",
        method: "POST",
        data: { phone_number: phoneNumber },
        success: function(response) {
          alert(response);
        }
      });
    });
  });
</script>

<?php
 if(isset($_POST['send'])){
  $phoneNumber = $_POST["phone_number"];
  echo $phoneNumber;
  $otpCode = rand(1000, 9999); // generate a random 4-digit OTP code

  // use a third-party API to initiate a phone call to the user's phone number and deliver the OTP code
  $apiUrl = "https://api.nexmo.com/v1/calls.?phone=" . $phoneNumber . "&code=" . $otpCode;
  $response = file_get_contents($apiUrl);

  echo "An OTP code has been sent to your phone number. Please enter the code to verify your phone number.";
 }
?>
</body>
</html>
