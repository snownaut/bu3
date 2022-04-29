<?php

// WORKING WITH DATABASE 

// 1. Connect to the D.B.

$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// True if you are connected, false if not

if ($conn) {
    echo 'Connected ! ' . '<br>';

    //2. Prepare the query
    $query = 'SELECT directors.id, directors.name,directors.nationality, directors.picture, COUNT(*)
    FROM movies
    RIGHT JOIN directors
    ON directors.id = movies.director_id
    GROUP BY directors.name';

    //3. Executing the query (send query to DB)
    $results = mysqli_query($conn, $query);

    // I retrieved results but I need to fetch before using them
    // 4. Fetch the results as an associative array
    $directors = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
    echo 'Problem with connection!';
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
    <link rel="stylesheet" href="../assets/css/nav-style.css" />
    <link rel="stylesheet" href="../assets/css/directors-style.css" />
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
        <h2> Movies directors </h2>
        <?php foreach ($directors as $director) : ?>
            <div class="directors_container">

                <p>
                    <strong> Name:</strong>
                    <?= $director['name']; ?>
                </p>
                <?= '<img src="' . $director['picture'] . '" width="150vh" >'; ?>
                <p>
                    <strong> Nationality:</strong>
                    <?= $director['nationality']; ?>
                </p>
                <p>
                    <strong> Number of movies:</strong>
                    <?= $director['COUNT(*)']; ?>
                </p>

                <?= ' <a href="director.php?id=' . $director['id'] . '"><button> Show more </button></a> ' ?>

            </div>

        <?php endforeach; ?>
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