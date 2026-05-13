<?php

class Animal{
    public function animal(){
        echo "this function is amimal";
    }
}



class Cat extends Animal{

public function makesound(){

echo "cat sound is meow meow";
}


}

$animal1 = new Animal();



$cat = new Cat();
$cat->makesound();


?>