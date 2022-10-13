<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function form()
        {

                var fnm = document.getElementById('fnm');
                var lnm = document.getElementById('lnm');
                var email = document.getElementById('email');
                var pass = document.getElementById('pass');

                
                if(fnmvalidation(fnm,"Please enter only letters for your firstname"))
                {   
                    if(lnmvalidation(lnm,"Please enter only letters for your lastname"))
                    {  
                      if(emailvalidation(email,"please enter valid emailid"))
                      {
                        if(passwordvalidation(pass,"please enter only character and number"))
                        {

                        }
                      }
                    }
                 }
        }

        function fnmvalidation(elem,msg)
        {
            var fnmexp =/^[a-zA-Z]+$/;
            if(elem.value.match(fnmexp))
            {
                return true;
            }
            else
            {
                alert(msg);
                elem.focus();
                return false;
            }
        }
        function lnmvalidation(elem,msg)
        {
            var lnmexp=/^[a-zA-Z]+$/;
            if(elem.value.match(lnmexp))
            {
                return true;
            }
            else
            {
                alert(msg);
                elem.focus();
                return false;
            }
        }
        function emailvalidation(elem,msg)
        {  
             var emailexp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
            if(elem.value.match(emailexp))
            {
                return true;
            }
            else
            {
                alert(msg);
                elem.focus();
                return false;
            }
        }
        function passwordvalidation(elem,msg)
        {  
             var emailexp = /^[a-zA-Z0-9]+$/;
            if(elem.value.match(emailexp))
            {
                return true;
            }
            else
            {
                alert(msg);
                elem.focus();
                return false;
            }
        }
    </script>
</head>
<body>
<center>
        <form onsubmit="return form()" method="post">
        
        <h3>
        <p>Form</p>
    </h3>
            
            <input type='text' name='firstname' placeholder='Enter Firstname' id='fnm' ><br />
           
            <input type='text' name='lastname'placeholder='Enter Lastname' id='lnm'><br />
           
            <input type='text' name='email' placeholder='Enter Email'id='email'><br />
           
            <input type='text' name='password' placeholder='Enter Password'id='pass'><br />
            
           

            <input type='submit' name='submit' >
        </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    echo 'name is=>'.$firstname.'<br>';
    echo 'brithdate is=>'.$lastname.'<br>';
    echo 'age is=>'.$email.'<br>';
    echo 'address is=>'.$password.'<br>';

    echo "<table border='2' bgcolor='gray'>
    <tr><th>Frist name</th><td>$firstname</td></tr>
    <tr><th>Last name</th><td>$lastname</td></tr>
    <tr><th>Email</th><td>$email</td></tr>
    <tr><th>Password</th><td>$password</td></tr></table>";

}  
?>


