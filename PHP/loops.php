<?php

$number = 100;

echo "<br>FOR<br>";

for ($i=1; $i<=$number; $i++) {
    echo $i." ";
    if ($i == 60)
        break;
}

echo "<br>DO WHILE<br>";

$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 10);

echo "<br>WHILE<br>";

$a = 1;
while ($a <= 10) {
    echo $a . " ";
    $a++;
}

echo "<br>FOREACH<br>";

$students = array("Gaurav", "Hitesh", "Sarman");
$is = 1;
foreach ($students as $student) {
    echo "Student $is : $student"."<br>";
    $is++; 
}

?>