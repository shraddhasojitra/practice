<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form acttion="" method="POST">
    enter the radius value
    <input type="number" name="value">
    <input type="submit" name="submit" value="go">

    </form>
</body>
</html>

<?php


    if(isset($_POST['submit']))
    {
        $r=$_POST['value'];
        $pi=3.14;
        $a=$pi*$r*$r;
        echo 'area of circle='.$a.'<br>';
    }
?>