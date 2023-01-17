<?php 

function addBreak(){
    echo "<br>"."<br>";
}

$string = "Zignuts Techno";
addBreak();
echo $string;
addBreak();
echo "strlen returns the length of string : ".strlen($string);
addBreak();
echo "str_word_count returns the count of word : " . str_word_count($string);
addBreak();
echo "strrev reverse the string : " . strrev($string);
addBreak();
echo "strpos search for the text Techno : ".strpos($string, "Techno");
addBreak();
echo "It replace the text techno with technolab : ".str_replace("Techno","Technolab",$string);
addBreak();
?>