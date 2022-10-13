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
    enter the temperature in centigrade
    <input type="number" name="value"><br>  
    <input type="submit" name="submit" value="go"><br>
</form>
  
</body>
</html>


<?php
$c=$_POST['value']; 
$fahrenheit=(1.8*$c)+32;
echo 'temperature in fahrenheit='.$fahrenheit.'<br>';
?>