<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #E4EFE7;
    }

    /* Header */
    #header {
      background-color: #99BC85;
    }
    .navbar img.logo {
      max-height: 120px;
      width: 120px;
    }
    .nav-links a {
      text-decoration: none;
      color: #151515;
      font-weight: bold;
    }

    /* Cards */
    .cards {
      border-radius: 8px;
      padding: 20px;
      background-color: #99BC85;
      box-shadow: 10px 2px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-bottom: 30px;
    }
    .cards img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 8px;
      display: block;
    }

    .cards h2, .cards p {
      font-weight: bold;
      color: #151515;
    }

    /* Buttons */
    .primary-button {
      background-color: #333333;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 5px;
      width: 100%;
      cursor: pointer;
      transition: 0.2s;
    }
    .primary-button:hover {
      background-color: #28a745;
    }

    /* Footer */
    #footer {
      background-color: #99BC85;
      padding: 10px 0;
      width: 100%;
    }
    #footer p {
      text-align: center;
      margin: 0;
    }
  </style>
</head>

<body>

  <!-- Header -->
  <header id="header">
    <nav class="navbar container d-flex justify-content-between align-items-center">
      <!-- ✅ Fixed image path -->
      <img src="../images/SHH.png" class="logo" alt="Logo">
      <h1>Sugbo's Sweet Treats</h1>
      <ul class="nav-links d-flex gap-3 list-unstyled mb-0">
        <li><a href="../home.php">Home</a></li>
        <li><a href="../pages/about.php">About</a></li>
        <li><a href="../pages/products.php">Products</a></li>
        <li><a href="../pages/contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Products Section -->
  <main class="container my-5">
    <h1 class="text-center mb-5">ORDER HERE!</h1>

    <div class="row justify-content-center g-4 mb-3">
      <!-- ✅ Row 1 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/143.jpg" alt="Bibingka">
          <h2>Bibingka</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/145.jpg" alt="Suman">
          <h2>Suman</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/144.jpg" alt="Puto">
          <h2>Puto</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/sapin-spin.jpg" alt="Sapin-sapin">
          <h2>Sapin-sapin</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>

      <!-- ✅ Row 2 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/biko.webp" alt="Biko">
          <h2>Biko</h2>
          <p>₱20</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/kutsinta.jpg" alt="Kutsinta">
          <h2>Kutsinta</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/palitaw.jpg" alt="Palitaw">
          <h2>Palitaw</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/pichi-pichi.jpg" alt="Pichi-pichi">
          <h2>Pichi-pichi</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>

      <!-- ✅ Row 3 (fixed wrong path) -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/kalamay.jpg" alt="Kalamay">
          <h2>Kalamay</h2>
          <p>₱30</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/Buchi.jpg" alt="Buchi">
          <h2>Buchi</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <!-- ❌ Fixed wrong path: '..s/images/' → ✅ '../images/' -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/pastillas.jpg" alt="Pastillas">
          <h2>Pastillas</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/Nilupak.jpg" alt="Nilupak">
          <h2>Nilupak</h2>
          <p>₱15</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>

      <!-- ✅ Continue same for remaining rows -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/Puto-Bumbong.webp" alt="Puto-Bumbong">
          <h2>Puto-Bumbong</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/Maja Blanca.webp" alt="Maja Blanca">
          <h2>Maja Blanca</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/cups.jpg" alt="Cupcake">
          <h2>Cupcake</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/Balanghoy.jpg" alt="Budbod Balanghoy">
          <h2 class="fs-3">Budbod Balanghoy</h2>
          <p>₱15</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/chiffon.jpg" alt="Chiffon Cake">
          <h2>Chiffon Cake</h2>
          <p>₱50</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/banana.jpg" alt="Banana Cue">
          <h2>Banana Cue</h2>
          <p>₱15</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/hopia.jpg" alt="Hopia">
          <h2>Hopia</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="cards">
          <img src="../images/binangkal.jpg" alt="Binangkal">
          <h2>Binangkal</h2>
          <p>₱10</p>
          <a href="order.php"><button class="primary-button">ORDER NOW</button></a>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer id="footer">
    <p>© 2025 - Kakanin Dishes. All rights reserved.</p>
  </footer>

</body>
</html>
