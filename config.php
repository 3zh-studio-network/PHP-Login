<?php
$dbhost="localhost"; //填入資料庫位置
$dbuser="root"; //填入資料庫名稱
$dbpass="12345" //填入資料庫密碼(是'dbuser'的密碼)
$dbselect="login_sys"; //選擇資料庫
$dbtable="login"; //填入資料"表"

$sql=mysqli_connect($dbhost,$dbpass,$dbpass);
mysqli_select_db($sql, $dbselect);
mysqli_query($sql, "set names utf8"); //設定編碼
$get=mysqli_query($sql, "select * from $dbtable"); //從資料庫中選擇所有的資料表
?>