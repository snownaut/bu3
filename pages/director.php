<?php

//hiding errors because of the two include below
error_reporting(0);
ini_set('display_errors', 0);


// 1. Connect to the D.B.

//For the compatibility between Mac and Window
include_once("../pages/data_window.php");
include_once("../pages/data_mac.php");


$id = $_GET["id"];

$conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// True if you are connected, false if not

if ($conn) {
    //2. Prepare the query
    $query = "SELECT directors.id, directors.name,directors.nationality, directors.picture, movies.title, movies.poster, movies.views
     FROM movies
     RIGHT JOIN directors
     ON directors.id = movies.director_id
     WHERE directors.id=$id";

    //3. Executing the query (send query to DB)
    $results = mysqli_query($conn, $query);

    // I retrieved results but I need to fetch before using them
    // 4. Fetch the results as an associative array
    $directors = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
    echo "Problem with connection!";
}

// Close the connection
mysqli_close($conn);
?>


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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4515ebb137.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/global-style.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/directors-style.css" />


</head>

<body>

    <header>
        <?php require_once "../components/nav/nav.html"; ?>
    </header>


    <main>

        <div class="directors_container">
            <?= '<img src="' . $directors[0]["picture"] . '" width="150vh" >' ?>
            <p>
                <strong> <?= $directors[0]["name"] ?></strong>

            </p>
            <p>
                Nationality:
                <?= $directors[0]["nationality"] ?>
            </p>
            <p>
                Number of movies:
                <?= count($directors) ?>
            </p>

            <br>
            <h3> MOVIES </h3>
            <div>
                <?php foreach ($directors as $director) : ?>
                    <br>
                    <p>
                        <?= $director["title"] ?>
                    </p>
                    <br>
                    <?= '<img src="' .
                        $director["poster"] .
                        '" width="200vh" >' ?>
                    <p>
                        <strong> Views:</strong>
                        <?= $director["views"] ?>
                    </p>

                    <hr>
                <?php endforeach; ?>
            </div>

        </div>


    </main>
    <footer>
        <?php require_once "../components/footer/footer.html"; ?>
    </footer>

    <script src="scripts/home.js"></script>
</body>

</html>