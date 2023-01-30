<?php

include 'DatabaseConnection.php';
$id = $_POST['deletesend'];

$deletequery = "delete from employee where id = $id";
$result = mysqli_query($conn,$deletequery);

?>