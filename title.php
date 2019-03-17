<?php


class Title{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function watched(){
        echo $this->name .'は観ました！';
    }
}


?>