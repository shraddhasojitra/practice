
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        enter any value=
        <input type="number" name="value1"><br> 
        enter any value2=
        <input type="number" name="value2">
        <input type="submit" name="submit" value="go">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{

    $num1=$_POST['value1'];
    $num2=$_POST['value2'];

    $a=$num1+$num2;
    $b=$num1-$num2;
    $c=$num1*$num2;
    $d=$num1/$num2;

    echo "Addition =:".$a."<br>";
    echo "Substraction =:".$b."<br>"; 
    echo "Multiplication =:".$c."<br>";
    echo "Division =:".$d."<br>";
}

?>