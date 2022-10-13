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
    $fact_no=1;
    for($i=1;$i<=$a;$i++)   
    {    
        $fact_no=$fact_no*$i;  
    }
    echo $fact_no."<br>";
}

?>