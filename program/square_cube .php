<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        enter any number 
        <input type="number" name="value">
        <input type="submit" name="submit" value="go">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $a= $_POST['value'];
    $b=$a*$a;
    $c=$a*$a*$a;

    echo "square =".$b."<br>";
    echo "club =".$c."<br>";
}
?>