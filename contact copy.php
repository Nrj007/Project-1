<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="contact.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact</title>
</head>
<?php
require("./includes/contact.php");
?>

<body>
    <div id="error" style="display: none; ">Please fill in both fields.</div>
    <div class="wrapper">
        <div class="images">
            <img src="1.png" alt="" class="no" />
            <img src="2.png" alt="" class="noo" />
            <img src="3.png" alt="" />
            <img src="4.png" alt="" />
            <img src="5.png" alt="" />
            <img src="8.png" alt="" />
            <img src="9.png" alt="" />
            <img src="10.png" alt="" />
            <img src="11.png" alt="" />
            <img src="15.png" alt="" />
        </div>
        <div class="title">
            <h1>/CONTACT</h1>
        </div>
        <div class="form">
            <form action="contact.php" name="contact" method="post" onsubmit="return isValid(event)">
                <input type="text" name="contact" id="contact" />
                <button>Send</button>
            </form>
        </div>
    </div>
    <script>
        function isValid(event) {
            var contact = document.getElementById("contact").value;
            var error = document.getElementById("error");
            if (contact == 0) {
                error.style.display = "block";
                event.preventDefault()
            }
            return true;
        }
    </script>
</body>

</html>