<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Calcular Taxa de Metabolismo Basal </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body "font-family-base Helvetica Neue">
    <nav class="navbar navbar-expand-lg bg-body-navbar-expand-lg bg-body-dark" style="background-color:	#D3D3D3	;"> 
  <div class="container-fluid">
      <a class="navbar-brand text-danger h1   " href="#"><img src="logo.jpg" width="170" height="150"></a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         <a class="nav-link active text-dark " aria-current="page" href="home.html">Página Inicial</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
		  		  <li><a class="dropdown-item" href="abdomen.html">Abdômen</a></li>
            	<li><a class="dropdown-item" href="biceps.html">Biceps</a></li>
			<li><a class="dropdown-item" href="costa.html">Costa</a></li>
		  	<li><a class="dropdown-item" href="gluteo.html">Glúteo</a></li>
		    <li><a class="dropdown-item" href="ombro.html">Ombro </a></li>
			 <li><a class="dropdown-item" href="panturrilha.html">Panturrilha</a></li>
            <li><a class="dropdown-item" href="peito.html">Peito</a></li>
			 <li><a class="dropdown-item" href="posterior.html">Posterior de Coxa </a></li>
            <li><a class="dropdown-item" href="quadriceps.html">Quadriceps</a></li>
            <li><a class="dropdown-item" href="triceps.html">Triceps</a></li>
		

          </ul>
        </li>
		 <li class="nav-item">
          <a class="nav-link active text-danger" aria-current="page" href="tmb.html">Calcular TMB </a>
        </li>
		<li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="divisaodetreino.html">Divisões de Treino</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="periodizacao.html">Periodização</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="suplementos.html">Comprar Suplementos</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="equipe.html">Contato</a>
        </li>
      </ul>
    </div>
  </div>
  <br>
</nav>
 <div class="p-3 mb-0 bg-dark">
<blockquote class="blockquote text-light text-center  >
<p class="h4"; > 

<?php
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$genero = $_POST['genero'];
$tbm = 0;

	if ($genero =='masculino'){
		$tbm = 88.36 + (13.4 * $peso)  + (4.8 * $altura) - (5.7 * $idade);
	}
	else{
		$tbm = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
	}
$sedentario = $tbm * 1.2;
$moderado = $tbm * 1.55;
$ativo = $tbm * 1.72;
$muito = $tbm * 1.9;
            
		 echo "<p><font size='7px' color='white'  > A sua TMB é de aproximadamente $tbm caloria por dia. </font></p>";
		 echo "<p><font size='5px' color='white'> A sua TMB também depende de como é sua rotina de exercícios:</font></p>";
	 	 echo "<p align=left><font size='5px' color='white' > - Se  não realizar nenhuma atividade física, sua TMB será de $sedentario. </font></p>";
		 echo "<p align=left><font size='5px' color='white'> - Se realizar uma atividade física moderada (exercício ou esporte moderado de 3 a 5 dias/semana), sua TMB será de $moderado. </font></p>";
	 	 echo "<p align=left><font size='5px' color='white' > - Se realizar muita atividade física(exercício ou esporte pesado de 6 a 7 dias/semana), sua TMB será de $ativo. </font></p>";
		  echo "<p align=left><font size='5px' color='white'> - Se for extremamente ativo (exercício ou esporte muito pesado e trabalho físico intenso todos os dias ou se você treina 2x por dia), sua TMB será de $muito. </font></p>";
		   echo"<p> <img src='ganharmassa.jpg' width='524' height='367'> </p>";
		  echo "<p><font size='7px' color='white'> Como perder peso:</font></p>";
		  echo "<p><font size='5px' color='white'> O ideal é que não se consumam menos calorias que o necessário para manter a taxa de metabolismo basal (TMB) por longos períodos.<br> Assim o ideal é que faça um déficit calórico de, no máximo - 500 a 600, do resultado de sua Taxa de Metabolismo Basal de acordo com sua prática de atividade física.</font></p>";
		  echo"<p> <img src='perderpeso.jpg'  width='540' height='360'> </p>";
		  echo "<p><font size='7px' color='white'> Como ganhar peso:</font></p>";
		  echo "<p><font size='5px' color='white'> Se perder peso é comer menops calorias que se ingere, ganhar peso é justamente o contrário, ou seja, você deve ingerir mais calorias que o resultado de sua Taxa de Metabolismo Basal de acordo com sua prática de atividade física.</font></p>";
		  echo"<p> <img src='tmb.jpg'> </p>";



	
	
?>

<div class="p-3 mb-2 bg-dark">
</p></strong></p>
</blockquote>

<div class="p-0 mb-0 bg-dark ">
<blockquote class="blockquote text-dark text-center" >
<p class="h4"; > 

<!-- Footer -->
<footer class="text-center text-lg-start" style="background-color:	#D3D3D3">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
		  <center>
          <h4 class="text-uppercase fw-bold mb-4">
           <p class="fas fa-gem me-3"></i><img src="logo.jpg" width="360" height="240" align="right" >
          </h4>
		<p>Um site onde você encontra os mais variados tipos de exercícios de musculação, além de treinos, opções de compra de suplementos, periodização e um treino feito para você.
          </p></center>
        </div><br>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-danger" >
            Serviços
          </h6>
          <p>
            <a href="home.html" class="text-reset">Home</a>
          </p>
          <p>
            <a href="abdomen.html" class="text-reset">Abdômen</a>
          </p>
          <p>
            <a href="biceps.html" class="text-reset">Biceps</a>
          </p>
          <p>
            <a href="costa.html" class="text-reset">Costa</a>
          </p>
		  <p>
            <a href="gluteo.html" class="text-reset">Gluteo</a>
          </p>
          <p>
            <a href="ombro.html" class="text-reset">Ombro</a>
          </p>
          <p>
            <a href="panturrilha.html" class="text-reset">Panturrilha</a>
          </p>
          <p>
            <a href="peito.html" class="text-reset">Peito</a>
          </p>
		  <p>
            <a href="posterior.html" class="text-reset">Posterior de Coxa</a>
          </p>
          <p>
            <a href="Quadriceps.html" class="text-reset">Quadriceps</a>
          </p>
          <p>
            <a href="triceps.html" class="text-reset">Triceps</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-danger">
            Links Úteis
          </h6>
          <p>
            <a href="home.html" class="text-reset">Home</a>
          </p>
          <p>
            <a href="suplementos.html" class="text-reset">Suplementos</a>
          </p>
          <p>
            <a href="tmb.html" class="text-reset">Calcular TMB</a>
          </p>
		  
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-danger ">Contato</h6>
          <p><i class="fas fa-home me-3"></i> Cândido Mota, SP</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            maahbuzzodeoliveira@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i>(18) 99777-7070</p>
          <p><i class="fas fa-print me-3"></i>(18) 3341-4477</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4 text-danger">
    © 2023 Direitos Reservados
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Marcela Buzzo </a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->  
  </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
