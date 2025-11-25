<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Order Confirmation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #E4EFE7;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
    }
    #header { background-color: #99BC85; }
    .navbar img.logo { max-height: 120px; width: 120px; }
    main.container { flex: 1; display: flex; justify-content: center; align-items: center; padding: 60px 20px; }
    .card { max-width: 500px; padding: 40px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.2); background-color: white; text-align: center; }
    #footer { background-color: #99BC85; padding: 10px 0; }
  </style>
</head>
<body>

<header id="header">
  <nav class="navbar container d-flex justify-content-between align-items-center">
    <img src="../images/SHH.png" class="logo" alt="Logo">
    <h1 class="m-0">Sugbo's Sweet Treats</h1>
    <ul class="nav">
      <li><a href="../home.php" class="nav-link fw-bold text-dark">Home</a></li>
      <li><a href="about.php" class="nav-link fw-bold text-dark">About</a></li>
      <li><a href="products.php" class="nav-link fw-bold text-dark">Products</a></li>
      <li><a href="contact.php" class="nav-link fw-bold text-dark">Contact</a></li>
    </ul>
  </nav>
</header>

<main class="container">
  <div class="card">
    <h2 class="mb-4">Order Sent!</h2>
    <p class="mb-4">Thank you for your order. We’ll get back to you soon!</p>
    <a href="products.php" class="btn btn-success fw-bold">Back to Products</a>
  </div>
</main>

<footer id="footer">
  <div class="container">
    <p class="text-center m-0 fw-semibold">© 2025 - Kakanin Dishes. All rights reserved.</p>
  </div>
</footer>

<!-- Redirect after 5 seconds -->
<script>
  setTimeout(() => {
    window.location.href = "products.php";
  }, 5000);
</script>

</body>
</html>
