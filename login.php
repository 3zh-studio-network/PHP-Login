<?php
/*
Name: PHP-Login
By: 000hen
Copyright©3ZH-Studio
*/
require_once($_SERVER['DOCUMENT_ROOT']."/admin/config.php");

@$u=$_POST["u"];
@$p=md5($_POST["p"]);
@$u_c=$_COOKIE["l_u_c"];
@$p_c=$_COOKIE["l_p_c"];

@$return=$_GET["return"];

if (empty($return) == 1) {
	$re=$_SERVER['DOCUMENT_ROOT']."/admin/index.php";
}else{
	$re=$return;
}

if (empty($u && $p)) {
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Admin Login</title>
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
		<style>
			*{text-decoration:none;}
			a:hover{text-decoration:underline;}
			hr {
				border: 0;
				height: 1px;
				background-image: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
			}
		</style>
	</head>
	<body>
		<form action="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>/admin/login.php?return=<?php echo $re; ?>" method="post" style="text-align:center;">
			<p><h1>Login</h1></p>
			<hr/>
			<p>名稱: <input type="text" name="u" /><br/></p>
			<p>密碼: <input type="password" name="p" /><br/></p>
		<input type="submit" value="Login">
	</body>
</html>
<?php
}else{
for($i=1;$i<=mysqli_num_rows($get);$i++){
	$rs=mysqli_fetch_row($get);
	if ($u == $rs[1]) {
		if ($p == $rs[3]) {
			setcookie("l_u_c", $u, time()+216000);
			setcookie("l_p_c", $p, time()+216000);
			echo "<font color='#3bff00'></h4 style='text-align:center;'>".'"'."$u".'"'." 你已登入,現在你可以進入管理介面</h4></font>";
			header("location: $re");
		}else{
			echo "<font color='#ff0000'><h4 style='text-align:center;'>登入有問題</h4></font>";
		}
	}else{
		if ($u_c == $rs[1]) {
			if ($p_c == $rs[3]) {
				echo "<font color='#3bff00'></h4 style='text-align:center;'>".'"'."$u".'"'." 你已登入,現在你可以進入管理介面</h4></font>";
				header("location: $re");
			}else{
				echo "<font color='#ff0000'><h4 style='text-align:center;'>登入有問題</h4></font>";
			}
		}else{
			if ($u == $rs[2]) {
				if ($p == $rs[3]) {
					setcookie("l_u_c", $u, time()+216000);
					setcookie("l_p_c", $p, time()+216000);
					echo "<font color='#3bff00'></h4 style='text-align:center;'>".'"'."$u".'"'." 你已登入,現在你可以進入管理介面</h4></font>";
					header("location: $re");
				}else{
					echo "<font color='#ff0000'><h4 style='text-align:center;'>請問登入有問題嗎?</h4></font>";
				}
			}
		}
	}
}
}
?>
