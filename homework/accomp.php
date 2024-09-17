<?php
session_start();
$classes = $_POST["classes"];
$_SESSION["classList"] = $classes;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="confirm.php" method="POST">
            List any personal Accomplishments: <textarea name="text" cols="40" rows="10"></textarea>
            <input type="Submit">
        </form>
    </body>
</html>
