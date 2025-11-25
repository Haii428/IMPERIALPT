<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="font-family: Arial, Helvetica, sans-serif; background-color:#E4EFE7;">

<!-- Header -->
<header id="header" style="background-color:#99BC85; padding:10px 0;">
  <nav class="container d-flex justify-content-between align-items-center">
    <img src="../images/SHH.png" alt="Logo" class="logo" style="height:80px;">
    <h1 class="m-0">Sugbo's Sweet Treats</h1>
    <ul class="nav">
      <li class="nav-item"><a href="../home.php" class="nav-link fw-bold text-dark">Home</a></li>
      <li class="nav-item"><a href="about.php" class="nav-link fw-bold text-dark">About</a></li>
      <li class="nav-item"><a href="products.php" class="nav-link fw-bold text-dark">Products</a></li>
      <li class="nav-item"><a href="contact.php" class="nav-link fw-bold text-dark">Contact</a></li>
    </ul>
  </nav>
</header>

<!-- Main Order Form -->
<main class="container my-5">
  <div class="card mx-auto" style="max-width:500px; padding:30px; box-shadow: 0 2px 8px rgba(0,0,0,0.2); border-radius:10px;">
    <h3 class="text-center mb-4">Order Details</h3>

    <form action="submit_order.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" id="name" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" id="date" name="date" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" id="address" name="address" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" id="phone" name="phone" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" id="quantity" name="quantity" class="form-control" min="1" value="1" required>
      </div>

      <div class="mb-3">
        <label for="payment" class="form-label">Payment Option</label>
        <select id="payment" name="payment" class="form-select" required>
          <option value="Cash on Delivery">Cash on Delivery</option>
          <option value="Gcash">Gcash</option>
          <option value="PayPal">PayPal</option>
        </select>
      </div>

      <div class="d-grid gap-2 mt-4">
        <button type="submit" class="btn btn-dark fw-bold">Submit Order</button>
        <a href="products.php" class="btn btn-secondary fw-bold">Cancel Order</a>
      </div>
    </form>
  </div>
</main>

<footer style="background-color:#99BC85; padding:10px 0;">
  <p class="text-center m-0">© 2025 - Kakanin Dishes. All rights reserved.</p>
</footer>

</body>
</html>
