<?php
	
	// Define e recebe as variáveis
	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$assunto = $_POST["assunto"];
	$mensagem = $_POST["mensagem"];

	// Chama o arquivo de classe do PHPMailer.php
	require "PHPMailer.class.php";

	// Cria um novo objeto
	$Mailer = new PHPMailer();

	// Define que será usado SMTP no envio do E-mail
	$Mailer->isSMTP();

	// Enviar e-mail em HTML
	$Mailer->isHTML(true);

	// Aceita caracteres especiais
	$Mailer->Charset = "UTF-8";

	// Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = "tls";

	// Qual porta de saída será utilizada no envio do e-mail
	$Mailer->Port = 587;

	// Nome do servidor
	$Mailer->Host = "smtp.astrusweb.com";

	// Usuário e senha do servidor
	$Mailer->Username = "emails@astrusweb.com";
	$Mailer->Password = "astrus12";

	// E-mail remetente
	$Mailer->From = $email;

	// Nome do remetente
	$Mailer->FromName = $email;

	// Assunto da mensagem
	$Mailer->Subject = $assunto;

	// Corpo da mensagem
	$Mailer->Body = "Obrigado por entrar em contato conosco!<br/><br/>Segue abaixo os dados informados!<br/><br/>Nome: $nome<br/>Telefone: $telefone<br/>E-mail: $email<br/><br/>Mensagem: $mensagem<br/>";

	// Destinatário
	$Mailer->AddAddress("planejamento@astrusweb.com");

	if ($Mailer->Send()) {
		echo "
		<script type='text/javascript'>
			alert('E-mail enviado com sucesso. Obrigado!');
			window.location.href = 'Validar_com_JavaScript.php';
		</script>
		";
	}
	else {
		echo "Falha no envio do e-mail. Erro: ".$Mailer->ErrorInfo;
	}

?>