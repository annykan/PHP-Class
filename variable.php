<?php

echo "陣列 - 鍵值對 key value<br>";
$keyValue = ["name" => "mike", "gender" => "m", "area" => "新竹"];
var_dump($keyValue);

echo $keyValue['name']."<br>";
echo $keyValue['gender']."<br>";
echo $keyValue['area']."<br>";


echo "陣列<br>";
$a = [1,2,3];
echo "$a[0]<br>";

$nameArray = ["Jack","Mike","May"];

var_dump($a);

echo "$nameArray[0]<br>";//取得 index = 0 的 value

$a[1] = "Alex";//改變 index = 1 中的 value
echo "$nameArray[1]<br>";

echo "<br>";



echo "變數型別, 弱型別<br>";
$x = 100;//integer
echo "$x<br>";
var_dump($x);

$x = -100;
echo '$x<br>';//單引號

$x = 123.45;//float
echo "$x<br>";

$x = true;//boolean
echo "$x<br>";
$x = false;//boolean
echo "$x<br>";

$x = "test";//string
echo "$x<br>";




echo "<br>";
echo "變數命名<br>";

$tmp = "hello";
$name = "Mike";//程式的可讀性

echo $tmp.", ".$name.".";
echo "<br>";

$TMP = "Hello";

echo $tmp.", ".$name.".";
echo "<br>";
echo $TMP.", ".$name.".";

?>