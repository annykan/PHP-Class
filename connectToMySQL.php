﻿<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>連接到 MySQL Database</title>
</head>

<body>

<h1>連接到 MySQL Database</h1>

<?php
    echo "測試資料庫連線...";

    //註解: 變數 用來設定連線
    //在 vagrant ssh 要登入MySQL 可以打 mysql --user="homestead" --password="secret" 來登入
    $host = "localhost";    //請看主機上的 /etc/hosts
    $user = "homestead";    //homestead 內建的帳號
    $password = "secret";   //homestead 內建的密碼
    $database = "test"; //選擇資料庫

    //執行連線到資料庫的動作, 並將回傳的東西存放到 $dblink 中
    $dblink = new mysqli($host, $user, $password, $database);

    //檢查是否連線錯誤
    if ($dblink->connect_error)
    {
        //die("連線錯誤1:".$dblink->connect_error);     //物件導向
        die("連線錯誤2:".mysqli_connect_error());   //程序導向
    }
    else
    {
        echo "連線成功<br>~";
    }

    //使用 sql 語法讀取資料
    $sql = "SELECT * FROM students";    //sql語法
    $result = $dblink->query($sql); //叫MySQL執行

    var_dump($result);  //列出除錯用的資訊

    if( $result->num_rows > 0)  //檢查是否有查到資料
    {
        while( $row = $result->fetch_array() )  //將資料印出
        {
            echo "name:".$row["name"].
                 ",  gender:".$row["gender"].
                 ",  address:".$row["addressArea"].$row["addressDetail"]."<br>";
        }
    }
    else
    {
    echo "No data!";
    }
?>

</body>

</html>