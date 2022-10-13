<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        <input type='text' name='name' placeholder='enter your name' required><br/>
        <input type='text' name='password' placeholder='enter password' required><br/>
        <input type='submit' name='submit' value='go'>
    </form>
</body>
</html>
<?php
    session_start();

    if(isset($_POST["submit"]))
    {
        $nm=$_POST["name"];
        $pass=$_POST["password"];
        $_SESSION["name"]=$nm;
        $_SESSION["password"]=$pass;
        header("location:wel_come.php");
    }
?>