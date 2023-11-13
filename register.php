<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $usernameErrorMessage = "";
    require("./includes/register.php");
    ?>
    <link rel="stylesheet" href="register.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="error" style="display: none; ">Please fill in both fields.</div>
    <div class="video">
        <video loop autoplay muted src="b8bd4e4273cceae2889d9d259b04f732.mp4"></video>
    </div>
    <form name="register" method="post" action="register.php" onsubmit="return isValid(event)">
        <br>
        <div class="form">
            <div class="header">
                <h1>Register</h1>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <span style="color: red;"><?php echo $usernameErrorMessage; ?></span><br>
                <input type="text" placeholder="Username" name="username" id="username" class="form-control"><br><br>
            </div>
            <div class="form-group1">
                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password" id="password" class="form-control"><br><br>
            </div>
            <div class="btn">
                <button type="submit" value="Register" name="login">Register</button>
            </div>
            <p class="link">Already Registered?<a href="index.php">Login</a></p>
        </div>
    </form>
    <script>
        console.log("hi");

        function isValid(event) {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var element = document.getElementById("error");

            if (username == 0 || password == 0) {
                element.style.display = "block";
                event.preventDefault();
            }
            return true;
        }
    </script>
</body>

</html>