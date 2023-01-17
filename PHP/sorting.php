<?php

function printUni(){
    global $universities;
    foreach ($universities as $university) {
        echo $university . " ";
    }
    echo "<br>";
}

function printScl(){
    global $schools;
    echo "<br>";
    foreach($schools as $name=>$city){
        echo "NAME : $name, CITY : $city";
        echo "<br>";
    }
    
}

$universities = array("Atmiya", "Marwadi", "Darshan", "Parul");
printUni();
sort($universities);
printUni();
rsort($universities);
printUni();


$schools = array("Yogidham" => "Rajkot", "Tapovan" => "Ahmedabad", "Akshar" => "Gandhinagar");
printScl();
asort($schools); //as.ar assending as per value
printScl();
ksort($schools); //as.ar assending as per key
printScl();
arsort($schools); //as.ar desending as per value
printScl();
krsort($schools); //as.pr dessending as per key
printScl();



?>