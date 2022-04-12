<!DOCTYPE HTML>
<html>
<head>

<title>Casas - Venda</title>

<link rel="stylesheet" href="arqv/bootstrap.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
<link rel="stylesheet" href="elenita.css" type="text/css"/>


</head>
<body>

<?php include 'nav.php'; ?>

<div id="carouselExampleFade" class="carousel slide carousel-fade m-1" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img class="d-block w-100" src="arqv/foto1.jpg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="arqv/foto2.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="arqv/foto3.jpg" alt="Terceiro Slide">
    </div>
  </div>
  
</div>



<nav class="navbar navbar-expand-lg navbar-navbar-dark bg-dark"> 

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Sua procura." aria-label="Pesquisar">
      <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
      
    </form>
  </div>
</nav>
 <?php
            		
	$conectar=mysqli_connect('localhost','root','','formulario_produtos');
					
	$dados=mysqli_query($conectar,"SELECT *,(SELECT nome_imagem from imagens WHERE fk_id_produto = produtos.id_produto LIMIT 1)as foto_capa FROM produtos");
				
	foreach($dados as $value){
					
     $ft_capa=$value["foto_capa"];
	 $nm_produto=$value["nome_produto"]; 
				
			?>

<div class="container&gt;
  &lt;div class=" row"="">
    <div class="col-sm-7">
     <div class="container float-left">
<div class="w-100  p-3" ;"="">
<div class="fixed-absolute">



 <img src="imagens/<?php   ?>" class="img-fluid m-2 -width: 30px" alt="Imagem responsiva">
</div>
</div>
</div>
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
    <hr>
    				<?php } 
					
					
		include 'pagina_4.php';			
					?>
    
    