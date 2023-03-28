<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous">
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
                    <li><a href="login.php">Login</a></li>
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


    <!-- Login -->

    <div class="login-register">
        <div class="container">
            <div class="grid">
                <div class="form">
                    <h1>Register</h1>
                    <form action="register.php" method="POST">
                        <div class="form-control">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="Enter your username" value="<?php echo $username; ?>">
                        </div>
                        <div class="form-control">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email">
                        </div>
                        <div class="form-control">
                            <label for="password">Password</label>
                            <input type="password" name="password_1" id="password" placeholder="Enter your password">
                        </div>
                        <div class="form-control">
                            <label for="password">Confirm your password</label>
                            <input type="password" name="password_2" id="password" placeholder="Confirm your password">
                        </div>
                        <button type="submit" name="reg_user" class="btn" style="margin: 10px" name="login">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function()
{
onmousemove = function(e)
                {
                    var d = new Date();
                    if(d.getMinutes() % 2 == 0)
                    {
                        $("#SB").show();
                    }
                    else
                    {
                        $('#SB').hide();
                    }
                }
});
</script>
</body>

</html>