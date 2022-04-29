<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie</title>
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
    <link rel="stylesheet" href="../assets/css/directors-style.css" />
    <link rel="stylesheet" href="../assets/css/footer-style.css" />
</head>
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

<body>
    <main>
        <?php
        $conn = mysqli_connect("localhost", "root", "root", "movie_db");
        $id = $_GET["id"];
        if ($conn) {
          echo "Connected!" . "<br>";

          $query = "SELECT * 
  FROM movies a 
  INNER JOIN directors b ON a.director_id = b.id
  WHERE a.id=$id
  ";
          $results = mysqli_query($conn, $query);
          $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
          foreach ($movies as $movie) {
            echo "<img src =" .
              $movie["poster"] .
              " width=500px height=800px>" .
              "<br>";
            echo "Tite : " . $movie["title"] . "<br>";
            echo "Views : " . $movie["views"] . "<br>";
            echo "<hr>";
            echo $id;

            echo "Birth Date" . $movie["birth_date"] . "<br>";
          }
        }
        ?>
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
</body>

</html>