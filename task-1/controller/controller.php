<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        //employe login and store data in form
        if(isset($_POST['manage']))
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $pass=base64_encode($_POST['password']);
            $cpass=base64_encode($_POST['cpassword']);
            $add =$_POST['address'];
            
           //upload photo here
        $tmp_name=$_FILES['img']["tmp_name"];
        $path="uploads/".$_FILES["img"]["name"];
        move_uploaded_file($tmp_name,$path);
        //over upload code 
        $state=$_POST['state'];
        $city=$_POST['city'];
         $data= array("firstname"=>$fname,"lastname"=>$lname,"email"=>$email,"password"=>$pass,"address"=>$add,"img"=>$path,"sid"=>$state,"ctid"=>$city);
         if($pass==$cpass)
         {
            $chk=$this->insertdata('form',$data);
            if($chk)
            {
                echo "<script>
                alert('Thankyou for create your employe account.')
                window.location='showtable';
                </script>";
            }

         }
         else
         {
            echo "<script>
            alert('Please try again your password and confirm password does not matched')
            window.location='/';
            </script>";
         }


        }
        //fetch all data
        $st=$this->selectalldata('state');
        $ct=$this->selectalldata('city');
        
        //select all data
        $sql=$this->selectalldata('form');
        //delete date from employee here
        if(isset($_GET['delete_id'])){

            $delid=$_GET['delete_id'];
            $data=array('id',$delid);
            $chk=$this->deletedata("form",$data);
            if($chk){
                echo "<script>
                alert('delete data successfully.')
                </script>";
            }
        }
        //load your page
        if(isset($_SERVER['PATH_INFO']))
        {
            switch($_SERVER['PATH_INFO'])
            {
                case '/':
                    require_once('index.php');
                    require_once('header.php');
                   // require_once('show_table.php');
                    require_once('form.php');
                    break;

                    case '/showtable':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('show_table.php');
                       // require_once('form.php');
                        break;

                        default:
                        require_once("index.php");
                        require_once("header.php");
                        require_once("404.php");
                        break;
                    
            }
        }
    }
}

$obj=new controller();

?>

