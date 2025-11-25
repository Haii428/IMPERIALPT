<?php
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];
    $payment = $_POST['payment'];

    $price_per_item = 50;
    $total_price = $quantity * $price_per_item;

   $sql = "INSERT INTO orders (customer_name, phone, address, quantity, total_price, order_date, payment)
        VALUES ('$name', '$phone', '$address', '$quantity', '$total_price', '$date', '$payment')";


    if ($conn->query($sql) === TRUE) {
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
