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

    <!-- Head -->
    <div class="fixed-btn" onclick="toggle_on();" id="SB">
        <a href="#"></a>
    </div>
    <div class="shreking">
        <video src="./images/GET_SHREKT.mp4"></video>
        <img src="./images/close.webp" alt="close icon" class="close" onclick="toggle_off();">
    </div>



    <section>
        <h2 class="md text-center my-2 movies-header-color">Characters loved by audience</h2>
    </section>

    <section class="characters">
        <div class="container grid">
            <div class="card">
                <img src="./images/Shrek_Swamp_Meme.avif" alt="shrek in swamp">
            </div>
            <div class="card description">
                <h4>Shrek is the lead character in all of the
                    films. He prides himself on being a big, green, terrifying ogre and is grumpy and hot-tempered, but is also caring and
                    brave. He begins the series as an unsociable hermit until he meets his soon-to-be best friend, Donkey. In a deal with
                    Lord Farquaad, he and Donkey embark on a quest to save Princess Fiona from the castle in which she was confined. Despite
                    their differences, Shrek and Fiona fall in love, marry at the end of the first film, and have three ogre babies in the
                    third film.</h4>
            </div>
        </div>

        <div class="container grid">

            <div class="card description">
                <h4>Donkey is a talking donkey. He escaped being sold by his owner, an old woman, and eventually met and allied with Shrek. He is Shrek's best friend, but it always bothers or irritates the ogre. He has also become the frequent companion of the honorable mercenary Puss In Boots, although the two always fight or disagree from one another. Donkey loves to sing and hum, as seen in all the franchise films. He is also the Dragon's husband and father of the Dronkeys, whose passion for sweets inspired the name of each one of them.</h4>
            </div>
            <div class="card">
                <img src="./images/donkey-shrek.avif" alt="photo of donkey">
            </div>
        </div>

        <div class="container grid reveal">
            <div class="card">
                <img src="./images/Obesepussinboots.webp" alt="photo of puss in boots">
            </div>
            <div class="card description">
                <h4>Puss In Boots is Shrek's best friend along with Donkey. Loosely based on the fairy tale character Puss In Boots
                    as well as being a kind of parody of Zorro, he is a smooth-talking cat with a Spanish accent, usually wearing a
                    cavalier's hat, a belt with a sword, a small black cape, and small Corinthian leather boots. Puss first appears in Shrek
                    2, much like Dragon in the first film. He often overpowers his enemies by distracting them with his "cute kitten" looks.
                    He also exhibits common cat behavior such as coughing up hairballs and chasing lights, usually resulting in his defeat
                    or capture.</h4>
            </div>
        </div>

        <div class="container grid reveal">

            <div class="card description">
                <h4>Dragon is depicted as a ruby-colored dragon, initially known as the guard of the tower in which Princess Fiona awaits
                    her rescuer in the first film.A silent character, Dragon has no spoken lines throughout the course of the franchise, though other characters,
                    including Donkey, are able to somewhat understand her language when she communicates through hushed roars.</h4>
            </div>
            <div class="card">
                <img src="./images/dragon-1651082603.webp" alt="photo of dragon">
            </div>
        </div>

        <div class="container grid reveal">
            <div class="card">
                <img src="./images/fiona.webp" alt="photo of fiona">
            </div>
            <div class="card description">
                <h4>Princess Fiona is the princess of Far Far Away, the daughter of late King Harold
                    and Queen Lillian, cousin of King Arthur Pendragon, and Shrek's wife from the end of the first film on. She begins the
                    series as a beautiful princess who transforms into an ogress every night when the sun sets. At the end of the first
                    film, the transforming spell is broken and she permanently takes the form of an ogress when she realizes that Shrek is
                    her true love. In Shrek 2, Fiona becomes human again and goes back to her ogress form permanently.</h4>
            </div>
        </div>
        <div class="container grid reveal">

            <div class="card description">
                <h4>The Gingerbread Man is a live talking gingerbread man and one of Shrek's friends. He is also
                    known as "Gingy" and was created by The Muffin Man. He is small and a fast runner, making him difficult to catch. He is
                    made out of a normal carved-out gingerbread with icing and gumdrop buttons. He adores those gumdrop buttons and begs
                    Lord Farquaad (who tries to pull out one of his buttons) not to pull them off. In Shrek the Halls he is afraid of Santa,
                    who has eaten his girlfriend. He is impatient.
                </h4>
            </div>
            <div class="card">
                <img src="./images/gingerbread_man.jpg" alt="photo of gingerbread_man">
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