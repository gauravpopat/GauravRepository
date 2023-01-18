<?php 

setcookie("category","developing",time()+86400,"/");
$cat = $_COOKIE['category'];
echo "Cookie is ".$cat;

?>