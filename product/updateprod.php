<?php include('../header.php') ;
$query = $conn->query("SELECT * FROM products where id=" . $_GET['id']) or die($conn->error);
$result = $query->fetch_assoc()
?>

<div class="container">
    <form class="form" method="POST" action="actionproduct.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <div class="mb-3"><label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" 
            name="name" value="<?php echo $result['name'] ?>">
        </div>
        <div class="mb-3"><label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="gender" 
            name="quantity" value="<?php echo $result['quantity'] ?>">
        </div>
        <div class="mb-3"> <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price"
             name="price" value="<?php echo $result['price'] ?>">
        </div>
        <input type="submit" name="update_product" value="Update Product" class="btn btn-outline-primary">
</div>
    </form>  
<?php include('../footer.php') ?>