<?php

include "DatabaseConnection.php";


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$filename = $_FILES['file']['name'];
$filetemp = $_FILES['file']['tmp_name'];

$simplepassword = $_POST['password'];
$password = password_hash($simplepassword, PASSWORD_DEFAULT);

$folder = "./images/".$filename;
move_uploaded_file($filetemp,$folder);
$company_id = '';

$getID = "select id from company where name = '$company'";
$result = mysqli_query($conn,$getID);
while($row = mysqli_fetch_array($result)){
    $GLOBALS['company_id'] = $row['id'];
}

$insertq = "insert into employee(name,email,phone,password,profile,company_id) values('$name','$email',$phone,'$password','$folder',$company_id)";
$insertresult = mysqli_query($conn,$insertq);

if(!$insertresult){
    echo $insertq;
}
else{
    echo $insertq;
}


// if(){
//     echo "<img src='$folder' height='200px' width='200px'>";
// }




?>