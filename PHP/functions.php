<html>
    <body>
        <form action="functions.php" method="POST">
            <input type="text" id="name" name="name" placeholder="Enter Name">
            <input type="text" id="gen" name="gen" placeholder="Enter Gender">
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>
<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $gen = $_POST["gen"];
    sayHello($name, $gen);
}
function sayHello($name, $gen)
    {
        global $gen;
        if ($gen == "Male" || $gen == "male" || $gen == "MALE") {
            echo "Hello Mr $name";
        } else {
            echo "Hello Miss $name";
        }
        
        echo "<br>";
    }


?>
