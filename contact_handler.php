<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST["firstName"];
    $lastName  = $_POST["lastName"];
    $email     = $_POST["email"];
    $subject   = $_POST["subject"];
    $message   = $_POST["message"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Message Received</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #E4EFE7;
      padding: 40px;
    }
    .thank-you-box {
      max-width: 600px;
      margin: auto;
      background-color: #99BC85;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 10px 2px 8px rgba(0,0,0,0.1);
      text-align: center;
    }
    h2 {
      color: #fff;
    }
    p {
      color: #151515;
    }
  </style>
</head>
<body>
  <div class="thank-you-box">
    <h2>Thank you, <?php echo htmlspecialchars($firstName); ?>!</h2>
    <p>We received your message:</p>
    <p><strong>Subject:</strong> <?php echo htmlspecialchars($subject); ?></p>
    <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($message)); ?></p>
    <p>We’ll reply to <strong><?php echo htmlspecialchars($email); ?></strong> soon.</p>
  </div>
</body>
</html>
