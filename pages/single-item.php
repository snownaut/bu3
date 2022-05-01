<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NightCrawler page</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/4515ebb137.js" crossorigin="anonymous"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/global-style.css" />
  <link rel="stylesheet" href="../assets/css/single-item.css" />

</head>

<body>

  <header>
    <?php require_once '../components/nav/nav.html'; ?>
  </header>

  <main>
    <a class="btn btn-primary" href="./index.php">Go Back</a>

    <section id="detail-section">
      <div class="image-container">
        <img src="" alt="" />
      </div>
      <div class="text-container">
        <h2></h2>
        <h3></h3>
        <p></p>

        <h4>Share</h4>
        <ul class="social-icons">
          <li class="share-links">
            <i class="fa-brands fa-facebook"></i> Facebook
          </li>
          <li class="share-links">
            <i class="fa-brands fa-twitter"></i> Twitter
          </li>
          <li class="share-links">
            <i class="fa-brands fa-dribbble"></i> Dribble
          </li>
        </ul>
      </div>
    </section>
  </main>

  <footer>
    <?php require_once '../components/footer/footer.html'; ?>
  </footer>

  <script src="../scripts/single-item.js"></script>
</body>

</html>