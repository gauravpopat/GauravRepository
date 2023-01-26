<?php

include './DatabaseConnection.php';





$iquery = "insert into employee(name,email,password,phone,profile,company_id) values('$name','$email','$password',$phone,'$myimage2',$companyid)";
$result = mysqli_query($conn, $iquery);
if($result){
    header('location: index.php');
    echo "<script>
    document.getElementById('msg').innerHTML = 'Record Inserted';
    </script>";
}
else{
    echo $iquery;
    echo $conn->error;
}



?>