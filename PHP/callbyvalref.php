<?php declare(strict_types=1);
function increment_value($y) {
    $y++;
    echo $y;
}

function increment_reference(&$y) {
    $y++;
    echo $y;
}



$x = 1;
increment_value($x); // prints '2'
echo "<br>";
echo $x; // prints '1'
echo "<br>";
increment_reference($x); // prints '2'
echo "<br>";
echo $x; // prints '2'
echo "<br>";
?>  