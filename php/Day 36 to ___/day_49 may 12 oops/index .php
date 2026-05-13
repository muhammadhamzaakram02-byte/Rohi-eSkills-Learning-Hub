<?php

class Home{
public $room;
public $color;



public function __construct(){
    echo "the constructer is running";
    echo "<hr>";
}


public function getColor(){
    echo "this color is  ". $this->color;
}

public function getRoom(){
    echo "<hr>";
    echo "this room is".$this->room;
}
public function __destruct()
{
    echo "the constructer is stop";
}

}

$home1 = new Home();
$home1->color = "blue";

$home1->getColor();


$home2 = new Home();

$home2->room = 5;
$home2->getRoom();






?>