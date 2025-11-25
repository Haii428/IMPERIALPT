<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $newpass = $_POST["newpass"];
    $confirmpass = $_POST["confirmpass"];

    if ($newpass === $confirmpass) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $hashed = password_hash($newpass, PASSWORD_DEFAULT);
            $update = "UPDATE users SET password='$hashed' WHERE email='$email'";
            if ($conn->query($update) === TRUE) {
                $_SESSION['message'] = "Your password has been reset successfully!";
                header("Location: login.php");
                exit();
            } else {
                echo "<script>alert('Something went wrong.');</script>";
            }
        } else {
            echo "<script>alert('No account found with that email.');</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-box">
    <img src="images/SHH.png" class="mx-auto d-block mb-3" width="100" alt="Logo">
<h3 class="text-center mb-3">Forgot Password</h3>

    <form method="POST">
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
      </div>
      <div class="mb-3">
        <input type="password" name="newpass" class="form-control" placeholder="Enter new password" required>
      </div>
      <div class="mb-3">
        <input type="password" name="confirmpass" class="form-control" placeholder="Confirm new password" required>
      </div>
      <button type="submit" class="btn btn-custom w-100">Save</button>
      <p class="mt-3"><a href="login.php">Back to Login</a></p>
    </form>
  </div>
</body>
</html>
