<?php
//Name: TNC-PHP-Login
//By: 000hen
//Organizations: 3ZH-Studio Network, TNC(Technology Network Company)
//Version: 1.24
//Copyright©3ZH-Studio, Technology Network Company (3ZH-Studio TNC)

require_once($_SERVER['DOCUMENT_ROOT']."/config.php");

@$u_c=$_COOKIE["l_u_c"];
@$p_c=$_COOKIE["l_p_c"];

$url="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$data=mysqli_query($sql, "select * from $dbtable WHERE Name = '$u_c'");

for($i=1;$i<=mysqli_num_rows($data);$i++){
	$rs=mysqli_fetch_row($data);
		if ($u_c == $rs[1]) {
			if ($p_c == $rs[3]) {
				$login="1";
			}else{
				$login="0";
				header("location: //".$domain."/".$login_url."/login.php?return=$url");
			}
		}else{
			if ($u_c == $rs[2]) {
				if ($p_c == $rs[3]) {
					$login="1";
				}else{
					$login="0";
					header("location: //".$domain."/".$login_url."/login.php/login.php?return=$url");
				}
			}else{
				$login="0";
				header("location: //".$domain."/".$login_url."/login.php?return=$url");
			}
		}
	}
?>
