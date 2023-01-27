<?php

include_once './DatabaseConnection.php';
$updateid = $_GET['id'];


$updatequery = "update employee set name='$name',email='$email',phone=$phone,profile='$myimage2',password='$password' company_id='$companyid' where id = $updateid ";
$result = mysqli_query($conn, $updatequery);






if($result){
    echo "Record Updated Successfully";
}
else{
    echo "Record Not Updated";
}

?>


?>
