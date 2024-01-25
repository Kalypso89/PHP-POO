<?php
require_once "Insect.php";
class FlyingInsect extends Insect{
    public function __construct()
    {
        $this->type = "flying";
        
    }
    public function fly(){
        return "I'm flying";
    }
}