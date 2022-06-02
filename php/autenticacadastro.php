<?php
	// abre conexao com o banco 
	require 'conectabanco.php';

	if(!isset($_SESSION)){

		session_start();
	}

	$nome = $_POST["name"];
	$CPF = $_POST["cpf"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
    $datanascimento = $_POST["dataN"];
    $telefone = $_POST["tele"];
    $cep = $_POST["cep"];
	$dataia = $_POST["dia"];
<<<<<<< HEAD
	$justificativa = $_POST["justificativa"];
=======
    $justificativa = $_POST["justificativa"];
>>>>>>> origin/php

	$endereco = $_POST["endereco"];
	$complemento = $_POST["complemento"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$uf = $_POST["uf"];

	$enderecocompleto = $endereco . ", " . $bairro . ", " . $cidade . ", " . $uf . ", " . $complemento; 

	//monta sql para o banco de dados ,
	$sql = "INSERT  INTO  pseudo_dados (NomeCompleto, CPF, Email, Senha, DataNascimento, Telefone, CEP, Endereco, dataida, justificativa)  
<<<<<<< HEAD
	VALUES ('" . $nome . "','" . $CPF . "','" . $email . "','" . $senha . "','" . $datanascimento . "','" . $telefone . "','" . $cep . "','" . $enderecocompleto . "','" . $dataia ."','" . $justificativa . "')";
=======
	VALUES ('" . $nome . "','" . $CPF . "','" . $email . "','" . $senha . "','" . $datanascimento . "','" . $telefone . "','" . $cep . "','" . $enderecocompleto . "','" . $dataia . "','" . $justificativa . "')";
>>>>>>> origin/php
	echo $sql;
	echo "<br><br>";

	$stmt = $pdo->prepare($sql);
	$stmt->execute();


	header('Location: ../cadastro-feito.html');
?>
