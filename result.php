<?php
session_start();

$fname = $_SESSION["name"];

function determine() {
    $class = $_SESSION["classList"];
    $text = $_SESSION["text"];
    $half = 5 * .5;
    if (count($class) > $half and stristr($text, "PHP")) {
        return true;
    } else {
        return false;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Results</title>
    </head>
    <body>
        <br>
        <?php
        $result = determine();
        if ($result == true) {
            echo "<h1>You are accepted for an phone interview!</h1>";
        } else {
            echo "<h1>Sorry, your application was rejected.</h1>";
        }
        ?>
    </body>
</html>
