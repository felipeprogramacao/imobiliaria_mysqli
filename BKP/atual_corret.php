<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Imóveis Caxias do Sul - Casas</title>

<link rel="stylesheet" href="arqv/bootstrap.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
<link rel="stylesheet" href="casas.css" type="text/css"/>

   <?php
        
		 include 'conectar.php';  
		
		$dados=mysqli_query($conectar,"SELECT *,(SELECT nome_imagem from imagem_casa WHERE fk_id_casa=casa.id_casa LIMIT 1)as foto_capa FROM casa");
	
		
		
		?>
</head>

<body>

<?php include 'nav.php'; ?>


						
<br>
<form method="POST" id="form_cadast">
<br>
<h2 id="cab_casas" align="center"  ><u>CADASTRE E ATUALIZE SEUS IMÓVEIS</u></h2>
<br><br>
</form>
    
						

<h2 align="center">LISTA DE CLIENTES</h2>
                
                
<table border="3" align="center">
			<tr>
					<td>PROPRIETÁRIO</td>
                    <td>TERRENO</td>
                    <td>SENHA</td>
                    <td>FOTOS</td>
                    <td>APAGAR</td>
			</tr>
            			
                        <?php
                        		foreach($dados as $xx1){
									$proprie=$xx1["proprietario"];
									$terren=$xx1["terreno"];
									$senha_mostrar=$xx1["senha"];
									$id=$xx1["id_casa"];
									$ft_capa=$xx1["foto_capa"];
									
										
						?>
                        
            <tr>
					<td><?php echo $proprie; ?></td>
                    <td><?php echo $terren;  ?></td>
                    <td><?php echo $senha_mostrar; ?></td>
                    <td><img src="imagens/<?php echo $ft_capa; ?>" width="300"></td>
                    
                    <td>
					
									<form action="deletar.php" method="POST">
                                    <input type="hidden" name="btn_delete" value="<?php echo $id; ?>">
                                    <button type="submit" name="">DELETAR</button>
									</form>
                                    
                                    <form action="editar.php" method="POST">
                                    <input type="hidden" name="btn_editar" value="<?php echo $id; ?>">
                                    <button type="submit" name="">EDITAR</button>
									</form>
					
					</td>
			</tr>
           
            <?php } ?>

</table>



<nav class="navbar navbar-expand-lg navbar-navbar-dark bg-dark"> 

 
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="btn btn-outline-light mr-sm-1" href="#">Contato (54) 9 9897 4774</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     
     
    </ul>
  
  </div>
</nav>



<script src="arqv/jquery-3.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="arqv/popper.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="arqv/bootstrap.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body></html>