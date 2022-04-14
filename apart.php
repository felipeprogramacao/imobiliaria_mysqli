<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Imóveis Caxias do Sul - Apartamentos</title>

<link rel="stylesheet" href="arqv/css/bootstrap.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
<link rel="stylesheet" href="arqv/css/casas.css" type="text/css"/>
</head>

<body>

<?php include 'nav.php'; ?>



						
<br>
<form method="POST" id="form_cadast">
<br>
<h2 id="cab_casas" align="center"  ><u>APARTAMENTOS</u></h2>
<br><br>
</form>
    
    
    
							 <?php
            		
								$conectar=mysqli_connect('localhost','root','','imobiliaria');
												
								$dados=mysqli_query($conectar,"SELECT *,(SELECT nome_imagem from imagem_casa WHERE fk_id_casa = casa.id_casa LIMIT 1)as foto_capa FROM casa");
											
								foreach($dados as $value){
												
								 $ft_capa=$value["foto_capa"];
								 $nm_produto=$value["proprietario"]; 
											
										?>

<div class=>
  <div class="row">
    <div class="col-xl">
    <br>
    <img src="imagens/<?php  echo    $ft_capa; ?>" class="img-fluid m-2 width: 30px" alt="Imagem responsiva">
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
    <table class="table table-dark m-1">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Compra</th>
      <th scope="col">Aluguel</th>
      <th scope="col">Investimentos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>veronica@imoveiscaxias.com.br</td>
      <td>sofia@imoveiscaxias.com.br</td>
      <td>vitoria@imoveiscaxias.com.br</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>patricia@imoveiscaxias.com.br</td>
      <td>maria_v@imoveiscaxias.com.br</td>
      <td>sivia@imoveiscaxias.com.br</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>mateus@imoveiscaxias.com.br</td>
      <td>carlos_s@imoveiscaxias.com.br</td>
      <td>pedro_a@imoveiscaxias.com.br</td>
    </tr>
  </tbody>
</table>
    
  </div>






<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pesquisa Imóveis Caxias do Sul</title>




<nav class="navbar navbar-expand-lg navbar-navbar-dark bg-dark"> 

 
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="btn btn-outline-light mr-sm-1" href="#">Contato (54) 9 9897 4774</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     
     
    </ul>
  
  </div>
</nav>



<script src="arqv/js/jquery-3.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="arqv/js/popper.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="arqv/js/bootstrap.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body></html>