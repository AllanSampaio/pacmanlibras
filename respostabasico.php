<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pacman Libras - Curiosidades</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg111">
<div class="container">
		<div class="row header">
		<div class="logo navbar-left">
			<h1>Resultado das Questões</h1>	
		</div>
				<div class=" navbar-right"> 
				<form method="POST" action="login.php">
					<font size=2" color="000000" face="regular">
					<span>Login:&nbsp&nbsp</span><input type="text" name="login" id="login" ><br>
					<label>Senha:&nbsp</label><input type="password" name="senha" id="senha"><br>
					</font>
					<center>
					<a href="cadastro.html"><span>Cadastre-se</span></a>&nbsp&nbsp&nbsp
					<a href="esquecisenha.html"><span>Esqueci a senha</span></a></br>
					</center>
					<center><input type="submit" value="entrar" id="entrar" name="Entrar"></center>

				</form>
				</div>
			<div class="h_search navbar-left">
					<form id="demo-2">
						<input type="search" placeholder="Search" > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</form>
			</div>
		
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="index.html">Pagina Inicial</a></li>
		        <li><a href="historia.html">História da Libras</a></li>
		        <li><a href="instituicoes.html">Instituições</a></li>
		        <li><a href="eventos.html">Eventos</a></li>
		        <li><a href="atvbasico.html">Atividades</a></li>
				<li><a href="curiosidades.html">Curiosidades</a></li>
				<li><a href="legislacao.html">Legislação</a></li>
				<li><a href="contato.html">Contato</a></li>
				</ul>
		    </div>	     
		</nav>
		<!-- <div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>	
		</div> -->
	</div>
	<div class="clearfix"></div>
</div>
</div>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<?php

				$questao1 = $_POST['questao1'];
				$questao2 = $_POST['questao2'];
				$questao3 = $_POST['questao3'];
				$questao4 = $_POST['questao4'];
				$questao5 = $_POST['questao5'];
				$questao6 = $_POST['questao6'];
				$questao7 = $_POST['questao7'];
				$questao8 = $_POST['questao8'];
				$questao9 = $_POST['questao9'];
				$questao10 = $_POST['questao10'];


				echo "<h1>Suas Respostas:</h1>";
				echo"Questao 1 = $questao1<br>";
				echo"Questao 2 = $questao2<br>";
				echo"Questao 3 = $questao3<br>";
				echo"Questao 4 = $questao4<br>";
				echo"Questao 5 = $questao5<br>";
				echo"Questao 6 = $questao6<br>";
				echo"Questao 7 = $questao7<br>";
				echo"Questao 8 = $questao8<br>";
				echo"Questao 9 = $questao9<br>";
				echo"Questao 10 = $questao10<br>";


				echo "<h1>Resultado:</h1>";

				$resposta1 = "a";
				$resposta2 = "c";
				$resposta3 = "c";
				$resposta4 = "a";
				$resposta5 = "c";
				$resposta6 = "d";
				$resposta7 = "a";
				$resposta8 = "c";
				$resposta9 = "a";
				$resposta10 = "c";

				$acertou = 0;
				$errou = 0;
				if ($questao1 == $resposta1){
				$acertou++;
				echo " Questao 1: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 1: <font color = red>errada<br></font>";
				}
				if ($questao2 == $resposta2){
				$acertou++;
				echo " Questao 2: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 2: <font color = red>errada<br></font>";
				}
				if ($questao3 == $resposta3){
				$acertou++;
				echo " Questao 3: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 3: <font color = red>errada<br></font>";
				}
				if ($questao4 == $resposta4){
				$acertou++;
				echo " Questao 4: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 4: <font color = red>errada<br></font>";
				}
				if ($questao5 == $resposta5){
				$acertou++;
				echo " Questao 5: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 5: <font color = red>errada<br></font>";
				}
				if ($questao6 == $resposta6){
				$acertou++;
				echo " Questao 6: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 6: <font color = red>errada<br></font>";
				}
				if ($questao7 == $resposta7){
				$acertou++;
				echo " Questao 7: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 7: <font color = red>errada<br></font>";
				}
				if ($questao8 == $resposta8){
				$acertou++;
				echo " Questao 8: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 8: <font color = red>errada<br></font>";
				}
				if ($questao9 == $resposta9){
				$acertou++;
				echo " Questao 9: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 9: <font color = red>errada<br></font>";
				}
				if ($questao10 == $resposta10){
				$acertou++;
				echo "Questao 10: <font color = green>correta<br></font>";
				}
				else
				{
				$errou++;
				echo " Questao 10: <font color = red>errada<br></font>";
				}
				echo "<br>No total você obteve $acertou acertos, e errou $errou vezes.";

				?> 
	</div>
</div><!-- end main -->

<br><br><br><br><br><br>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-left">
				<p> <span style="text-indent: left;">Visite nossas redes sociais:<br></span></p>
		<a href="https://www.facebook.com/pacman.libras.9" target="_blank"><img src="images/iconefb.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="https://www.instagram.com/portalpacmanlibras/" target="_blank"><img src="images/iconeig.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://twitter.com/PacmanLibras" target="_blank"><img src="images/iconett.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://plus.google.com/103196381126989669819?hl=pt-BR" target="_blank"><img src="images/iconeg+.png"></a>
					<div class="copy text-right">
				<p class="link"><span style="text-align: right;">&#169; Todos os direitos reservados | Design by&nbsp;PACMAN LIBRAS</span></p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>