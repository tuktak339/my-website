<?php
include 'firebase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    deleteProduct($id);
    header("Location: index.php");
    exit();
}
?>
