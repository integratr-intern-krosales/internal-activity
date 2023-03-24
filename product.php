<?php include ('header.php')?>
<div class="container">
<?php 
    $query = $conn->query("SELECT * FROM products");
?>
<table class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity/ Stocks</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <?php
     while ($product = $query->fetch_assoc()){
        echo "<tr> 
            <td>" .$product['id'] . "</td>
            <td>" .$product['name'] . "</td>
            <td>" .$product['price'] . "</td>
            <td>" .$product['quantity'] . "</td>
            <td></td>
        </tr>";
     }
     $conn->close();
    ?>
</table>
    <a class="btn btn-outline-primary" href="product/addproduct.php">Add Product</a>
</div>
<?php include ('footer.php')?>