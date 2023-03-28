<?php include('server.php') ?>
<?php
if (!isset($_SESSION['role'])) {
    header('location: index.php');
} else {
    if ($_SESSION['role'] == 'user') {
        header('location: index.php');
    }
}

?>
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
    <div class="container grid admin-page">
        <form class="table-form" action="admin-panel.php" method="post">
            <h1 class="stats-heading text-center my-1">Add to characters table</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br><br>
            <label for="species">Species:</label>
            <input type="text" id="species" name="species" required>
            <br><br>
            <input type="submit" class="btn" name='submit-char' value="Submit">
        </form>
        <form class="table-form" action="admin-panel.php" method="post">
            <h1 class="stats-heading text-center my-1">Delete from characters table</h1>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>
            <br><br><br><br><br>
            <input type="submit" class="btn delete-char" name="delete-char" value="Submit">
        </form>
    </div>
    <div class="container grid">
        <form class="table-form" action="admin-panel.php" method="post">
            <h1 class="stats-heading text-center my-1">Add to movies table</h1>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <br><br>
            <label for="year">Year:</label>
            <input type="text" id="year" name="year" required>
            <br><br>
            <input type="submit" class="btn" name="submit-movie" value="Submit">
        </form>
        <form class="table-form" action="admin-panel.php" method="post">
            <h1 class="stats-heading text-center my-1">Delete from movies table</h1>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>
            <br><br><br><br><br>
            <input type="submit" class="btn delete-char" name="delete-movie" value="Submit">
        </form>
    </div>

    <div class="container grid">
        <form class="table-form" action="admin-panel.php" method="post">
            <h1 class="stats-heading text-center my-1">Add to appearances table</h1>
            <label for="char_id">Character_id:</label>
            <input type="text" id="char_id" name="char_id" required>
            <br><br>
            <label for="movie_id">Movie_id:</label>
            <input type="text" id="movie_id" name="movie_id" required>
            <br><br>
            <input type="submit" class="btn" name="submit-appear" value="Submit">
        </form>
        <form class="table-form" action="admin-panel.php" method="post">
            <h1 class="stats-heading text-center my-1">Delete from appearances table</h1>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>
            <br><br><br><br><br>
            <input type="submit" class="btn delete-char" name="delete-appear" value="Submit">
        </form>

        <?php
if(isset($_POST['submit-char']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shrek";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST["name"];
    $species = $_POST["species"];

    $sql = "INSERT INTO characters (name, species) VALUES (:name, :species)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':species', $species);
    $stmt->execute();

    echo "<script>alert('New record created successfully');</script>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
}
if(isset($_POST['delete-char']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shrek";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_POST["id"];

        $sql = "DELETE FROM characters WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        echo "<script>alert('Record deleted successfully');</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;    
}

if (isset($_POST['submit-movie'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shrek";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $title = $_POST["title"];
        $year = $_POST["year"];

        $sql = "INSERT INTO movies (title, year) VALUES (:title, :year)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':year', $year);
        $stmt->execute();

        echo "<script>alert('New record created successfully');</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}

if (isset($_POST['submit-appear'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shrek";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $char_id = $_POST["char_id"];
        $movie_id = $_POST["movie_id"];

        $sql = "INSERT INTO appearances (character_id, movie_id) VALUES (:char_id, :movie_id)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':char_id', $char_id);
        $stmt->bindParam(':movie_id', $movie_id);
        $stmt->execute();

        echo "<script>alert('New record created successfully');</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}

if (isset($_POST['delete-movie'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shrek";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_POST["id"];

        $sql = "DELETE FROM movies WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        echo "<script>alert('Record deleted successfully');</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}

if (isset($_POST['delete-appear'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shrek";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_POST["id"];

        $sql = "DELETE FROM appearances WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

                echo "<script>alert('Record deleted successfully');</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>
    </div>

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
</body>

</html>