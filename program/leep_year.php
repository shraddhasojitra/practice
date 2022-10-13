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
    enter any year
    <input type="number" name="value"><br>  
    <input type="submit" name="submit" value="go"><br>
</form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $year=$_POST['value'];  
        if(($year%4==0) && (($year%400==0) || ($year%100!==0)))
        {  
        echo 'leep year';  
        }
        else 
        {  
        echo 'not leep year';
        }
    }
?>