<?php
    class parentclass
    {
        public function parentclass()
        {
            echo "parentclass call";
        } 
    }
    class child1 extends parentclass
    {
        public function child1class()
        {
            echo "child1class call";
        } 
    }
    class child2 extends parentclass
    {
        public function child2class()
        {
            echo "child2class call";
        } 
    }
    $c1= new child1();
    $c2= new child2();
    $c1->child1class();
    echo "<br>";
    $c1->parentclass();
    echo "<br>";
    $c2->child2class();
    echo "<br>";
    $c2->parentclass();

?>