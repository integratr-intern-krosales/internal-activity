<?php include ('header.php')?>
<div class="container">
<?php 
    $query = $conn->query("SELECT * FROM persons");
?>
    <table class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Birthday</th>
        <th scope="col">Birthplace</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <?php
     while ($person = $query->fetch_assoc()){
        $id= $person['id'];
        echo "<tr> 
            <td>" .$person['id'] . "</td>
            <td>" .$person['name'] . "</td>
            <td>" .$person['gender'] . "</td>
            <td>" .$person['birthday'] . "</td>
            <td>" .$person['place_of_birth'] . "</td>
            <td> <a href ='person/update.php?id=$id' class='btn
            btn-outline-primary'> Update </a>&nbsp;
            <a href ='person/delete.php?id=$id' class='btn
            btn-outline-danger' onclick='return confirm(\"Are you want to delete this record?\")'>
             Delete </a></td>
        </tr>";
     }
     $conn->close();
    ?>
    </table>
    <a class="btn btn-outline-primary" href="person/add.php">Add person</a>
</div>
<?php include ('footer.php')?>