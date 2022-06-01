<?php
	// abre conexao com o banco 
	require_once '../BD/Conectabanco.php';

	print_r($_POST);
	echo "<br><br>";
	$nome = $_POST["name"];
	$CPF = $_POST["cpf"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
    $datanascimento = $_POST["dataN"];
    $telefone = $_POST["tele"];
    $cep = $_POST["cep"];
	$dataia = $_POST["dia"];
    
	$endereco = $_POST["endereco"];
	$complemento = $_POST["complemento"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$uf = $_POST["uf"];

	$enderecocompleto = $endereco . ", " . $bairro . ", " . $cidade . ", " . $uf . ", " . $complemento; 


	//monta sql para o banco de dados ,
	$sql = "INSERT  INTO  pseudo_dados (NomeCompleto, CPF, Email, Senha, DataNascimento, Telefone, CEP, Endereco, dataida)  VALUES ('" . $nome . "','" . $CPF . "','" . $email . "','" . $senha . "','" . $datanascimento . "','" . $telefone . "','" . $enderecocompleto . "','" . $dataia . "')";
	echo $sql;
	echo "<br><br>";

	$stmt = $pdo->prepare($sql);
	$stmt->execute();

	header('Location: .../index.html');
?>
