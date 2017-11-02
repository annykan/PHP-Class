<?php
/**
 * Exap for Animal,cat,dog class
 * User: yvtc
 * Date: 2017/11/2
 * Time: 上午 09:12
 */

include_once "AnnyPHPOOP/AllClass/Cat.php";  //全部 copy 過來
include_once "AnnyPHPOOP/AllClass/Dog.php";

use AnnyPHPOOP\AllClass\Cat ;
use AnnyPHPOOP\AllClass\Cat as CatA;
use AnnyPHPOOP\AllClass\Dog;
use const AnnyPHPOOP\AllClass\TEST; //
use const AnnyPHPOOP\AllClass\TEST as const_TEST;
use function AnnyPHPOOP\AllClass\test;
use function AnnyPHPOOP\AllClass\test as func_test;


echo Cat::$staticProperty; //在類別 class 中所定義的
echo "<br>";

Cat::staticFunction("類別");
echo "<br>";
echo Cat::$staticProperty; //在靜態方法中被設定
echo "<br>";

$cat = new Cat ("Kitty");
echo $cat->getAnimalType();
echo $cat->getPetName()."<br>";

echo Cat::$staticProperty;
echo "<br>";

Cat::staticFunction("類別");
echo $cat::$staticProperty;
echo "<br>";

$dog = new Dog ("多飛");
echo $dog->getPetName()."<br>";

$cat2 = new Cat("BenBen");
echo $cat2::$staticProperty;
$cat2::staticFunction("cat2");
echo "<br>";
echo $cat::$staticProperty; //另一個物件的角度,仍使用同一個靜態屬性
echo "<br>";

$catA = new CatA("Hello"); //使用別名來改變物件
echo $catA->getPetName();
echo "<br>";

$catNamespace = new AnnyPHPOOP\AllClass\Cat("肥貓");//直接到 namespace 使用
echo $catNamespace->getPetName();
echo "<br>";

echo AnnyPHPOOP\AllClass\TEST;
echo TEST;
echo const_TEST;
AnnyPHPOOP\AllClass\test();
echo "<br>";
test();
echo "<br>";
func_test();
echo "<br>";


?>


