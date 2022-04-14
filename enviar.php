<?php
		 include 'conectar.php';  
		
		
		$proprietario=$_POST['prop'];
		$terreno=$_POST['ter1'];
		$senha=$_POST['senh'];
		$fotos=array();
		
		if(!empty($_POST['prop']) || !empty($_POST['ter1']) || !empty($_POST['senh']))
		{header("Location: index_corretores_casas.php"); }
		
		
		for($i=0;$i<count($_FILES['fot']['name']);$i++){
		$nome_foto=$_FILES['fot']['name'][$i];
		$local_foto=$_FILES['fot']['tmp_name'][$i];
		$destino_foto='imagens/'.$nome_foto;
		move_uploaded_file($local_foto,$destino_foto);
		array_push($fotos,$nome_foto);
								}
								
			$confere_login=mysqli_query($conectar,"SELECT * FROM casa WHERE proprietario='$proprietario'");
			if(mysqli_num_rows($confere_login)>0){
				header("Location: index_corretores_casas.php");
				echo "Usuário já existe";
				return false;
				
			}else{
				
				
		$cadastrar=mysqli_query($conectar,"INSERT INTO casa(proprietario, terreno, senha) values('$proprietario','$terreno','$senha')");
		$id_foto=mysqli_insert_id($conectar);
		
		for($i=0;$i<count($fotos);$i++){
		$novo_nome_foto= $fotos[$i];
		$cadastrar_foto=mysqli_query($conectar,"INSERT INTO imagem_casa(nome_imagem, fk_id_casa) values('$novo_nome_foto','$id_foto')");
		return true;
		}
		header("Location: index_corretores_casas.php");
		}
		
?>