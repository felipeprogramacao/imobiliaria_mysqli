<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
		if(!isset($_SESSION['id_usuario']))
		{
			
			header('Location:index.php');
			exit;
			}else{
			
			?>
LOGIN EFETUADO COM SUSSESSO


<?php } ?>
</body>
</html>