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
    enter the gujrati marks
   <input type="number" name="value"><br>
    enter the hindi marks
    <input type="number" name="value1"><br>
    enter the maths marks
    <input type="number" name="value2"><br>
    enter the english marks
    <input type="number" name="value3"><br>
    enter the science marks
    <input type="number" name="value4"><br>
    <input type="submit" name="submit" value="go"> <br>
</form> 
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $sub1=$_POST['value'];
        $sub2=$_POST['value1'];
        $sub3=$_POST['value2'];
        $sub4=$_POST['value3'];
        $sub5=$_POST['value4'];
        $total=$sub1+$sub2+$sub3+$sub4+$sub5;
        $percentage=$total/5;
        echo 'total='.$total.'<br>';
        echo 'percentage='.$percentage.'<br>';
    }

?>