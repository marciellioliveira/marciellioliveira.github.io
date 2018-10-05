<?php 

	/* Pega os dados do usuário, faz o cadastro no banco de dados e envia mensagem de confirmação no email
	O status é iniciado com 0 e quando o usuário confirmar no email ele será um - TekRadius*/


$host = "mysql:dbname=projca;host=localhost";
$usuario = "root";
$senha = "";

	try {		

		$pdo = new PDO($host,$usuario,$senha);

	} catch (PDOException $e) {

		echo "Falha: ".$e->getMessages();

	}

	$username = addslashes($_POST['username']);
	$email = addslashes($_POST['email']);
	$senha1 = md5(addslashes($_POST['senha1']));

	$pdo->query("INSERT INTO usuario SET username='$username', email='$email', senha='$senha1'");

	$id = $pdo->lastInsertId();
	$md5 = md5($id);

	$assunto = "Confirme seu cadastro";
	$link = "http://localhost/www/validarformulario/confirmaAdm.php?h=".$md5;
	$mensagem = "Clique aqui para confirmar seu cadastro".$link;
	$header = "From: Projeto Clareana";

	mail($email, $assunto, $mensagem, $header);

?>