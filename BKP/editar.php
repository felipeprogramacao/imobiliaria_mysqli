<!DOCTYPE HTML>
<html>
<head>
<meta  charset=utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="pagina.css">

<?php  
			session_start();
				
			 include 'conectar.php';  
				
				if(isset($_POST['btn_editar'])){
					
					$id=$_POST['btn_editar'];
					
			

			$resultado=mysqli_query($conectar,"SELECT *,(SELECT nome_imagem from imagem_casa WHERE fk_id_casa=casa.id_casa LIMIT 1)as foto_capa FROM casa WHERE id_casa='$id'");
			
			$dados=mysqli_fetch_array($resultado);
			$ft_capa=$dados["foto_capa"];
			
				}

 ?>

</head>

<body>
<table border="3">
				<h2>Formulário de Cadastro</h2>
                <form action="update.php" method="POST">
                
                <tr>
					<td>PROPRIETÁRIO</td>
                    <td>TERRENO</td>
                    <td>SENHA</td>
                    <td>FOTOS</td>
                   
			</tr>
             
                <td>
                <input type="text" name="prop" value="<?php echo $dados['proprietario']; ?>">
                </td>
                
                <td>
                <input type="text" name="ter1" VALUE="<?php echo $dados['terreno'];?>">
                </td>
                
             
                
                 <td>
                <input type="text" name="senh" value="<?php echo $dados['senha']; ?>">
                 </td>
       
   				<td>
                <img src="imagens/<?php echo $ft_capa; ?>" width="150">
                 </td>
         </table>    
         		<input type="hidden" name="btn_editar" value="<?php echo $id; ?>">     
                <input type="submit" value="CADASTRAR" name="btn-editar">
                
                </form>

</body>
</html>