<?php include('../header.php') ?>

<div class="container">
    <form class="form" method="POST" action="actionproduct.php">
        <div class="mb-3"><label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3"><label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3"> <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>
        <input type="submit" name="submit_product" value="Store Product" class="btn btn-outline-primary">
    </form>
</div>
<?php include('../footer.php') ?>   