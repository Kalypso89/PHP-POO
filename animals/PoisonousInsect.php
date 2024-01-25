<?php
require_once "Insect.php";
class PoisonousInsect extends Insect{
    public function __construct()
    {
        $this->type = "poisonous";
        
    }
    public function sting(){
        return "I'm biting you";
    }
}