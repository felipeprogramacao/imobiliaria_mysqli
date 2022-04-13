<?php

			$conectar=mysqli_connect('localhost','root','','imoveis');

			session_start();
			
			$login=$_POST['usuario'];
			$senha=$_POST['senha'];
			
			$acesso=mysqli_query($conectar,"SELECT * FROM casa WHERE proprietario='$login' AND senha='$senha'");
			
			if(mysqli_num_rows($acesso)==1){
				
					$dados=mysqli_fetch_array($acesso);
					mysqli_close($conectar);
					
					$_SESSION['logado']=true;
					$_SESSION['id_usuario']=$dados['id_casa'];
					
					header('Location:home2.php');
				
				}

?>