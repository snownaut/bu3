<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Build-Up Project - Day 1</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4515ebb137.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/global-style.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/nav-style.css" />
    <link rel="stylesheet" href="../assets/css/footer-style.css" />
</head>

<body>
    <header>
        <h1>MovieSuggest</h1>

        <ul>
            <li>
                <a class="active" href="./index.html ">Home</a>
            </li>
            <li>
                <a href="./single-item.html ">Movies</a>
            </li>
            <li>
                <a href="../pages/directors.php ">Movies directors</a>
            </li>
            <li>
                <a href="# ">Contact</a>
            </li>
        </ul>
    </header>

    <main>
        <section id="hero">
            <h2>Discover <span>new</span> movies</h2>
            <form method="get">
                <input id="title" name="title" type="text" placeholder="Enter Movie Title" />
                <input id="views" name="views" type="number" placeholder="Enter Movie Views" />
                <input id="poster" name="poster" type="text" placeholder="Enter Poster Link" />
                <input id="directorId" name="directorId" type="number" placeholder="Enter Director ID" />
                <input class="btn" id="submit" type="submit" name="submit" href="#"><i
                    class="fa-solid fa-magnifying-glass"></i></input>
            </form>
        </section>

        <section id="suggestions">
            <!-- <h2>Suggested movies</h2>
        <hr style="width: 20%" /> -->
            <div class="suggested-movies">
                <?php
                // WORKING WITH DATABASE

                // 1. Connect to the D.B.
                $conn = mysqli_connect("localhost", "root", "root", "movie_db");

                // True if you connected, false if not
                if ($conn) {
                  echo "Connected ! ";
                  var_dump($_GET);
                  if (isset($_GET["submit"])) {
                    $title = $_GET["title"];
                    $views = $_GET["views"];
                    $poster = $_GET["poster"];
                    $director = $_GET["directorId"];
                    $query = "INSERT INTO movies(title, views, poster, director_id)
                  VALUES('$title' , $views, '$poster', $director)";
                    echo $query;
                    $result = mysqli_query($conn, $query);
                    echo $_GET["title"];
                    if ($result) {
                      echo "Successfully inserted in the DB!";
                    } else {
                      echo "Problem inserting into the DB.";
                    }
                  }
                } else {
                  echo "Problem with connection !";
                }

                // Close the connection
                mysqli_close($conn);
                ?>

                <!-- <div class="suggested-movie">
            <img src="./assets/images/poster-nightcrawler.jpg" alt="" />
            <div class="movie-details">
              <h3>NightCrawler</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="suggested-movie">
            <img src="./assets/images/poster-samurai.jpg" alt="" />
            <div class="movie-details">
              <h3>7 Samurais</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="suggested-movie">
            <img src="./assets/images/poster-dune.jpg" alt="" />
            <div class="movie-details">
              <h3>Dune</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div> -->
            </div>
        </section>
    </main>

    <footer>
        <p>
            2022 &copy; All Rights Reserved.&nbsp;<a href="#">Privacy Policy</a>
        </p>
        <ul>
            <li>FB</li>
            <li>In</li>
            <li>Twitter</li>
        </ul>
    </footer>

    <script src="scripts/home.js"></script>
</body>

</html>