<?php

$name = "Gaurav";


function sayHello()
{
    echo "Hello " . $GLOBALS['name']; //$GLOBALS : Used to access global variable from anywhere in PHP.
    echo "<br>";
}

function printServer()
{
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
}

sayHello();
printServer();
