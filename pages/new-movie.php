<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Movie</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/4515ebb137.js" crossorigin="anonymous"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/global-style.css" />
  <link rel="stylesheet" href="../assets/css/new-movie.css" />
</head>

<body>
  <header>
    <?php require_once "../components/nav/nav.html"; ?>
  </header>

  <main>
    <section id="hero">
      <div class="hero-card">
        <h2>Add <span>your</span> movie </h2>
        <form method="get">
          <input id="title" name="title" type="text" placeholder="Enter Movie Title" />
          <input id="views" name="views" type="number" placeholder="Enter Movie Views" />
          <input id="poster" name="poster" type="text" placeholder="Enter Poster Link" />
          <input id="directorId" name="directorId" type="number" placeholder="Enter Director ID" />
          <input class="btn" id="submit" type="submit" name="submit" href="#"></input>
        </form>
      </div>

    </section>

    <section id="suggestions">
      <!-- <h2>Suggested movies</h2>
        <hr style="width: 20%" /> -->
      <div class="suggested-movies">
        <?php
        // WORKING WITH DATABASE

        //hiding errors because of the two include below
        error_reporting(0);
        ini_set('display_errors', 0);


        // 1. Connect to the D.B.

        //For the compatibility between Mac and Window
        include_once("../pages/data_window.php");
        include_once("../pages/data_mac.php");
        $conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        // True if you connected, false if not
        if ($conn) {
          if (isset($_GET["submit"])) {
            $title = $_GET["title"];
            $views = $_GET["views"];
            $poster = $_GET["poster"];
            $director = $_GET["directorId"];
            $query = "INSERT INTO movies(title, views, poster, director_id)
                  VALUES('$title' , '$views', '$poster', '$director')";
            /* echo $query; */
            $result = mysqli_query($conn, $query);
            /*   echo $_GET["title"]; */
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


      </div>
    </section>
  </main>

  <footer>
    <?php require_once "../components/footer/footer.html"; ?>
  </footer>

</body>

</html>