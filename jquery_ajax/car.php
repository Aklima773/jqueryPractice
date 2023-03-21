<?php
class Car{

    // protected $wheel = 4;
    public $wheel = 4;
    public $door = 4;
    public $color = "red";


    public function CarDetails(){
        $output ='';

        $output .= "<br> Wheel: " .$this->wheel;
        $output .="<br> Door: " .$this->door;
        $output .="<br> Car Color: " .$this->color;
        
        // $this->wheel;

        return $output;
    }
    
}



$carobj = new Car;

echo $carobj->door;

echo $carobj->CarDetails();

// var_dump($carobj);