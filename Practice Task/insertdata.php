<<<<<<< HEAD
<?php

include './DatabaseConnection.php';

        $name = $_POST['name'];
        $email = $_POST['email'];
        $textpassword = $_POST['password'];
        $password = password_hash($textpassword, PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $company = $_POST['company'];
        $companyid = '';
        //$myimage2 = '';

       // $profile_name = $_FILES['profile']['name'];
       // $profile_size = $_FILES['profile']['size'];
       // $profile_type = $_FILES['profile']['type'];
       // $profile_temp_name = $_FILES['profile']['tmp_name'];
       // $GLOBALS['profile_main_path'] = "/Users/ztlab118/Desktop/Gaurav/Practice Task/images/" . $profile_name;
      //  move_uploaded_file($profile_temp_name, $profile_main_path);

        // $cutvalue = strpos($profile_main_path, "images/");
        // $GLOBALS['myimage'] =  substr($profile_main_path, $cutvalue);

        //$GLOBALS['myimage2'] = $_FILES['profile']['name'];

        //Retrive Company ID From Name
        $getid = mysqli_query($conn, "select id from company where name = '$company'");
        while ($row = $getid->fetch_assoc()) {
            // echo $row['id']."<br>";
            $GLOBALS['companyid'] = $row['id'];
        }

        //companyid -> id of that inputed company


        // $iquery = "insert into employee(name,email,password,phone,profile,company_id) values('$name','$email','$password',$phone,'$myimage2',$companyid)";


        $iquery = "insert into employee(name,email,password,phone,company_id) values('$name','$email','$password',$phone,$companyid)";
        echo "Data base Query :: $iquery";
        $result = mysqli_query($conn, $iquery);
        if($result){
        //    header('location: index.php');
        //     echo "<script>
        //     document.getElementById('msg').innerHTML = 'Record Inserted';
        //     </script>";
            
        }
        else{
            echo $iquery;
            echo $conn->error;
            
        }



=======
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




>>>>>>> main
?>