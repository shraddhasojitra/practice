
<?php
    session_start();
    if(!isset($_SESSION["name"]))
    {
        $name=$_POST["name"];

        $_SESSION["name"]=$name;
        header("location:index.php");
    }
    echo "wellcome to ".$_SESSION["name"];
    echo "<br/>";

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
     
    <a href='logout.php'>Click Hear To LOGOUT </a>
</body>
</html>