<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABOUT</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #E4EFE7;
      overflow-x: hidden;
    }

    #header {
      background-color: #99BC85;
    }

    .navbar img.logo {
      max-height: 120px;
      width: 120px;
    }

    .nav-links a {
      font-weight: bold;
    }

    .about h1, .about h2 {
      text-align: center;
      color: #333;
      margin-top: 50px;
    }

    .about p {
      text-align: center;
      color: #333;
      font-size: 50px;
      margin: 100px auto 100px auto;
      font-family: Arial, Helvetica, sans-serif;
    }

    @media only screen and (max-width: 480px) {
      .about p {
        font-size: 30px;
      }
    }

    #footer {
      background-color: #99BC85;
      padding: 10px 0;
    }

    #footer p {
      text-align: center;
      margin: 0;
    }

    .nav-links li {
      list-style: none;
    }

    .nav-links a {
      text-decoration: none;
      color: #151515;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header id="header">
    <nav class="navbar container d-flex justify-content-between align-items-center">
      <!-- ✅ fixed image path -->
      <img src="../images/SHH.png" class="logo" alt="Logo">
      <h1>Sugbo's Sweet Treats</h1>

      <input type="checkbox" id="menu-toggle" class="d-none">
      <label for="menu-toggle" class="d-block d-md-none fs-2">☰</label>

      <!-- ✅ fixed links (same design, just working paths) -->
      <ul class="nav-links d-flex gap-3 list-unstyled mb-0">
        <li><a href="../home.php">Home</a></li>
        <li><a href="../pages/about.php">About</a></li>
        <li><a href="../pages/products.php">Products</a></li>
        <li><a href="../pages/contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- About Section -->
  <main class="container">
    <section class="about">
      <h1>ABOUT US!</h1>
      <div class="about-us">
        <h2>"From our roots to your table, the sweetness of Filipino culture."</h2>
        <p>Sugbo's Sweet Treats is a Cebu-based project that promotes Filipino Kakanin by sharing its rich flavors and cultural roots through a modern website.</p>
        <p>We aim to keep this tradition alive and accessible for all, one sweet bite at a time.</p>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="footer">
    <div class="footer-container">
      <p>© 2025 - Kakanin Dishes. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
