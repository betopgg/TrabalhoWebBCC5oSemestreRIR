<?php
	// abre conexao com o banco 
	require_once '../BD/Conectabanco.php';

	print_r($_POST);
	echo "<br><br>";
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];


	//monta sql para o banco de dados ,
	$sql = "INSERT  INTO  pseudo_dados (NomeCompleto, CPF, Email, Senha, DataNascimento, Telefone, CEP, Endereco)  VALUES ('" . $nome . "','" . $email . "','" . $senha . "')";
	echo $sql;
	echo "<br><br>";

	$stmt = $pdo->prepare($sql);
	$stmt->execute();

	header('Location: ');
?>
