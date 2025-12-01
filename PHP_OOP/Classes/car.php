<?php 
class car{
    private $Brand;
    private $Color;
    public $VehicleType="Car";
    //Constructor
    public function __construct($Brand,$Color) {
        $this ->Brand=$Brand;
        $this ->Color=$Color;
    }
    //Method
    public function getCarInfo(){
        return "Brand: ". $this->Brand.", Color:". $this->Color;
    }
    

}
$car01=new car("Volvo", "Green");
$car02=new car("BMW", "Blue");
$car03=new car("Volvo", "Green");
$car04=new car("BMW", "Blue");