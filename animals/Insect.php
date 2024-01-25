<?php
class Insect{
    public $type;
    public function greet(){
        return "Hi, I'm your $this->type insect";
    }
} 