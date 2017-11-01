<?php

include_once "Animal.php";
class Cat extends Animal
{
    private $petName;

    public function __construct($petNameFromOut)
    {
        //需要呼叫父類別初始化的方法,否則父類別不會做
        parent::__construct("貓");
        $this->petName = $petNameFromOut;
        $this->position; //
    }

    public function getPetName()
    {
        return $this->petName;
    }

}

$cat = new Cat ("Kitty");
echo $cat->getAnimalType();//繼承後可以直接使用父類別的 public 方法

$cat->getFood("小魚");
$cat->moveDxDy(1,1);
$cat->moveDxDy(1,2);