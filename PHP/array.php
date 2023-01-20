<?php

//Indexed array
$books = array("PHP", "Laravel", "Android", "Kotlin", "Java", "SQL", "HTMLCSS");

echo (count($books));
echo "<br>";
echo $books[0];
echo "<br>";
echo "<br>";

foreach ($books as $book) {
    echo $book . " ";
}

//Associative array
echo "<br>";
$marks = array("Gaurav" => 70, "Jay" => 69, "Ruchit" => 68);

echo (count($marks));
echo "<br>";
echo $marks["Gaurav"];
echo "<br>";

foreach ($marks as $k => $v) {
    echo "Student : $k, Marks : $v <br>";
}

//

$employee = array(
    array(1, "Gaurav", "300000"),
    array(2, "Sarman", "300000"),
    array(3, "Hitesh", "300000"),
    array(4, "Dharmik", "300000"),
);

for($row=0;$row<3;$row++){
    echo "<br>";
    for($col=0;$col<3;$col++){
        echo $employee[$row][$col]." ";
    }
}

?>

