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
    enter any number
    <input type="number" name="value"><br>  
    <input type="submit" name="submit" value="go"><br>
</form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $a=$_POST['value'];
        if($a>0)
        {
            echo 'value a is a possitive';
        }
        else
        {
            echo 'value a is a nagative';
        }
    }
?>