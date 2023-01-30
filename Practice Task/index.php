<?php
include 'DatabaseConnection.php';
if (isset($_POST['id'])) {

    $name = $_POST['name'];
}


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

<body style="margin: 4%;">
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
                    <h5 class="modal-title" id="exampleModalLabel">Fill the information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="myform" method="POST"  id="myform" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control"  id="name" name="name" placeholder="Enter Your Name" value="" required>
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email" required>
                            <label for="phone">Phone</label>
                            <input type="tel" pattern="[0-9]{10}" required class="form-control" id="phone" name="phone" placeholder="Enter Your Phone">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" required id="password" name="password" placeholder="Enter Your Password">
                            <label for="company">Select Company:</label>
                            <select name="company" id="company" required>
                                <?php
                                while ($row = mysqli_fetch_array($getresult)) {
                                    ?>
                                <option><?php echo $row['name']?></option>
                                <?php }?>
                                
                            </select>
                            <br> <br>
                            <label for="file">Enter your profile</label>
                            <input type="file" class="form-control" required name="file" id="file">
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
                    <h4 class="modal-title" id="exampleModalLabel">Update Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="updateform" method="POST"  id="updateform" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control"  id="updatename" name="updatename" placeholder="Enter Your Name" required>
                            <label for="email">Email</label>
                            <input type="email" required class="form-control" name="updateemail" id="updateemail" aria-describedby="emailHelp" placeholder="Enter Your Email">
                            <label for="phone">Phone</label>
                            <input type="tel" required autofocus title="Please enter valid 10 digit number" pattern="[0-9]{10}" class="form-control" id="updatephone" name="updatephone" placeholder="Enter Your Phone">

                            <label for="company">Select Company:</label>
                            <select name="updatecompany" id="updatecompany" required>
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
                            <input type="file" class="form-control" name="updatefile" id="updatefile" required>
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
            if(confirm("Are you sure ?")==true){
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
                    $('#updatefile').val(userid.profile);
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

</html>