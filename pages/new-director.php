<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Director</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

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
                <h2>Add <span>a</span> director </h2>
                <form method="get">
                    <input id="Enter Director Name" name="name" type="text" placeholder="Enter Director Name" />
                    <input id="directorId" name="directorId" type="number" placeholder="Enter Director ID" />
                    <input id="birthDate" name="birthDate" type="date" placeholder="Add Director Birth Date" />
                    <input id="picture" name="picture" type="text" placeholder="Add Director Picture link" />

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

                // 1. Connect to the D.B.
                $conn = mysqli_connect("localhost", "root", "root", "movie_db");

                // True if you connected, false if not
                if ($conn) {
                  if (isset($_GET["submit"])) {
                    $name = $_GET["name"];
                    $directorId = $_GET["directorId"];
                    $birthDate = $_GET["birthDate"];
                    $picture = $_GET["picture"];
                    $nationality = $_GET["nationality"];
                    $query = "INSERT INTO directors(name, id, birth_date, picture)
                  VALUES('$name' , '$directorId', '$birthDate', '$picture')";
                    /*  var_dump($query); */
                    $result = mysqli_query($conn, $query);
                    /*    echo $_GET["name"]; */
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