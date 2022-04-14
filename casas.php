<?php include 'pages/header.php'; ?>
<title>Imóveis Casas</title>
<?php include 'nav.php'; ?>
						
<br>
<form method="POST" id="form_cadast">
<br>
<h2 id="cab_casas" align="center"  ><u>CASAS</u></h2>
<br><br>
</form>
    
							 <?php
            		
								 include 'conectar.php';  
												
								$dados=mysqli_query($conectar,"SELECT *,(SELECT nome_imagem from imagem_casa WHERE fk_id_casa = casa.id_casa LIMIT 1)as foto_capa FROM casa");
											
								foreach($dados as $value){
													
								 $ft_capa=$value["foto_capa"];
								 $nm_produto=$value["imovel"];
								 $imovel=$value["imovel"];
								 $terreno=$value["terreno"]; 
								$proprietario=$value["proprietario"];			
										?>

<div>
  <div class="row">
    <div class="col-xl">
    <br>
    <img src="imagens/<?php  echo    $ft_capa; ?>" class="img-fluid m-2 width: 30px" alt="Imagem responsiva">
    </div>
    
    <div class="col-sm  mt-4">
      <ul class="list-group">
 
  <li class="list-group-item list-group-item-success"><?php echo    '<h2>'.$imovel.'</h2>'; ?> </li>
  <li class="list-group-item list-group-item-light">Terreno  <b><?php echo   $terreno; ?></b></li>
  <li class="list-group-item list-group-item-light">Área Total <b><?php echo   $nm_produto; ?></b></li>
  <li class="list-group-item list-group-item-light">2 Banheiros <b><?php echo   $nm_produto; ?></b></li>
  <li class="list-group-item list-group-item-light">2 Suítes</li>
  <li class="list-group-item list-group-item-light">Piscina</li>
  <li class="list-group-item list-group-item-light">2 Vagas na Garagem</li>
  <li class="list-group-item list-group-item-light">Corretor <b><?php echo   $proprietario; ?></b>             <a href="https://wa.me/55519999999"><img src="image/designe/wht.jpg" width="280" height="46"></a></li>
  
</ul>
	 </div>
    </div>
  </div>
</div>
    <?php } ?>
    
    
    
    
    <br>
    
    <?php require 'pages/footer.php' ?>