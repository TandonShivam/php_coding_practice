<?php
class Shivam{
    public $color;
    public $model;

    public function __construct(){
         echo 'The class "' . __CLASS__ . '" was initiated!';
    }
    function setModel($model){
        $this->model=$model;
    }
    function setColor($color){
        $this->color=$color;
    }  
    function getModel(){
        return $this->model;
    }
    function getColor(){
        return $this->color;
    }
}

class Vehicle{
    public function __construct(){
        echo "This ".__CLASS__."'s contructor is called";
    }
}

// $obj=new Shivam();
// echo "\n";
// $obj->setModel("BMW");
// $obj->setColor("BLACK");
// echo $obj->getModel();
// echo "\n";
// echo $obj->getColor();

$v1=new Vehicle();
header("Location: index0.1.php");  // this function tells the HTTP data to the browser to navigate the webpage 
exit();


?>