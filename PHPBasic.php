<?php

echo "if else<br>";
$x = false;

$tmp = 100;
$x = ( $tmp < 10 );//false

$tmp = "mike";
$x = ( $tmp == "mike" );//true ==等價判斷

if( $x )
{
    echo "true<br>";
    myFunc4();
    myFunc3();
}
else
{
    echo "false<br>";
    myFunc();
}






echo "static 變數<br>";

function myFunc4() {
    static $x = 100;
    $x = $x + 1;
    echo $x."<br>";
}

myFunc4();
myFunc4();



echo "<br>";
echo "<br>";
echo "global 變數<br>";
$x = 100;//全域變數
$z = 300;

//命名
function myFunc3() {//block
    global $x;
    $y = 200;//區域變數
    echo "y = $y<br>";
    echo "x = $x<br>";
    echo "z = ".$GLOBALS['z'];
}

//使用
myFunc3();

echo "y = $y <br>";
echo "x = $x <br>";



echo "<br>";
echo "函式<br>";


echo "<br>";
echo "變數的作用範圍<br>";
$x = 100;

//命名
function myFunc2() {//block
    $y = 200;
    echo "y = $y<br>";
    echo "x = $x<br>";
}

//使用
myFunc2();

echo "y = $y <br>";
echo "x = $x <br>";



echo "<br>";
echo "函式<br>";

//命名
function myFunc() {
    echo "This is from function.<br>";
}

//使用
myFunc();

?>