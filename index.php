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
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="fixed-btn SB" onclick="toggle_on();" id="SB">
        <a href="#"></a>
    </div>
    <div class="shreking">
        <video src="./images/GET_SHREKT.mp4"></video>
        <img src="./images/close.webp" alt="close icon" class="close" onclick="toggle_off();">
    </div>

    <!-- Showcase -->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h2>Get to know Shrek better</h2>
                <p>Shrek sparked a motion picture phenomenon and captured the world's imagination with...the Greatest Fairy Tale Never Told! Shrek (Mike Myers) goes on a quest to rescue the feisty Princess Fiona (Cameron Diaz) with the help of his loveable Donkey (Eddie Murphy) and win back the deed to his swamp from scheming Lord Farquaad.
                    <br>
                    <a href="./characters.php" class="btn btn-outline" style="margin-top: 10px;">Characters from Shrek universe</a>
                </p>
            </div>
            <div class="showcase-form card">
                <h2 style="color: #613e1b; margin:0;">Tell us about your favourite Shrek movie</h2>
                <form name="review" onsubmit="return validateFormReview()">
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-control">
                        <textarea cols="30" rows="5" placeholder="Write your review here (max.300 characters)" maxlength="300" name="textarea"></textarea>
                    </div>
                    <input type="submit" name="submit" value="Send" class="btn form-control btn-form-control" style="margin: 0">
                </form>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="container stats-color">
            <h3 class="stats-heading text-center my-1">
                Statistics about Shrek movies and community
            </h3>

            <div class="grid grid-3 text-center my-4">
                <div>
                    <i class="fas fa-money-bill-wave fa-3x"></i>
                    <h3>2 990 642 390$</h3>
                    <p class="text-secondary">Box office</p>
                </div>
                <div>
                    <i class="fa fa-thumbs-up fa-3x"></i>
                    <h3>100%</h3>
                    <p class="text-secondary">Satisfaction after watching</p>
                </div>
                <div>
                    <i class="fa fa-users fa-3x"></i>
                    <h3 id="fans">8002477873
                        <script>
                            $(document).ready(function() {
                                setInterval(update_pop, 1000);

                                function update_pop() {
                                    var d = new Date();
                                    var random = Math.floor(Math.random() * (250 - (-250) + 1) + (-250));
                                    if (d.getSeconds() % 2 == 0) {
                                        $.ajax({
                                            url: "./population.txt",
                                            method: "GET",
                                            success: function(response) {
                                                $("#fans").php(Number(response) + random);
                                            }
                                        });
                                    }
                                }
                            });
                        </script>
                    </h3>
                    <p class="text-secondary">Shrek fans over the world</p>
                </div>
            </div>
        </div>
    </section>
    <br> <br> <br>
    <!-- Shrek 5 -->

    <section class="sfive bg-primary my-2 py-2">
        <div class="container grid">
            <div class="text-center">
                <h2 class="lg fs">Shrek 5 - What We Know So Far</h2>
                <p class="lead my-1 fs">Premiere date: 20 may 2023
                <ul>
                    <li>
                        Characters that will appear:
                        <br>
                        Mike Myers as Shrek.
                    </li>
                    <li>
                        Eddie Murphy as Donkey.
                    </li>
                    <li>
                        Antonio Banderas as Puss in Boots.
                    </li>
                    <li>
                        Cameron Diaz as Princess Fiona.
                    </li>
                </ul>
                <br>
                <p style="color: white;"> The plot is currently unknown. </p>
            </div>
            <img src="images/shrek5logo.png" alt="shrek 5 logo">
        </div>
    </section>

    <!-- Movies -->
    <section class="movies">
        <h2 class="md text-center my-2 movies-header-color">
            Shrek Movies Redirects
        </h2>
        <div class="container flex white">
            <div class="card movies-size">
                <h4>Shrek I</h4>
                <a href="./movies.php">
                    <img src="./images/shrek1logo.png" alt="shrek 1 logo">
                </a>
            </div>
            <div class="card movies-size">
                <h4>Shrek II</h4>
                <a href="./movies.php">
                    <img src="./images/shreklogo22.png" alt="shrek 1 logo">
                </a>
            </div>
            <div class="card movies-size">
                <h4>Shrek III</h4>
                <a href="./movies.php">
                    <img src="./images/shrek3logo.png" alt="shrek 1 logo">
                </a>
            </div>
            <div class="card movies-size">
                <h4>Shrek Forever</h4>
                <a href="./movies.php">
                    <img src="./images/shrekforeverlogo.png" alt="shrek 1 logo">
                </a>
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