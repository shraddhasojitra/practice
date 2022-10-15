<?php

class model
{
    public $connection="";
    public function __construct()
    {
        error_reporting(0);
        //database conectivity

        try
        {
            $this->connection=new mysqli("localhost","root","","task");
            if($this->connection)
            {
             // echo "connection successfull";
            }
        }
        catch(Exception $e)
        {
            echo " connection not successfull  ";
            //  die(mysqli_error($this->connection,$e));
        }
    }


    //create a member function of insert all data

    public function insertdata($table,$data)
    {
        $key=array_keys($data);
        $key1=implode(",",$key);
        $value=array_values($data);
        $value1=implode("','",$value);
        $insert= "insert into $table ($key1) values('$value1')";
        $execute=mysqli_query($this->connection,$insert);
        return $execute;

    }
    //select data
    public function selectalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
    //featch data
    public function fetchdata($table)
    {
        $query="select * from $table";
        $exe=mysqli_query($this->connection,$query);
        while($fetch=mysqli_fetch_array($exe)){
            $arr[]=$fetch;
        }
        return $arr;
    }
    //delete data from empl

    public function deletedata($table,$column){
        $key=array_keys($column);
        $key1=implode(",",$key);

        $value=array_values($column);
        $value1=implode("','",$value);
        echo $del="delete from $table where $key1=$value1";
        exit();
        $exe=mysqli_query($this->connection,$del);
        return $exe;
    }
}
?>