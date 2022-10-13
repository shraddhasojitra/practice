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
    enter the value3
    <input type="number" name="value2"><br>

    <input type="submit" name="submit" value="go"> <br>
</form> 
</body>
</html>
<?php

if(isset($_POST['submit']))
{
    $a=$_POST['value'];
    $b=$_POST['value1'];
    $c=$_POST['value2'];
        // if a is greater than both b and c, a is the largest
        if ($a>=$b && $a>=$c)
            echo 'a is a largest number'.$a.'<br>';

        // if b is greater than both a and c, b is the largest
         if ($b>= $a && $b >= $c)
            echo 'b is a largest number'.$b.'<br>';

        // if c is greater than both a and b, c is the largest
        if ($c >= $a && $c >= $b)
            echo 'c is a largest number'.$c.'<br>';

}

?>
