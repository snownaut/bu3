<?php

// WORKING WITH DATABASE

// 1. Connect to the D.B.

$conn = mysqli_connect("localhost", "root", "", "movie_db");

// True if you are connected, false if not

if ($conn) {
    //2. Prepare the query
    echo "Connected";

    $query = 'SELECT a.id, a.name,a.nationality, a.picture, COUNT(*)
  FROM directors a 
  INNER JOIN movies b ON b.director_id = a.id
  GROUP BY a.id;';

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
        <h2> Movies directors </h2>
        <?php foreach ($directors as $director) : ?>
            <div class="directors_container">

                <p>
                    <strong> Name:</strong>
                    <?= $director["name"] ?>
                </p>
                <?= '<img src="' . $director["picture"] . '" width="150vh" >' ?>
                <p>
                    <strong> Nationality:</strong>
                    <?= $director["nationality"] ?>
                </p>
                <p>
                    <strong> Number of movies:</strong>
                    <?= $director["COUNT(*)"] ?>
                </p>

                <?= ' <a href="director.php?id=' .
                    $director["id"] .
                    '"><button> Show more </button></a> ' ?>

            </div>

        <?php endforeach; ?>
    </main>

    <footer>
        <?php require_once "../components/footer/footer.html"; ?>
    </footer>

    <script src="scripts/home.js"></script>
</body>

</html>