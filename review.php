<?php 
class Review {
    private $titleName;
    private $body;
    private $userId;
    private $star;

    public function __construct($titleName, $userId,$body, $star){
        $this->titleName = $titleName;
        $this->userId = $userId;
        $this->body = $body;
        $this->star = $star;
    }

    public function getTitleName(){
        return $this->titleName;
    }
    public function getBody(){
        return $this->body;
    }
    public function getUser($users){
        foreach($users as $user){
            if($user->getId() == $this->userId){
                return $user;
            }
        }
    }
    public function getStar(){
        return $this->star;
    }

}

?>