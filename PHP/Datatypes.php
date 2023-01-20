<?php 

/* 
    Data Types
    -String
    -Integer
    -Float -> Also Called Double
    -Boolean
    -Array
    -Object
    -NULL
    -Resource
*/


function addBreak(){
    echo "<br>"."<br>";
}


$string = "Hello World!";
echo $string;
addBreak();
var_dump($string);
addBreak();

$integer = 22;
echo $integer;
addBreak();
var_dump($integer);
addBreak();

$float = 3.14;
echo $float;
addBreak();
var_dump($float);
addBreak();

$bool1 = true;
$bool2 = false;
echo $bool1 . " " . $bool2;
addBreak();
var_dump($bool1);
addBreak();
var_dump($bool2);
addBreak();

$cities = array("Rajkot", "Ahmedabad", "Gandhinagar");
addBreak();
var_dump($cities);
addBreak();

$teaorcoffie = "Tea";
$teaorcoffie = null;
var_dump($teaorcoffie);
addBreak();


//Object Var
class A{
    public $pcname;
    public function __construct($pcname)
    {
        $this->pcname = $pcname;
    }
    public function printPcName(){
        return "Hey! My PC NAME is : $this->pcname";
    }
}
$mypc = new A("Lenovo");
echo $mypc->printPcName();



?>