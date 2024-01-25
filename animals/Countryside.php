<?php
require_once "./CrawlingInsect.php";
require_once "./FlyingInsect.php";
require_once "./PoisonousInsect.php";

$ant = new CrawlingInsect;
echo $ant -> type  . "\n";
echo $ant -> greet() . "\n";
echo $ant -> crawl() . "\n";

$bee = new FlyingInsect;
echo $bee -> type  . "\n";
echo $bee -> greet() . "\n";
echo $bee -> fly() . "\n";

$spider = new PoisonousInsect;
echo $bee -> type  . "\n";
echo $spider -> greet() . "\n";
echo $spider -> sting() . "\n";
