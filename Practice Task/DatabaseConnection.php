<?php

<<<<<<< HEAD
$conn = new mysqli("localhost", "root", "root", "mydatabase");
if(!($conn)){
    echo "Not connected";
}

=======
    $conn = mysqli_connect("localhost","root","root","mydatabase");

    if(!$conn){
        echo "Not Connected";
    }


?>
>>>>>>> main
