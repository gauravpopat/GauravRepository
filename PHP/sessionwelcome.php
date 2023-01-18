<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];

    
    if((is_null($name) and is_null($password))!=1){
        session_start();
        echo "Login Successfully $name <br>";
        echo "<a href = 'sessionlogout.php' target='_blank'>Logout</a>";
    }
    else{
       
    }


    
    ?>
</body>
</html>