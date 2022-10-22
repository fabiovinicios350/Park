<?php

	require 'PHPMailer/PHPMailerAutoload.php';


	$nome = $_POST["lbNome"];
	$email = $_POST["lbEmail"];
	$telefone = $_POST["lbTelefone"];
	$assunto = $_POST["lbAssunto"];
	$conteudo = $_POST["lbConteudo"];

	$menssagem = "	<p>$conteudo</p><br>
					Ass: $nome<br>
					E-mail: $email<br>
					Tel: $telefone</p>";

	$mail = new PHPMailer();

	$mail->SMTPDebug = 0;
	$mail->CharSet="utf-8";
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "contatopark2019@gmail.com";
	$mail->Password = "contato2019";
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;


	$mail->FromName ='Park-Site';
	$mail->From = 'contatopark2019@gmail.com';
	$mail->addAddress("contato@parkterc.com.br","Park");

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = $menssagem;

	$mail->send();

	if(!$mail->send()) {
		echo $mail->ErrorInfo;
		header("Location:../_php/contato.php?detalhes=2");
	}
	else {
		header("Location:../_PHP/contato.php?detalhes=1");
	}

?>
