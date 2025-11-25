<?php
session_start();
include 'db_connect.php';

// Show success messages from signup or forgot password
$message = "";
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // remove after showing once
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            $_SESSION["username"] = $user["username"];
            header("Location: home.php");
            exit();
        } else {
            $message = "Wrong password!";
        }
    } else {
        $message = "No account found with that email!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php if ($message): ?>
  <div class="alert alert-info text-center"><?php echo $message; ?></div>
<?php endif; ?>

  <div class="form-box">
   <img src="images/SHH.png" class="mx-auto d-block mb-3" width="100" alt="Logo">
<h3 class="text-center mb-3">Login</h3>

    <form method="POST">
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-custom w-100">Log In</button>
      <div class="mt-3">
        <a href="forgot_password.php">Forgot password?</a>
      </div>
      <p class="mt-2">Don’t have an account? <a href="signup.php">Sign Up</a></p>
    </form>
  </div>
</body>
</html>
