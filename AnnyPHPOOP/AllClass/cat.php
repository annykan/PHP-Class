<?php
namespace AnnyPHPOOP\AllClass;

include_once "Animal.php";

class Cat extends Animal
{
    private $petName;
    public static $staticProperty = "靜態屬性"; //宣告靜態變數

    public function __construct($petNameFromOut)
    {
        //需要呼叫父類別初始化的方法,否則父類別不會做
        parent::__construct("貓");
        $this->petName = $petNameFromOut;
        $this->position;

        self::$staticProperty = "在建構子中設定(".$this->petName .")"; //
    }

    public static function staticFunction($test){
        echo "this is a static function";
        self::$staticProperty = "從靜態方法改變靜態屬性(".$test.")";
    }

    public function getPetName()
    {
        return $this->petName;
    }

}

function test(){
    echo "function test";
}

const TEST = "const test <br>";

//測試用 :
//$cat = new Cat ("Kitty");
//echo $cat->getAnimalType();//繼承後可以直接使用父類別的 public 方法
//
//$cat->getFood("小魚");
//$cat->moveDxDy(1,1);
//$cat->moveDxDy(1,2);