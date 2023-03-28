<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/utilities.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Shreksite</title>
</head>

<body>
    <!-- Navbar-->
    <div class="navbar">
        <div class="container flex">
            <h1 class="logo">Shreksite</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="characters.php">Characters</a></li>
                    <li><a href="movies.php">Movies</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="fixed-btn top" onclick="toggle_on();" id="SB">
        <a href="#"></a>
    </div>
    <div class="shreking">
        <video src="./images/GET_SHREKT.mp4"></video>
        <img src="./images/close.webp" alt="close icon" class="close" onclick="toggle_off();">
    </div>


    <!-- Contact Us-->

    <section class="contact">
        <div class="container grid">
            <div class="contact-form card">
                <h2 style="color: #613e1b;">If you have any questions or concerns, please contact us.</h2>
                <form name="contact" onsubmit="return validateFormContact()" action="troubleshoot-form-handler.php" method="post" enctype="multipart/form-data">
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Name" id="name">
                        <h5 id="namescheck" style="color: red;">Name missing</h5>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email" id="email">
                        <h5 id="emailscheck" style="color: red;">Email missing</h5>
                    </div>
                    <div>
                        <br>
                        <label for="issue_type" style="color:#613e1b">Issue Type:</label>
                        <select id="issue_type" name="issue_type" required>
                            <option value="">--Select--</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Software">Software</option>
                            <option value="Networking">Networking</option>
                            <option value="Content">Content</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <textarea rows="6" placeholder="Description" maxlength="1000" id="description" name="description"></textarea>
                    </div>
                    <label for="attachment" style="color:#613e1b">Attachment:</label>
                    <input type="file" id="attachment" name="attachment">
                    <br><br>
                    <input type="submit" value="Submit" class="btn form-control btn-form-control" style="margin: 0" name="submit">
                    <script>
                        $("#namescheck").hide();
                        $("#emailscheck").hide();
                        $(document).ready(function() {
                            // Validate Username
                            let usernameError = true;
                            $("#name").keyup(function() {
                                validateUsername();
                            });

                            function validateUsername() {
                                let usernameValue = $("#name").val();
                                if (usernameValue.length == "") {
                                    $("#namescheck").show();
                                    $("#namescheck").php("Username is required");
                                    usernameError = false;
                                    return false;
                                } else if (usernameValue.length < 3 || usernameValue.length > 10) {
                                    $("#namescheck").show();
                                    $("#namescheck").php("**length of your name must be between 3 and 10");
                                    usernameError = false;
                                    return false;
                                } else {
                                    $("#namescheck").hide();
                                }
                            }

                            // Validate Email

                            let emailError = true;
                            $("#email").keyup(function() {
                                validateEmail();
                            });

                            function validateEmail() {
                                let emailValue = $("#email").val();
                                let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]{2,58})$/;
                                if (emailValue.length == "") {
                                    $("#emailscheck").show();
                                    $("#emailscheck").php("Email is required");
                                    emailError = false;
                                    return false;
                                } else if (regex.test(emailValue) == false) {
                                    $("#emailscheck").show();
                                    $("#emailscheck").php("**invalid email format");
                                    usernameError = false;
                                    return false;
                                } else {
                                    $("#emailscheck").hide();
                                }

                                console.log(regex.test(emailValue));
                            }
                        });
                    </script>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-primary py-5">
        <div class="container grid grid-3">
            <div>
                <h1 style="color: white;">Shreksite</h1>
                <p style="color: white;">Copyright &copy; 2023</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="characters.php">Characters</a></li>
                    <li><a href="movies.php">Movies</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </nav>
            <div class="social">
                <a href="https://twitter.com/shreketc" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="https://www.facebook.com/Shrek/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://www.instagram.com/explore/tags/shrek/top/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://www.linkedin.com/pub/dir/Shrek/+" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            onmousemove = function(e) {
                var d = new Date();
                if (d.getMinutes() % 2 == 0) {
                    $("#SB").show();
                } else {
                    $('#SB').hide();
                }
            }
        });
    </script>
</body>

</html>