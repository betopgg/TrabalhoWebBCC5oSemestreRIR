<?php
require './php/conectabanco.php';
//require './php/sorteio.class.php';

$sql1 = "SELECT id, NomeCompleto, CPF, dataida FROM pseudo_dados where Nivel <> 'adm' ORDER BY RAND() LIMIT 1";
$sql1 = $pdo->prepare($sql1);
$sql1->execute();
$sorteio = $sql1->fetch();

$_SESSION['id'] = $sorteio['id'];
$_SESSION['nome'] = $sorteio['NomeCompleto'];
$_SESSION['cpf'] = $sorteio['CPF'];
$_SESSION['dia']= $sorteio['dataida'];



var_dump($_SESSION['nome'], $_SESSION['cpf'], $_SESSION['dia'], $_SESSION['id']);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Sorteio</h1>
    <p>parabens <?php echo $_SESSION['nome']; ?>, você foi sorteado para o show do rock in rio no dia <?php echo $_SESSION['dia']; ?>.</p>
    <p>Seu CPF é <?php echo $_SESSION['cpf']; ?>.</p>

        


</body>
</html>