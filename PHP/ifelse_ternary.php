<?php

$name = "Gaurav";
$name2 = "ABCD";
$age = 22;

if ($age > 20 and $age < 25) {
    if ($name == "Gaurav" or $name2=="ABCD")
        echo "Age " . $age . " is allowed..";
    else 
        echo "Age " . $age . " is not allowed..";
}


echo "<br>Ternary Operator -> Age : $age -> ";

echo ($age > 20) ? "Greater than 20" : "Less than 20";



?>