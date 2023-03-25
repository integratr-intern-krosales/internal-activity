<?php 
include_once("../connect.php");

$name = $_POST ['name'];
$quantity = $_POST ['quantity'];
$price = $_POST ['price'];


if (isset ($_POST['submit_product'])){
    $sql = "INSERT INTO products (name, quantity, price) VALUES
    ('$name', '$quantity', '$price')";

    $query = $conn->query($sql) or die($conn->error);

    $_SESSION['sucess'] = "Product sucessfully added";
    
} else if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $sql = "UPDATE products set name='$name',
    quantity='$quantity',
     price='$price' WHERE id=$id";

    $query = $conn->query($sql) or die($conn->error);
    $_SESSION['sucess'] = "Product sucessfully updated";
    
}
header("Location: ../product.php");
exit();