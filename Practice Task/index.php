<<<<<<< HEAD
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

=======
<?php
include 'DatabaseConnection.php';   
if(isset($_POST['id']))
$name = $_POST['name'];

$selectcompany = "select name from company";
$getresult = mysqli_query($conn, $selectcompany);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Details</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <!-- Modal -->
    <!-- Button trigger modal -->
    <div class="row h-100 d-flex align-items-center justify-content-center">
    <div class="col-md-4 col-lg-2 h-100 d-flex align-items-center justify-content-center" style="margin: 30px ; padding: auto;">
    <button type="button" class="btn btn-dark btn-block" data-bs-toggle="modal" data-bs-target="#employeemodal">Add Employee</button>
    </div>
  </div>

  <br><br><br>



    <!-- Modal -->
    <div class="modal fade" id="employeemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="myform" method="POST"  id="myform" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control"  id="name" name="name" placeholder="Enter Your Name" value="">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
                            <label for="company">Select Company:</label>
                            <select name="company" id="company">
                                <?php
                                while ($row = mysqli_fetch_array($getresult)) {
                                    ?>
                                <option><?php echo $row['name']?></option>
                                <?php }?>
                                
                            </select>
                            <br> <br>
                            <label for="file">Enter your profile</label>
                            <input type="file" class="form-control" name="file" id="file">
                            <input type="submit" name="submit" id="submit" class="btn btn-dark"></button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
    </div>


    <div class="modal fade" id="updatemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="updateform" method="POST"  id="updateform" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control"  id="updatename" name="updatename" placeholder="Enter Your Name">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="updateemail" id="updateemail" aria-describedby="emailHelp" placeholder="Enter Your Email">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="updatephone" name="updatephone" placeholder="Enter Your Phone">
                            
                            <label for="company">Select Company:</label>
                            <select name="updatecompany" id="updatecompany">
                            <?php
                            $getcompany = "select name from company";
                            $newresult = mysqli_query($conn, $getcompany);
                                while ($row2 = mysqli_fetch_array($newresult)) {
                            ?>
                                <option>
                                    <?php echo $row2['name']?>
                                </option>
                            <?php }?>
                            </select>
                            <br> <br>
                            <label for="file">Enter your profile</label>
                            <input type="file" class="form-control" name="updatefile" id="updatefile">
                            <input type="submit" name="update" id="update" value="Update" class="btn btn-dark"></button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <input type="hidden" name="hiddendata" id="hiddendata">
                    </form>

                </div>
            </div>

        </div>
    </div>
    </div>





    
        <div class="showData" id="showData"></div>

    

    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    
    <script>

        $(document).ready(function() {
            showData();
        });
            function showData() {
                $.ajax({
                    url: 'showdata.php',
                    type: 'POST',
                    success: function(data){
                        $("#showData").html(data);
                    }
                })
              }
            // Insert
            $("#myform").on("submit", function(e) {
                e.preventDefault();
                var formdata = new FormData(this);
                $.ajax({
                    url: "insertdata.php",
                    type: "POST",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data != 0) {
                            showData();
                            $("#employeemodal").modal('toggle');                            
                        } else {
                            alert("some error");
                            alert(data);
                        }
                    }
                });
            });

        function deleteUser(deleteid){
            $.ajax({
                url: 'deletedata.php',
                type: 'POST',
                data:{
                    deletesend:deleteid
                },
                success:function(data){
                    alert("Record Deleted Successfully");
                    showData();
                }
            });
        }

        function updateUser(updateId){
            $("#hiddendata").val(updateId);
           //alert(updateId);
            // $.post("./updatedata.php",{updateid:updateId},function(data,status){
            //     var userid = JSON.parse(data);
            //     alert(userid.name);
            //    
            // }); 
            
            $.ajax({
                url : "updatedata.php",
                type : "POST",
                data : {updateid:updateId},
                success : function(data)
                {
                    
                    var userid = JSON.parse(data);
                    console.log(userid.email);
                    $('#updatename').val(userid.name);
                    $('#updateemail').val(userid.email);
                    $('#updatephone').val(userid.phone);
                    $('#updatecompany').val(userid.company);
                    $('#updateprofile').val(userid.profile);
                }
            });

            $("#updateform").on("submit", function(e) {
                e.preventDefault();
                var formdata = new FormData(this);
                $.ajax({
                    url: "updatedata.php",
                    type: "POST",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data != 0) {
                            showData();
                            $("#updatemodal").modal('toggle');
                            console.log(data);                            
                        } else {
                            alert("some error");
                            alert(data);
                        }
                    }
                });
            });    


            $("#updatemodal").modal('show');
        }

        


        
    </script>
</body>

>>>>>>> main
</html>