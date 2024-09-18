<?php
session_start();
$name = $_POST["name"];
$_SESSION["name"] = $name;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $name . "<br>";
        ?>
        <form action="accomp.php" method="POST">
            <br><input type=checkbox name="classes[]" value="Object-Oriented Programming">Object-oriented programming<br>
            <input type="checkbox" name="classes[]" value="System analysis & design">Systems analysis & design<br>
            <input type="checkbox" name="classes[]" value="Advanced Programing">Advanced programming<br>
            <input type="checkbox" name="classes[]" value="Introduction to Networking">Introduction to Networking<br>
            <input type="checkbox" name="classes[]" value="Introdustion to Computer Security">Introduction to Computer Security<br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
