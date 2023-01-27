<?php

$conn = new mysqli("localhost", "root", "root", "mydatabase");
if(!($conn)){
    echo "Not connected";
}

