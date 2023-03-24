<?php 
include_once("../connect.php");

if (isset ($_POST['submit_person'])){

    $name = $_POST ['name'];
    $quantity = $_POST ['quantity'];
    $price = $_POST ['price'];
   

    $sql = "INSERT INTO products (name, quantity, price) VALUES
    ('$name', '$quantity', '$price')";

    $query = $conn->query($sql) or die($conn->error);

    $_SESSION['sucess'] = "Product sucessfully added";
    header("Location: ../product.php");
}