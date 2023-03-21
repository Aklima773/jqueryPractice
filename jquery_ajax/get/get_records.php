<?php 

$db= new mysqli("localhost", "root", "", "jquery");

$sql = "SELECT * FROM  jqury";

$result =$db->query($sql);

if($result->num_rows > 0) : ?>


    <table border="1">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>

    </tr>

    <?php 
    while($row = mysqli_fetch_assoc($result)):?>

    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['address'] ?></td>
        <td><?= $row['phone'] ?></td>

    </tr>

    <?php endwhile;
    endif;

    ?>

</table>
    
