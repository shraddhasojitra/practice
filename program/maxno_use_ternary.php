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
// largest numbers using ternary operator
// Largest among a,b and c
$max = ($a > $b) ? ($a > $c ? $a : $c) :($b > $c ? $b : $c);
 
// Print the largest number
echo "Largest number among ". $a . ", ". $b . " and " . $c. "<br>largest no is " .$max;

}

?>