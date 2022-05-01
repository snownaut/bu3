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


</head>

<body>

  <header>
    <?php require_once '../components/nav/nav.html'; ?>
  </header>

  <main>
    <section id="hero">
      <h2>Discover <span>new</span> movies</h2>
      <form>
        <input id="searchInput" type="text" placeholder="Search movies by typing a title" />

        <a class="btn" id="search" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
      </form>
    </section>

    <section id="suggestions">
      <!-- <h2>Suggested movies</h2>
        <hr style="width: 20%" /> -->
      <div class="suggested-movies">

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
    <?php require_once '../components/footer/footer.html'; ?>
    <footer />
    <script src="../scripts/home.js"></script>
</body>

</html>