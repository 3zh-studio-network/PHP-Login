<?php
require_once('/page/flf.php');

if (@$login == "1"){
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Admin Page</title>
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://web-command.zhapi.gq/css/technetcom/pagestyle.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="https://web-command.zhapi.gq/js/technetcom/pagejs.js"></script>
		<style>
			*{text-decoration:none;}
			a:hover{text-decoration:underline;}
			hr {
				border: 0;
				height: 1px;
				background-image: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
			}
			tr td {
					border-bottom:1pt solid black;
			}
		</style>
	</head>
	<body style="text-align:center;">
		<p><h1>管理介面</h1></p>
		<hr />
		<p><h5>Add Things Here</h5></p>
	</body>
</html>
<?php
}else{
	header("location: ".$prot."//".$domain."/".$login_url."/login.php?return=$url");
}
?>