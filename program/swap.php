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
    enter the value1
    <input type="number" name="value"><br>
    enter the value2
    <input type="number" name="value1"><br>
    <input type="submit" name="submit" value="go"> 
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $a=$_POST['value'];
        $b=$_POST['value1'];
        $a=$a+$b;
        $b=$a-$b;
        $a=$a-$b;
        echo 'a='.$a.'<br>';
        echo 'b='.$b.'<br>';
    }
?>

