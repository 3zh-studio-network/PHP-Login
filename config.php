<?php
$dbhost="localhost"; //填入資料庫位置
$dbuser="root"; //填入資料庫名稱
$dbpass="12345" //填入資料庫密碼(是'dbuser'的密碼)
$dbselect="login_sys"; //選擇資料庫
$dbtable="login"; //填入資料"表"
$port="https" //填入https 或http
$domain="www.example.com" //輸入網域
$login_url="admin" //輸入login.php 的位置

$sql=mysqli_connect($dbhost,$dbpass,$dbpass);
mysqli_select_db($sql, $dbselect);
mysqli_query($sql, "set names utf8"); //設定編碼
$get=mysqli_query($sql, "select * from $dbtable"); //從資料庫中選擇所有的資料表
?>