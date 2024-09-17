<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="classes.php" method="POST">
            First and Last Name: <input type="text" name="name"><br>
            <input type="submit" value = "Submit">
        </form>
    </body>
</html>
