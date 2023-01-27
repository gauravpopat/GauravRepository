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
    echo '<img src="./images/';
    echo $row['profile'];
    echo ' " class="img-responsive">';
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