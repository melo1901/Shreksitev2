<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
  <link rel="stylesheet" href="./css/utilities.css">
  <link rel="stylesheet" href="./css/movies.css">
  <script src="./scripts.js"></script>
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

  <main>
    <article data-index="0" data-status="active">
      <div class="article-image-section article-section"></div>
      <div class="article-description-section article-section">
        <p>
          Shrek is a big ogre who lives alone in the woods, feared by all the people in the land of Duloc. When Lord Farquaad, the ruler of Duloc, exiles all the fairy-tale beings to the woods, Shrek loses his peaceful life and his home becomes a refugee camp.
          <br>
          <a href="https://en.wikipedia.org/wiki/Shrek" class="hrefc" target="_blank">Read more</a>
        </p>
      </div>
      <div class="article-title-section article-section">
        <h2>Shrek</h2>
      </div>
      <div class="article-nav-section article-section">
        <button class="article-nav-button" type="button" onclick="handleLeftClick()">
          <i class="fa fa-angle-double-left"></i>
        </button>
        <button class="article-nav-button" type="button" onclick="handleRightClick()">
          <i class="fa fa-angle-double-right"></i>
        </button>
      </div>
    </article>
    <article data-index="1" data-status="inactive">
      <div class="article-image-section article-section"></div>
      <div class="article-description-section article-section">
        <p>
          Shrek and Fiona travel to the Kingdom of Far Far Away, where Fiona's parents are King and Queen, to celebrate their marriage. When they arrive, they find they are not as welcome as they thought they would be. Shrek (Mike Myers) has rescued Princess Fiona (Cameron Diaz), got married, and now is time to meet the parents.
          <br>
          <a href="https://en.wikipedia.org/wiki/Shrek" class="hrefc" target="_blank">Read more</a>
        </p>
      </div>
      <div class="article-title-section article-section">
        <h2>Shrek 2</h2>
      </div>
      <div class="article-nav-section article-section">
        <button class="article-nav-button" type="button" onclick="handleLeftClick()">
          <i class="fa fa-angle-double-left"></i>
        </button>
        <button class="article-nav-button" type="button" onclick="handleRightClick()">
          <i class="fa fa-angle-double-right"></i>
        </button>
      </div>
    </article>
    <article data-index="2" data-status="inactive">
      <div class="article-image-section article-section"></div>
      <div class="article-description-section article-section">
        <p>
          Prince Charming is plotting to overthrow Shrek and Fiona, who have inherited the throne following King Harold's death. Shrek, who does not want to rule the kingdom and does not believe an ogre is fit to be king, attempts to convince Fiona's underachieving, 16-year-old cousin Artie to reign instead.
          <br>
          <a href="https://en.wikipedia.org/wiki/Shrek_the_Third" class="hrefc" target="_blank">Read more</a>
        </p>
      </div>
      <div class="article-title-section article-section">
        <h2>Shrek the Third</h2>
      </div>
      <div class="article-nav-section article-section">
        <button class="article-nav-button" type="button" onclick="handleLeftClick()">
          <i class="fa fa-angle-double-left"></i>
        </button>
        <button class="article-nav-button" type="button" onclick="handleRightClick()">
          <i class="fa fa-angle-double-right"></i>
        </button>
      </div>
    </article>
    <article data-index="3" data-status="inactive">
      <div class="article-image-section article-section"></div>
      <div class="article-description-section article-section">
        <p>
          Shrek struggles with the responsibilities and stress of being a domesticated family man, signs a contract from Rumpelstiltskin to temporarily revert to his previous lifestyle, unknowing of the damaging consequences.
          <br>
          <a href="https://en.wikipedia.org/wiki/Shrek_Forever_After" class="hrefc" target="_blank">Read more</a>
        </p>
      </div>
      <div class="article-title-section article-section">
        <h2>Shrek Forever After</h2>
      </div>
      <div class="article-nav-section article-section">
        <button class="article-nav-button" type="button" onclick="handleLeftClick()">
          <i class="fa fa-angle-double-left"></i>
        </button>
        <button class="article-nav-button" type="button" onclick="handleRightClick()">
          <i class="fa fa-angle-double-right"></i>
        </button>
      </div>
    </article>
  </main>
</body>

</html>