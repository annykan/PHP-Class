<?php

//1. 定義 Animal 類別
//2. 屬性 position 可被繼承
//3. 初始化時可以設定物種名稱及初始化位置
//4. 可以取得物種名稱
//5. 可以從外部得到食物

class Animal {

    Protected $position;
    Private $animalType="default animal Type";//若沒有呼叫父類別的建構子,會印出這個

    public function __construct($animalTypeFromOut)
    {
        $this->position = ["x"=>0 , "y"=>0];
        $this->animalType = $animalTypeFromOut;
    }

    public function getAnimalType()
    {
        return $this->animalType;

    }

    public function getFood($foodName)
    {
        $this->foodName = $foodName;
        echo "<br> Food is $foodName <br>" ;
        $this->eat();
    }

    public function eat()
    {
        echo "吃".$this->foodName."<br>";

        $this->digest();
    }

    function digest()
    {
        echo "消化".$this->foodName."<br>";
    }

    public function moveDxDy($dx, $dy){
        $this->position["x"] += $dx ;
        $this->position["y"] += $dy ;
        $this->getPosition();
    }

    public function getPosition(){
        $x = $this->position["x"];
        $y = $this->position["y"];
        echo "<br> Now position : ($x, $y)<br>";
    }


}
