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
    enter the principal balance
    <input type="number" name="value"><br>
    enter the interest rate 
    <input type="number" name="value1"><br>
    enter the time in year
    <input type="number" name="value2"><br>
    <input type="submit" name="submit" value="go">  
</form>         
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $p=$_POST['value'];
    $r=$_POST['value1'];
    $t=$_POST['value2'];
    $i=$p*$r*$t/100;
    echo 'simple interest is ='.$i.'<br>';
}
?>
