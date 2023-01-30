
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
   