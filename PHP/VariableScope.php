<?php

/*
Note:

Global Varible : Declare Outside of the function and can not be access within function.
$global keyword is used to access global var from within function.
Php stores all global variables in array called $GLOBALS[indec].

Local Variable : Declare within function and can not be access outside the function.

Static keyword : After excecution all the variables are deleted but if want a local variable that NOT be deleted then static keyword is used

*/


//Global Scope
$name = "Gaurav";

// We can not access global variable inside the funcion.
function printName(){
    // using $name will generate the error becoz its global
    // echo "<h4>Hello I'm $name</h4>";
    echo "Printing name with GLOBALS : ".$GLOBALS['name']."<br>";
    global $name;
    echo "Printing name with global keyword : " . $name;
}

function printCity(){
    $city = "Rajkot"; // Local Scope
    echo "I am from $city";
}

function printNumbers(){
    static $x = 0; //After excecution var val can not be deleted
    echo $x;
    $x++;
}

printName();
echo "<h4>Hello I'm $name</h4>";
printCity();
//It will generete error becoz $city has local scope
//echo $city;
echo "<br>";

for ($i=1; $i<=5; $i++) { 
    printNumbers();
}


?>