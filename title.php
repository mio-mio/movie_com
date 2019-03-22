<?php

class Title{
    private $name;
    private $enName;
    private $publicDate;

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
    
    public function getReviews($reviews){
            $reviwsForTitle = array();
        foreach($reviews as $review){
            if($review->getTitleName() == $this->name){
                $reviewsForTitle[] = $review;
            }
        }
        return $reviewsForTitle;
    }


    public static function findByName($titles, $name){
        foreach($titles as $title){
            if($title->name == $name){
                return $title;
            }
        }
    }

}


?>