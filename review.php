<?php 
class Review {
    private $titleName;
    private $body;

    public function __construct($titleName, $body){
        $this->titleName = $titleName;
        $this->body = $body;
    }

    public function getTitleName(){
        return $this->titleName;
    }
    public function getBody(){
        return $this->body;
    }
}

?>