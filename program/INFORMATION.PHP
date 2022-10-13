<?php
if(isset($_POST['submit']))
{
    $name=$_POST['nm'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $address=$_POST['add'];

    echo 'name is=>'.$name.'<br>';
    echo 'brithdate is=>'.$dob.'<br>';
    echo 'age is=>'.$age.'<br>';
    echo 'address is=>'.$address.'<br>';
}  
?>
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
    <fieldset>
        <legend>Your Information</legend>
        <p>
            Enter Your Name: 
            <input type="text" name="nm">
        </p>

        <p>
            Enter Your BirthDate: 
            <input type="date" name="dob">
        </p>

        <p>
            Enter Your Age: 
            <input type="number" name="age">
        </p>

        <p>
            Enter Your Address:
             <input type="text" name="add">     
        </p>

        <p>
            <input type="submit" name="submit" value="go">
        </p>
    </form>
</body>

</html>