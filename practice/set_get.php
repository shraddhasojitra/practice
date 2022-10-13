<?php

    class Encap
    {
            public $name;
            public $city;

            function set($nm,$ct)
            {

                    $this->name=$nm;
                    $this->city=$ct;
            }
            
            
             function get()
            {
                return $this->name;
               
               
            }
            function get1()
            {
               
                return $this->city;
               
            }

    }

    $e1 = new Encap();
    $e1->set("shraddha","junagadh");
    $e2 = new Encap();
    $e2->set("vaishali","rajkot");
    echo "Name : ".$e1->get()."<br>"; 
    echo "City : ".$e1->get1()."<br>"; 
    echo "Name : ".$e2->get()."<br>"; 
    echo "City : ".$e2->get1()."<br>";


?>