<?php

 include 'conectar.php';  

if(isset($_POST['btn-editar'])){
	$nome = $_POST['prop'];
	$terreno = $_POST['ter1'];
	$senha = $_POST['senh'];
	

	$id = $_POST['btn_editar'];
	
	$xxx=mysqli_query($conectar, "UPDATE casa SET proprietario = '$nome', terreno = '$terreno', senha = '$senha' WHERE id_casa = '$id'");
	
	header('location: index_corretores_casas.php');
	
}