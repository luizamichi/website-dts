<?php

if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$name = strip_tags(htmlspecialchars($_POST["name"]));
	$email = strip_tags(htmlspecialchars($_POST["email"]));
	$phone = strip_tags(htmlspecialchars($_POST["subject"]));
	$message = strip_tags(htmlspecialchars($_POST["message"]));

	$to = "davizao_tavares@hotmail.com";
	$subject = "Formulário de contato do site 'Davi Tavares Santos'";
	$body = "Você recebeu uma nova mensagem do formulário de contato do seu site." . PHP_EOL . "Aqui estão os detalhes:" . PHP_EOL . "Nome: $name" . PHP_EOL . "E-mail: $email" . PHP_EOL . "Assunto: $subject" . PHP_EOL . "Mensagem: $message";
	$header = "MIME-Version: 1.1" . PHP_EOL;
	$header .= "From: naoresponder@davitavaressantos.com" . PHP_EOL;
	$header .= "Reply-To: $email";
	mail($to, $subject, $body, $header);
}

	header("Location: index.html");
	exit();
