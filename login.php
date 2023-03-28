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

    <section class="login">
        <div class="container grid">
            <div class="login-form card">
                <div class="container">
                    <div class="grid">
                        <div class="form">
                            <?php include('errors.php'); ?>
                            <h1>Login</h1>
                            <form action="login.php" method="POST">
                                <div class="form-control">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" placeholder="Enter your username">
                                </div>
                                <div class="form-control">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" placeholder="Enter your password">
                                </div>
                                <button type="submit" name="login_user" class="btn" style="margin: 10px">Login</button>
                                <p>
                                    Not a member yet?
                                    <br>
                                    <a href="register.php" class="no-color">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-footer py-5">
        <div class="container grid grid-3">
            <div>
                <h1 style="color: white;">Shreksite</h1>
                <p style="color: white;">Copyright &copy; 2023</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="characters.html">Characters</a></li>
                    <li><a href="movies.html">Movies</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
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
</body>

</html>