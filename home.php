
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    /* sa css ni ako gi balhin */

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


    .hero-content h1 {
      color: #99BC85;
      font-size: 48px;
      text-shadow: 2px 2px 2px #333;
    }

    .hero-content p {
      margin-top: 14px;
      color: #333;
      font-size: large;
    }

    .hero-image img {
      max-width: 100%;
      height: 300px;
      object-fit: cover;
    }

    @media only screen and (max-width: 768px) {
      #hero-banner {
        flex-direction: column !important;
        gap: 0px !important;
        padding: 20px !important;
      }
      .hero-content h1 {
        font-size: 30px;
      }
      .hero-content p {
        font-size: 20px;
      }
    }

    /* Review Cards */
    .review-card {
  width: 300px;
  height: 300px;        /*circle widt ncya */
  border-radius: 50%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #99BC85;
  box-shadow: 10px 2px 8px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;     /* para dli mo katag */
}

/* katong gagmay na circle */
.review-card img {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 10px;
}


    .reviewer {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin: 100px 0;
    }

    @media only screen and (max-width: 768px) {
      .reviewer {
        flex-direction: column;
        align-items: center;
        margin: 50px 0;
      }
    }

    /* Footer */
    #footer {
      background-color: #99BC85;
      padding: 10px 0;
    }

    #footer p {
      text-align: center;
      margin: 0;
    }

    /* Primary Button */
    .primary-button {
      background-color: #333333;
      color: #fff;
      border: 1px solid transparent;
      border-radius: 5px;
      padding: 10px 12px;
      width: 100%;
      cursor: pointer;
      transition: 0.2s ease-in-out;
    }

    .primary-button:hover {
      background-color: #28a745;
    }
    
    /* Mobile Navigation Toggle */
#menu-toggle:checked + label + ul.nav-links {
  display: flex !important;
  flex-direction: column;
  gap: 15px;
  background-color: #99BC85;
  position: absolute;
  top: 100%;
  right: 0;
  width: 200px;
  padding: 10px;
  border-radius: 0 0 0 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
  z-index: 1000;
}

/* Hide nav links by default on small screens */
@media (max-width: 768px) {
  ul.nav-links {
    display: none !important;
  }

  /* Show the menu icon */
  label[for="menu-toggle"] {
    cursor: pointer;
  }

  /* Stack header vertically */
  nav.navbar {
    flex-direction: column !important;
    align-items: flex-start !important;
    gap: 10px;
    position: relative;
  }

  /* Smaller logo */
  .navbar img.logo {
    max-height: 80px;
    width: 80px;
  }

  /* Smaller heading */
  nav.navbar h1 {
    font-size: 1.5rem;
  }
}

  </style>
</head>

<body>

  <!-- Header -->
  <header id="header">
    <nav class="navbar container d-flex justify-content-between align-items-center">
     <img src="images/SHH.png" class="logo" alt="Logo">
      <h1>Sugbo's Sweet Treats</h1>
      <input type="checkbox" id="menu-toggle" class="d-none">
      <label for="menu-toggle" class="d-block d-md-none fs-2">☰</label>
      <ul class="nav-links d-flex gap-3 list-unstyled mb-0">
        <li><a href="home.php" class="text-dark text-decoration-none">Home</a></li>
        <li><a href="pages/about.php" class="text-dark text-decoration-none">About</a></li>
        <li><a href="pages/products.php" class="text-dark text-decoration-none">Products</a></li>
        <li><a href="pages/contact.php" class="text-dark text-decoration-none">Contact</a></li>

      </ul>
    </nav>
  </header>
   <main>
  <!-- Hero Banner -->
<section id="hero-banner" class="container">
  <div class="row align-items-center">
    
    <!-- Text on left -->
    <div class="col-md-6 hero-content mb-3">
      <h1>Welcome to my Kakanin Dishes!</h1>
      <p>
        Filipino kakanin are local rice or root crop delicacies included in the daily consumption 
        of Filipinos as snacks in between meals; however, the traditional methods and ingredients 
        utilized with this kakanin are gradually fading away because of modernization.
      </p>
    </div>

    <!-- Image on right -->
    <div class="col-md-6 hero-image d-flex gap-2 flex-wrap justify-content-end">
    <img src="images/asass.png" alt="Hero Image 1">
    <img src="images/wow.png" alt="Hero Image 2">
    </div>

  </div>
</section>



    <!-- Review Section -->
    <section class="review-cards container">
      <div class="review-heading text-center mb-5">
        <h1>Customers Review</h1>
      </div>
      <div class="reviewer">
        <div class="review-card">
          <img src="images/reyrey.jpg" alt="ReyAnn C Balo">
          <h3>ReyAnn C Balo</h3>
          <p>"The kakanin was absolutely delicious! Reminded of my lola's cooking."</p>
          <span>⭐⭐⭐⭐⭐</span>
        </div>
        <div class="review-card">
          <img src="images/kristina.jpg" alt="Kristina Ponteras">
          <h3>Kristina Ponteras</h3>
          <p>"Presentation and flavor were perfect. Highly recommended!"</p>
          <span>⭐⭐⭐⭐⭐</span>
        </div>
        <div class="review-card">
        <img src="images/gigi.jpg" alt="Gigi Hadid">       
           <h3>Gigi Hadid</h3>
          <p>"Great variety and authentic taste. I'll definitely order again!"</p>
          <span>⭐⭐⭐⭐⭐</span>
        </div>
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
