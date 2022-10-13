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
    enter the base value
    <input type="number" name="value"><br>
    enter the height value
    <input type="number" name="value1"><br>
    <input type="submit" name="submit" value="go">  
</form> 
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $b=$_POST['value'];
    $h=$_POST['value1'];
    $a=1/2*$b*$h;
    echo 'area of triangle='.$a.'<br>';
}

?>