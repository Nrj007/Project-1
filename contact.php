<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="contac.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact</title>
</head>

<?php
require("./includes/send_email.php");
?>

<body>
    <div id="error" style="display: none">Please fill in both fields.</div>
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
    <div class="wrapper">
        <div class="title">
            <h1>/CONTACT</h1>
        </div>
        <div class="form">
            <form action="contact.php" name="contact" method="post" onsubmit="return isValid(event)">
                <input type="email" name="email" id="contact" placeholder="youremail@mail.com" />
                <button>Send</button>


            </form>
        </div>
    </div>
    <div class="text">
        <p>niranjan@2023</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        function isValid(event) {
            var contact = document.getElementById("contact").value;
            var error = document.getElementById("error");
            var successMessage = document.querySelector(".success-message"); // Use querySelector to select the first element

            if (contact.trim() === "") {
                error.textContent = "Email is required";
                error.style.display = "block";
                event.preventDefault();

                function errorDelay() {
                    error.style.display = "none";
                }
                setTimeout(errorDelay, 2000);

                return false;
            } else {
                var emailPattern = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
                if (!emailPattern.test(contact)) {
                    error.textContent = "Invalid email format";
                    error.style.display = "block";
                    event.preventDefault();

                    function errorDelay() {
                        error.style.display = "none";
                    }
                    setTimeout(errorDelay, 2000);

                    return false;
                }
            }

            function successDelay() {
                successMessage.textContent = "Email is required";
                successMessage.style.display = "none";
            }

            setTimeout(successDelay, 1000);


            return true;
        }


        const imagesWrapper = document.querySelector(".images");
        const allImages = imagesWrapper.querySelectorAll("img");
        const animation = gsap.timeline({
            repeat: -1,
            yoyo: true
        });
        animation.to(allImages, {
            y: -20,
            duration: 2,
            ease: "power1.Out",
            stagger: 0.5,
        });
    </script>
</body>

</html>