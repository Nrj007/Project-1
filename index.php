<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="logi.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
$usernameErrorMessage = "";
$passwordErrorMessage = "";
require("./includes/login.php");
?>
<div class="overlay">
</div>
<div class="container">
  <div class="left">

    <img src="9.png" alt="Image 2" id="image2">
    <video autoplay loop muted src="b8bd4e4273cceae2889d9d259b04f732.mp4"></video>
    <img src="11.png" alt="Image 3" id="image3">
    <img src=" 10.png" alt="Image 1" id="image1">
    <img src="12.png" alt="Image 4" id="image4">
    <img src="13.png" alt="Image 5" id="image5">
    <img src="14.png" alt="Image 6" id="image6">
    <img src="15.png" alt="Image 7" id="image7">
  </div>
  <div class="right">


    <img src="7.png" alt="Image 5" id="image5">
    <img src="8.png" alt="Image 6" id="image6">
    <img src="9.png" alt="Image 1" id="image1">
    <img src="10.png" alt="Image 2" id="image2">
    <img src="11.png" alt="Image 3" id="image3">
    <img src="12.png" alt="Image 4" id="image4">
    <img src="5.png" alt="Image 5" id="image5">
    <img src="2.png" alt="Image 6" id="image6">
    <img src="9.png" alt="Image 7" id="image7">
    <img src="1.png" alt="Image 4" id="image4">
    <img src="5.png" alt="Image 5" id="image5">
    <img src="12.png" alt="Image 6" id="image6">
  </div>
  <div class="second">


    <img src="16.png" alt="Image 5" id="image5">
    <video autoplay loop muted src="video_2023-09-29_19-39-02.mp4"></video>
    <img src="15.png" alt="Image 6" id="image6">
    <img src="13.png" alt="Image 1" id="image1">
    <img src="10.png" alt="Image 2" id="image2">
    <img src="6.png" alt="Image 3" id="image3">
    <img src="3.png" alt="Image 4" id="image4">
    <img src="5.png" alt="Image 5" id="image5">
    <img src="9.png" alt="Image 6" id="image6">
    <img src="5.png" alt="Image 7" id="image7">
    <img src="1.png" alt="Image 4" id="image4">
    <img src="8.png" alt="Image 5" id="image5">
    <img src="10.png" alt="Image 6" id="image6">
  </div>

</div>
<form method="post" action="index.php" onsubmit="return isValid(event);">
  <div class="form">
    <div class="header">
      <h1>Welcome Back</h1>
    </div>
    <div id="error" style="display: none; ">Please fill in both fields.</div>
    <br>
    <div class="form-group">
      <label for="username">Username</label>
      <span style="color: red;"><?php echo $usernameErrorMessage; ?></span>
      <br> <input placeholder="eg:Niranjan" type="text" name="username" id="username" class="form-control"><br><br>
    </div>
    <div class="form-group1">
      <label for="password">Password</label>
      <span style="color: red;"><?php echo $passwordErrorMessage; ?></span>
      <br> <input type="password" placeholder="eg:Niranjan" type="text" name="password" id="password" class="form-control"><br><br>
    </div>
    <div class="btn">
      <button type="submit" value="Login" name="login">Log in</button>
    </div>
    <p class="link">Click here<a href="register.php">New User?</a></p>
  </div>
</form>
<script src="index.js"></script>
</body>

</html>