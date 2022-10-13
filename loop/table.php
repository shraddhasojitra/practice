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
    <input type="submit" name="submit" value="go"> <br>
</form> 
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $a=$_POST['value'];
    echo "table of ".$a."<br>";
    for ($i = 1; $i <= 10; $i++)  
    {  
        echo  $a."*" .$i."=".$a*$i." <br>";
    }  
}

?>