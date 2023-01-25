<?php

    $conn = new mysqli("localhost", "root", "root", "mydatabase");
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
      }

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $profile = $_POST['profile'];
    $company = $_POST['company'];
    $path = "./images/" . $profile;
    $companyid = '';
    
    //Retrive Company ID From Name
    $getid = mysqli_query($conn, "select id from company where name = '$company'");
     while ($row = $getid->fetch_assoc()) {
        // echo $row['id']."<br>";
        $GLOBALS['companyid'] = $row['id'];
    }



    $insertquery = "insert into employee(name,email,password,phone,profile,company_id) values('$name','$email','$password',$phone,'$path',$companyid)";
    $insert = mysqli_query($conn,$insertquery);

    if($insert){
        echo "Record Inserted Successfully";
    }
    else{
        echo $insertquery;
    }

   
}


?>