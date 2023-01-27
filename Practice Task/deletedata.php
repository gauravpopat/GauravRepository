<?php
include_once './DatabaseConnection.php';

$id = $_GET['id'];

$deletequery = "delete from employee where id = $id";
$result = mysqli_query($conn, $deletequery);
if($result){
    header('location: index.php');
}
else{
    $conn->error;
}



?>