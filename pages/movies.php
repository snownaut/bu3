<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movies</title>
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
  <link rel="stylesheet" href="../assets/css/movies-list.css" />
  <link rel="stylesheet" href="../assets/css/btn.css" />



</head>

<body>
  <header>
    <?php require_once "../components/nav/nav.html"; ?>
  </header>

  <main>
    <div class="form-container">
      <form class="form1" action="movie.php" method="get">
        <input id="id-search-bar" placeholder="ENTER MOVIE ID" type="text" name="id"><br>

        <input id="id-search-btn" name="idSearchBar" value="Search" type="submit" />


      </form>

      <form class="form2">


        <input id="sortNameBtn" type="submit" name="sortNameBtn" value="SortByName" hidden />
        <label class="btn sortBtn" for="sortNameBtn"> Sort by name</label>


        <input id="sortViewsBtn" type="submit" name="sortViewsBtn" value="SortByViews" hidden />
        <label class="btn sortBtn" for="sortViewsBtn">
          Sort by views</label>


      </form>
    </div>


    <div id="movies-container">
      <?php
      //hiding errors because of the two include below
      error_reporting(0);
      ini_set('display_errors', 0);


      // 1. Connect to the D.B.

      //For the compatibility between Mac and Window
      include_once("../pages/data_window.php");
      include_once("../pages/data_mac.php");
      $conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

      if (isset($_GET["sortNameBtn"])) {
        $query = 'SELECT *
                FROM movies
                ORDER BY title ASC';

        //Executing the query (send query to DB)
        $results = mysqli_query($conn, $query);

        // Fetch the results as an associative array
        $moviess = mysqli_fetch_all($results, MYSQLI_ASSOC);

        foreach ($moviess as $movie) {
          echo "<div class='movie-card'><h3>" .
            $movie["title"] .
            "</h3>" .
            "<a href=movie.php?id=" .
            $movie["id"] .
            ">" .
            "<img src =" .
            $movie["poster"] .
            " >" .
            "</a>" .
            "<br> <p>Views: " .
            $movie["views"] .
            "</p><br>" .
            $movie["id"] .
            "</div>";
        }
        mysqli_close($conn);
      }
      if (isset($_GET["sortViewsBtn"])) {
        $query = 'SELECT *
                  FROM movies
                  ORDER BY views ASC';

        //Executing the query (send query to DB)
        $results = mysqli_query($conn, $query);

        // Fetch the results as an associative array
        $moviess = mysqli_fetch_all($results, MYSQLI_ASSOC);

        foreach ($moviess as $movie) {
          echo "<div class='movie-card'><h3>" .
            $movie["title"] .
            "</h3>" .
            "<a href=movie.php?id=" .
            $movie["id"] .
            ">" .
            "<img src =" .
            $movie["poster"] .
            " >" .
            "</a>" .
            "<br> <p>Views: " .
            $movie["views"] .
            "</p><br>" .
            $movie["id"] .
            "</div>";
        }
        mysqli_close($conn);
      } else {
        $query = 'SELECT *
                    FROM movies
                    ORDER BY id ASC';

        //Executing the query (send query to DB)
        $results = mysqli_query($conn, $query);

        // Fetch the results as an associative array
        $moviess = mysqli_fetch_all($results, MYSQLI_ASSOC);

        foreach ($moviess as $movie) {
          echo "<div class='movie-card'><h3>" .
            $movie["title"] .
            "</h3>" .
            "<a href=movie.php?id=" .
            $movie["id"] .
            ">" .
            "<img src =" .
            $movie["poster"] .
            " >" .
            "</a>" .
            "<br> <p>Views: " .
            $movie["views"] .
            "</p><br>" .
            $movie["id"] .
            "</div>";
        }
        mysqli_close($conn);
      }

      /* else {
              $query = "SELECT * FROM movies";
              $results = mysqli_query($conn, $query);
              $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

              foreach ($movies as $movie) {
                echo "<div class='movie-card'><h3>" .
                  $movie["title"] .
                  "</h3>" .
                  "<a href=movie.php?id=" .
                  $movie["id"] .
                  ">" .
                  "<img src =" .
                  $movie["poster"] .
                  " >" .
                  "</a>" .
                  "<br> <p>Views: " .
                  $movie["views"] .
                  "</p><br>" .
                  $movie["id"] .
                  "</div>";
              }
              mysqli_close($conn);
            } */
      ?>




    </div>


  </main>

  <footer>
    <?php require_once "../components/footer/footer.html"; ?>
  </footer>
</body>

</html>