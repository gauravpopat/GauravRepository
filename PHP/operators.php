<?php

function addBreak()
{
    echo "<br><br>";
}

/***********************************Arithmetic Operators******************************************/

$x = 12;
$y = 5;
echo ($x + $y);
addBreak();
echo ($x - $y);
addBreak();
echo ($x * $y);
addBreak();
echo ($x / $y);
addBreak();
echo ($x % $y);
addBreak();

/**************************Logical or Relational Operators******************************************/

$age1 = 18;
$age2 = 15;

if ($age1 == 18 and $age2 == 18)
    echo "and Success" . "<br>";

if ($age1 == 18 or $age2 == 18)
    echo "or Success" . "<br>";

if ($age1 == 18 xor $age2 == 18)
    echo "xor Success" . "<br>";

if ($age1 == 18 && $age2 == 18)
    echo "&& Success" . "<br>";

if ($age1 == 18 || $age2 == 18)
    echo "|| Success" . "<br>";

if ($age1 != 15)
    echo "! Success" . "<br>";

/***********************************Comparision Operators******************************************/


$a = 80;
$b = 50;
$c = "80";

addBreak();
var_dump($a == $c);
addBreak();
var_dump($a != $b);
addBreak();
var_dump($a <> $b);
addBreak();
var_dump($a === $c);
addBreak();
var_dump($a !== $c);
addBreak();
var_dump($a < $b);
addBreak();
var_dump($a > $b);
addBreak();
var_dump($a <= $b);
addBreak();
var_dump($a >= $b);
addBreak();

/***********************************Assignment Operators******************************************/

// Assign the value
$v1 = 75;
echo $v1;
addBreak();

// Add then assign
$v2 = 100;
$v2 += 200;
echo $v2;
addBreak();

// Subtract then assign
$y = 70;
$y -= 1;
echo $y;
addBreak();

// Multiply then assign
$y = 30;
$y *= 20;
echo $y;
addBreak();

// Divide then assign
$y = 100;
$y /= 5;
echo $y;
addBreak();

// Divide then assign
$y = 50;
$y %= 5;
echo $y;
addBreak();

/***********************************Incr/Decr Operators******************************************/

$x = 2;
echo ++$x, " First increments then prints \n";
echo $x;
addBreak();

$x = 2;
echo $x++, " First prints then increments \n";
echo $x;
addBreak();

$x = 2;
echo --$x, " First decrements then prints \n";
echo $x;
addBreak();

$x = 2;
echo $x--, " First prints then decrements \n";
echo $x;
addBreak();

/***********************************String Operators******************************************/

$s1 = "Atmiya";
$s2 = "University";
$s3 = "Rajkot";

echo $s1 . $s2 . $s3;
addBreak();
$s1 .= " ".$s2 ." ". $s3;
echo $s1;

/***********************************Array Operators******************************************/
$x = array("k" => "Car", "l" => "Bike");
$y = array("a" => "Train", "b" => "Plane");

var_dump($x + $y);
addBreak();
var_dump($x == $y);
addBreak();
var_dump($x != $y);
addBreak();
var_dump($x <> $y);
addBreak();
var_dump($x === $y);
addBreak();
var_dump($x !== $y);
addBreak();

/***********************************Ternory Operators******************************************/

$num1 = -1;

echo "Entered no is $num1";
echo "<br>";
echo ($num1 >= 0) ? "Number is positive" : "Number is negative";