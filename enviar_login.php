<?php

		$conectar=mysqli_connect('localhost','root','','imoveis');
		
		session_start();
		
		$login=$_POST['log'];
		$senha=$_POST['sen1'];
		
		$confere_login=mysqli_query($conectar,"SELECT * FROM casa WHERE proprietario='$login' AND senha='$senha'");
		
		if(mysqli_num_rows($confere_login)==1){
			
			$dados=mysqli_fetch_array($confere_login);
			mysqli_close($conectar);
			
			$_SESSION['logado']=true;
			$_SESSION['id_usuario']=$dados['id_casa'];
		
		header('location: index2.php');

								}

?>