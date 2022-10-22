<!DOCTYPE html>
<html lang="pt-br">
	<head>

		<meta charset="utf-8"/>
		<title>Park Serviços Terceirizados</title>
		<meta name="description" content="Somos uma empresa especializada em serviços terceirizados.
		A Park serviços foi criada devido a grande demanda no mercado. No ano de 2018 a Park é formada por pessoas como você que acreditam na importância de um ambiente de trabalho tranquilo e seguro para viver."/>
		<meta name="keywords" content="Serviços,Terceirizado,bombeiro,limpeza,segurança,camareira,recepcionaista,pintura,contato"/>
		<link rel="icon" href="../_imagens/logo_tituloPark.png" type="image/x-icon" />
		<link rel="stylesheet" href="../_css/contato.css"/>

	</head>
	<body>

		<?php

			isset($_GET["detalhes"]);

	 		if(isset($_GET["detalhes"])){
				if($_GET["detalhes"]==1){
					?><script> alert("Menssagem enviada com sucesso !");</script><?php
				}
				else if($_GET["detalhes"]==2){
					?><script> alert("Menssagem nao enviada <br>Por favor verificar as informações! ");</script><?php
				}
				else{}
			}else{}

		?>

		<header>
			<nav>
				<ul>
					<li id="img"><img src="../_imagens/logo_park.png"  width="100%"/></li>

					<li><h1>Serviços Terceirizado</h1></li>

					<li class="opcoes"><a href="../_html/home.html">Quem Somos<a></li>
					<li class="opcoes"><a href="../_html/servicos.html">Serviços<a></li>
					<li class="opcoes"><a href="../_php/contato.php">Contato<a></li>
				</ul>

			</nav>
		</header>

		<section>
			<figure>
				<img src="../_imagens/capa2.jpg"  width="100%"/>
				<figcaption>
					<form action="../_php/enviardados.php" method="POST" name="formulario_contato" id="formularioContato">
						<input type="text" name="lbNome" id="nome" placeholder="Nome" maxlength="30" >
						<input type="text" name="lbEmail" id="email" placeholder="E-mail" maxlength="30">
						<input type="text" name="lbTelefone" id="telefone" placeholder="Telefone" maxlength="11">
						<input type="text" name="lbAssunto" id="assunto" placeholder="Assunto" maxlength="15">
						<textarea name="lbConteudo" id="menssagem"  placeholder="Conteudo..." maxlength="300" ></textarea>
						<input type="submit" name="enviar" id="enviar" >
						<input type="reset" name="limpa" value="Limpar" id="limpar">
					</form>
				</figcaption>
			</figure>
		</section>

		<footer>
			<p>Copyright &copy; 2018 - Park Serviços </br>
			<a href="https://www.facebook.com/" target="_blank">Facebook</a> | <a href="https://www.twitter.com/" target="_blank">Twitter</a></p>
		</footer>

	</body>
</html>
