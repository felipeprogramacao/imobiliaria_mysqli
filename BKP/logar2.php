<?php

			 include 'conectar.php';  

			session_start();
			
			$login=$_POST['usuario'];
			$senha=$_POST['senha'];
			
			$acesso=mysqli_query($conectar,"SELECT * FROM casa WHERE proprietario='$login' AND senha='$senha'");
			
			if(mysqli_num_rows($acesso)==1){
				
					$dados=mysqli_fetch_array($acesso);
					mysqli_close($conectar);
					
					$_SESSION['logado']=true;
					$_SESSION['id_usuario']=$dados['id_casa'];
					
					header('Location:index_corretores_casas.php');
				
				}else{
					
					echo  '<h2>'."ERRO / Confira sua Senha ou Login".'<h2>';
					}
				
?>