<?php

include 'DatabaseConnection.php';
if(isset($_POST['updateid'])){
    $id = $_POST['updateid'];
    $sql = "select employee.id,company.name,employee.name,email,phone,profile from employee join company on employee.company_id=company.id where employee.id = $id";
    $result = mysqli_query($conn,$sql);
    $response = array(); 
    $response = mysqli_fetch_assoc($result);
    echo json_encode($response);
}
else if(isset($_POST['hiddendata'])){  
        $uid = $_POST['hiddendata'];
    
        $name = $_POST['updatename'];
        $email = $_POST['updateemail'];
        $phone = $_POST['updatephone'];
        $company = $_POST['updatecompany'];
        $filename = $_FILES['updatefile']['name'];
        $filetemp = $_FILES['updatefile']['tmp_name'];
        $folder = "./images/".$filename;
        move_uploaded_file($filetemp,$folder);
        $company_id = '';

        $getid = mysqli_query($conn, "select id from company where name = '$company'");
        while ($row = $getid->fetch_assoc()) {
            // echo $row['id']."<br>";
            $GLOBALS['company_id'] = $row['id'];
        }
        

        $updateq = "update employee set name = '$name', email = '$email', phone = $phone, profile = '$folder', company_id = $company_id where id = $uid";

        $updateresult = mysqli_query($conn,$updateq);

        if(!$updateresult){
            echo $updateq;
        }
        else{
            echo $updateq;
        }
}
else{
    echo "aa";
}
    

?>
