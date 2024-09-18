<?php
session_start();
$fullName = $_SESSION["name"];
$classes = $_SESSION["classList"];
$textIn = $_POST["text"];
$_SESSION["text"] = $textIn;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>" . $fullName . "</h1>";
        echo "<h2>Classes</h2>";
        foreach ($classes as $class) {
            echo "$class<br>";
        }
        echo "<h2>Personal Accomplishents</h2>";
        echo $textIn . "<br>";
        ?>

        <form action="result.php" method="POST">
            <input type="submit" value = "Submit">
        </form>

    </body>
</html>
