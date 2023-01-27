<?php

include_once 'DatabaseConnection.php';

/* $id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from employee where id = $id";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $name = $row[1];
        $email = $row[2];
        $phone = $row[4];
        $profile = $row[5];
    }
}

if (isset($_POST['submit'])) {
    $nametext = $_POST['name'];
    $emailtext = $_POST['email'];
    // $passwordtext = $_POST['password'];
    $phonetext = $_POST['phone'];
    $profiletext = $_FILES['profile']['name'];
    $company = $_POST['company'];
    $companyidtext = '';
    $getid = mysqli_query($conn, "select id from company where name = '$company'");
    while ($row = $getid->fetch_assoc()) {
        // echo $row['id']."<br>";
        $GLOBALS['companyidtext'] = $row['id'];
    }
    $id = $_POST['id'];
    $query = "update employee set name = '$nametext', email = '$emailtext', phone = $phonetext, profile = '$profiletext', company_id = $companyidtext where id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo $query;
    }
}
*/

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Details</title>
    <link rel="stylesheet" href="./css/mycss.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <center>
                    <h4><u>Employee Information</u></h4>
                </center>
                <table id="mytable" class="table table-image table-striped">

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Company</th>

                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="filldata">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                if (isset($_GET['id'])) {
                    $url = "./index.php";
                } else {
                    $url = "./insertdata.php";
                }
                ?>
             
                <form id="form"  enctype="multipart/form-data">
                    <center>
                        <h4><u>Fill Up Details</u></h4>
                    </center>

                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Name</label>
                        <input type="text" id="name" <?php if (isset($_GET['id'])) { ?> value="<?php echo $name ?>" <?php } ?> name="name" class="form-control" required />

                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Email address</label>
                        <input type="email" id="email" <?php if (isset($_GET['id'])) { ?> value="<?php echo $email ?>" <?php } ?> name="email" class="form-control" required />
                    </div>

                    <?php
                    if (!(isset($_GET['id']))) { ?>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required />
                        </div>
                    <?php } ?>

                    <!-- Phone input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Phone Number</label>
                        <input type="tel" id="phone" name="phone" <?php if (isset($_GET['id'])) { ?> value="<?php echo $phone ?>" <?php } ?> class="form-control" maxlength="10" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Enter Profile Pic</label>
                        <input type="file" id="profile" name="profile" <?php if (isset($_GET['id'])) { ?> value="<?php echo $profile ?>" <?php } ?> class="form-control" required />
                    </div>

                    <!-- Company input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Company Information</label>
                        <select class="form-select" id="company" name="company" required>
                            <option selected="true" disabled="disabled">Select Company</option>
                            <?php

                            $query = "select name from company";

                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option>';
                                echo $row['name'];
                                echo "</option>";
                            } ?>
                        </select>
                    </div>

                    <?php
                    if (isset($_GET['id'])) {
                        $value = "Update";
                        $id = $_GET['id'];
                    } else {
                        $value = "Insert";
                    }
                    ?>

                    <?php if (isset($_GET['id'])) { ?>
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <?php } ?>

                    <button type="submit" id="submit" name="submit" class="btn form-control btn-primary"><?php echo $value ?></button>

                    <button id="displaydata">displaydata</button>

                </form>

            </div>
        </div>
    </div>
                    
    






    
    
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script>




        $(document).ready(function(e){

            function displayData(){
                $.ajax({
                    url : 'showdata.php',
                    type : 'post',
                    success : function(result_data){
                        $('#filldata').html(result_data);
                    }
                });

            }
            displayData();

           $('#submit').on("click",function(e)
           {
            e.preventDefault();
           // alert('Click');
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var password = $("#password").val();
            var company = $("#company").val();
            $.ajax({
                url: "insertdata.php",
                type: "POST",
                data: {
                    name:name,
                    email: email,
                    phone: phone,
                    password: password,
                    company: company
                },
                success: function(result_data){
                    displayData();
                }
            });
           })
        });

    </script>
    

</body>

</html>