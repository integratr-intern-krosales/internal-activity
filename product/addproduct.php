<?php include('../header.php') ?>
<div class="container">
    <form class="form" method="POST" action="actionproduct.php">
        <div class="mb-3"><label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3"><label for="gender" class="form-label">Price</label>
            <input type="text" class="form-control" id="gender" name="price">
        </div>
        <div class="mb-3"> <label for="place_of_birth" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="place_of_birth" name="quantity">
        </div>
        <input type="submit" name="submit_person" value="Store Product" class="btn btn-outline-primary">
    </form>
</div>
<?php include('../footer.php') ?>   