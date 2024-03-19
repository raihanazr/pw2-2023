<?php

    class Car {
       // Property 
       public $brand;
       public $color;
      
       // Method
       function getBrand (){
        return $this->brand;
       }

       function getColor (){
        return $this->color;
       }
    }

    // Object
    $rubicon = new Car();
    $tesla = new Car();

    // Setter
    $rubicon->brand = "Rubicon";
    $tesla->brand = "Tesla";

    //Echo
    echo $rubicon->getBrand();
    echo "<br>";
    echo $tesla->getBrand();
?>    