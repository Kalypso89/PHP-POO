<?php
require_once "Insect.php";
class CrawlingInsect extends Insect{
    public function __construct()
    {
        $this->type = "crawling";
        
    }
    public function crawl(){
        return "I'm crawling";
    }
}