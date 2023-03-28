<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/utilities.css">
  <link rel="stylesheet" href="./css/menu.css">
  <script src="./scripts.js"></script>
  <title>Shreksite</title>
</head>

<body>
  <div id="menu">
    <div id="menu-items">
      <div class="menu-item" onclick="location.href='index.php';">Home</div>
      <div class="menu-item" onclick="location.href='movies.php';">Shrek Movies</div>
      <div class="menu-item" onclick="location.href='characters.php';">Shrek Characters</div>
      <div class="menu-item" onclick="location.href='contactus.php';">Contact Us</div>
    </div>
    <div id="menu-background-pattern"></div>
    <div id="menu-background-image"></div>
  </div>
</body>