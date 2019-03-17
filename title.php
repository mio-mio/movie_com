<?php

class Title{
    private $name;
    private $enName;
    private $publicDate;
    private $satisfaction = 0;

    public function __construct($name, $enName, $publicDate){
        $this->name = $name;
        $this->enName = $enName;
        $this->publicDate = $publicDate;
    }
    public function getName(){
        return $this->name;
    }
    public function getEnName(){
        return $this->enName;
    }
    public function getPublicDate(){
        return $this->publicDate;
    }
    public function getSatisfaction(){
        return $this->satisfaction;
    }

    public function setSatisfaction($satisfaction){
        $this->satisfaction = $satisfaction;
    }






//     public function watched(){
//         echo $this->name .'を観ました！';
//     }
}


?>