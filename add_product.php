<?php
include 'firebase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    addProduct($name, $price);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h2>Thêm sản phẩm</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Tên sản phẩm" required>
        <input type="number" name="price" placeholder="Giá sản phẩm" required>
        <button type="submit">Thêm</button>
    </form>
    <br>
    <a href="index.php">Quay lại</a>
</body>
</html>
