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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/4515ebb137.js" crossorigin="anonymous"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/global-style.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/directors-style.css" />

</head>

<header>
  <?php require_once "../components/nav/nav.html"; ?>
</header>

<body>

  <main>
    <?php
    //hiding errors because of the two include below
    error_reporting(0);
    ini_set('display_errors', 0);


    // 1. Connect to the D.B.

    //For the compatibility between Mac and Window
    include_once("../pages/data_window.php");
    include_once("../pages/data_mac.php");
    $conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    $id = $_GET["id"];
    if ($conn) {
      echo "Connected!" . "<br>";
      if (empty($id)) {
        echo "Please enter an ID";
      } else {
        $query = "SELECT * 

  FROM movies a 
  INNER JOIN directors b ON a.director_id = b.id
  WHERE a.id=$id
  ";

        $results = mysqli_query($conn, $query);
        $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
        if (empty($movies)) {
          echo "no match";
        } else {
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
      }
    }
    ?>
  </main>


  <footer>
    <?php require_once "../components/footer/footer.html"; ?>
  </footer>
</body>

</html>