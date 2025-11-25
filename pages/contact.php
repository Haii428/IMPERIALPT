<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTACT</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Body */
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #E4EFE7;
      overflow-x: hidden;
    }

    /* Header / Navbar */
    #header {
      background-color: #99BC85;
    }
    .navbar img.logo {
      max-height: 120px;
      width: 120px;
    }
    .nav-links li {
      list-style: none;
    }
    .nav-links a {
      text-decoration: none;
      color: #151515;
      font-weight: bold;
    }

    /* Contact Section */
    #contact {
      padding: 80px 20px;
      background-color: #E4EFE7;
    }
    .contact-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 24px;
    }
    form {
      width: 100%;
      max-width: 500px;
      background-color: #99BC85;
      border-radius: 24px;
      padding: 24px;
      display: flex;
      flex-direction: column;
      gap: 16px;
      box-shadow: 10px 2px 8px rgba(0, 0, 0, 0.1);
    }
    .form-row {
      display: flex;
      gap: 10px;
    }
    .form-group {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 6px;
    }
    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 8px 10px;
      border-radius: 4px;
      border: 1px solid #E4EFE7;
    }
    .form-group label {
      color: #151515;
    }

    /* Button */
    .primary-button {
      background-color: #333333;
      padding: 10px;
      border: none;
      border-radius: 5px;
      color: #fff;
      width: 100%;
      cursor: pointer;
      transition: 0.2s ease-in-out;
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

    /* Responsive */
    @media only screen and (max-width: 768px) {
      .form-row {
        flex-direction: column;
        gap: 16px;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header id="header">
    <nav class="navbar container d-flex justify-content-between align-items-center">
      <img src="../images/SHH.png" class="logo" alt="Logo">
      <h1>Sugbo's Sweet Treats</h1>
      <input type="checkbox" id="menu-toggle" class="d-none">
      <label for="menu-toggle" class="d-block d-md-none fs-2">☰</label>
      <ul class="nav-links d-flex gap-3 list-unstyled mb-0">
         <li><a href="../home.php">Home</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="products.php">Products</a></li>
         <li><a href="contact.php" class="fw-bold text-dark">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Contact Form -->
  <main>
    <section id="contact">
      <div class="container contact-container">
        <h1 class="text-center mb-4">Send a Message</h1>
        <form action="../contact_handler.php" method="post"> <!-- ✅ FIXED path -->
          <div class="form-row">
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Enter subject" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Enter message" rows="5" required></textarea>
          </div>

          <button class="primary-button" type="submit">Send Message</button>
        </form>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="footer">
    <p>© 2025 - Kakanin Dishes. All rights reserved.</p>
  </footer>

</body>
</html>
