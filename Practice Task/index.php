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
" alt="
<body>
  

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-image table-striped">
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
                    <tbody>
                        
                           <?php include "ShowData.php" ?>
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./insertdata.php" method="POST" enctype="multipart/form-data">
                    <center><h3>Employee Information</h3></center>
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required />

                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required />
                    </div>

                    <!-- Phone input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" maxlength="10" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Enter Profile Pic</label>
                        <input type="file" id="profile" name="profile" class="form-control" required/>
                    </div>

                    <!-- Company input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Company Information</label>
                        <select class="form-select" id="company" name="company" required>
                            <option selected="true" disabled="disabled">Select Company</option>
                            <option>Zignuts</option>
                            <option>Gateway</option>
                            <option>Infosys</option>
                        </select>
                    </div>
                    
                    <button type="submit" id="submit" name="submit" class="btn form-control btn-primary">Submit</button>
              
                </form>

            </div>
        </div>
    </div>




    <script src="./js/javascript.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>