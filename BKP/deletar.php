<?php

			 include 'conectar.php';  
			
			$id=$_POST['btn_delete'];
			
			$deletar=mysqli_query($conectar,"DELETE FROM casa WHERE id_casa='$id'");
			
			header('location: index_corretores_casas.php');
?>