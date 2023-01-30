<<<<<<< HEAD
<?php


include "DatabaseConnection.php";

$showdata = 
"select employee.id,employee.name,employee.email,password,phone,profile,company.name as 'cname' from employee inner join company on employee.company_id = company.id";

$result = mysqli_query($conn, $showdata);


while($row = mysqli_fetch_array($result)){
 
    echo "<tr>";
    echo "<th scope='row'>";
    echo $row['id'];
    echo "</th>";
    echo "<td class='w-25'>";
    // echo '<img src="./images/';
    // echo $row['profile'];
    // echo ' " class="img-responsive">';
    echo"</td>";
    echo "<td>";
    echo $row['name'];
    echo "</td>";
    echo "<td>";
    echo $row['email'];
    echo "</td>";
    echo "<td>";
    echo $row['phone'];
    echo "</td>";
    echo "<td>";
    echo $row['cname'];
    echo "</td>";
    echo "<td>";
    echo "<a href = './index.php?id=$row[0]' id = 'atag'>Edit</a>";
    echo "</td>";
    echo "<td>";
    echo "<a href = './deletedata.php?id=$row[0]' id = 'atag'>Delete</a>";
    echo "</td>";
    echo "</tr>";
}




?>
=======

<?php

include 'DatabaseConnection.php';


?>

<div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Company</th>
                    <th scope="col" colspan="2" class="text-center">Action</th>
                    
                </tr>
            </thead>

            <tbody>

    


<?php
$select = "select company.name as cname,employee.id,employee.name as ename,email,phone,password,profile from employee inner join company on company.id = employee.company_id";
$selectresult = mysqli_query($conn, $select);

while ($row = mysqli_fetch_array($selectresult)) {
    echo "<tr>";
    echo "<th scope='row'>" . $row['id']. "</th>";
    echo "<td><img src='" . $row['profile'] ."' style = 'height: 50px; width: 50px; border-radius: 50%;'></td>";
    echo "<td>" . $row['ename'] ." </td>";
    echo "<td>" . $row['email'] ." </td>";
    echo "<td>" . $row['phone'] ." </td>";
    echo "<td>" . $row['cname'] ." </td>";
    echo "<td><button class='btn btn-dark' onclick='updateUser(".$row['id'].")'>Update</td>";
    echo "<td><button class='btn btn-danger' onclick='deleteUser(".$row['id'].")'>Delete</td>";
    echo "</tr>";
}
?>

</tbody>
</table>
</div>
   
>>>>>>> main
