<?php include 'pages/header.php'; ?>
<title>Imóveis Apartamentos</title>
<?php include 'nav.php'; ?>

						
<br>
<form method="POST" id="form_cadast">
<br>
<h2 id="cab_casas" align="center"  ><u>APARTAMENTOS</u></h2>
<br><br>
</form>
    
    
    
							 <?php
            		
								 include 'conectar.php';  
												
								$dados=mysqli_query($conectar,"SELECT *,(SELECT nome_imagem from imagem_casa WHERE fk_id_casa = casa.id_casa LIMIT 1)as foto_capa FROM casa");
											
								foreach($dados as $value){
												
								 $ft_capa=$value["foto_capa"];
								 $nm_produto=$value["imovel"]; 
											
										?>

<div class=>
  <div class="row">
    <div class="col-xl">
    <br>
    <img src="image/<?php  echo    $ft_capa; ?>" class="img-fluid m-2 width: 30px" alt="Imagem responsiva">
    </div>
    
    <div class="col-sm  mt-4">
      <ul class="list-group">
 
  <li class="list-group-item list-group-item-success"><strong>3 QUARTOS - 2x GARAGEM</strong> </li>
  <li class="list-group-item list-group-item-light"><?php echo    '<h2>'.$nm_produto.'</h2>'; ?></li>
  <li class="list-group-item list-group-item-light">Área Total <b>500m2</b></li>
  <li class="list-group-item list-group-item-light">2 Banheiros </li>
  <li class="list-group-item list-group-item-light">2 Suítes</li>
  <li class="list-group-item list-group-item-light">Piscina</li>
  <li class="list-group-item list-group-item-light">2 Vagas na Garagem</li>
  <li class="list-group-item list-group-item-light">Churrasqueira</li>
  <li class="list-group-item list-group-item-light">Área de Lazer - 150 m2</li>
</ul>
 </div>
    </div>
  </div>
</div>
    <?php } ?>
    
    
    <br>
   
    <?php require 'pages/footer.php' ?>