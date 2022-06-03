<script type="text/javascript" src="./js/jquery.js"></script>


<?php

if(!isset($_SESSION)){

  session_start();
}

include('./php/protect.php'); // proteção de sessão
require('./php/conectabanco.php'); // Conecta ao banco de dados


?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <link rel="stylesheet" type="text/css" href="./css/areausuario.css">
        <title>Projeto Rock in Rio - Desenvolvimento Web 5o Semestre</title>
    </head>
    <body>

  <header>
        <nav>
        <a href="index.html"><img class="nav-logo" src="./img/logo_rio.png" /></a>
        <ul class="nav-list">
          <li><a href="./regulamento.html">REGULAMENTO</a></li>
          <li><a href="./index.html">SOBRE</a></li>
          <li><a href="./login.html">VERIFICAR CADASTRO</a></li>
          <li><a href="./php/logout.php">Sair</a></li>
        </ul>
        </nav>
  </header>

  <main>
      <div id="bloco-login" class="bloco-ticket bloco-login">
        <img src="">
        <h2>Meu Cadastro</h2>
        <p class="titulo-area-usuario">E-mail: <?php echo $_SESSION["email"]; ?> <p>
        <p>Email-puxado do banco</p>
        <p class="titulo-area-usuario">Data de Nascimento: <?php echo $_SESSION["dataN"]; ?> <p>
        <p>Data puxada do banco</p>
        <p class="titulo-area-usuario">CPF: <?php echo $_SESSION["cpf"]; ?></p>
        <p>CPF puxado do banco</p>
        <p class="titulo-area-usuario">Endereço: <?php echo $enderecocompleto; ?></p>
        <p>Endereço puxado do banco</p>
        </div>

        <div id="bloco-login" class="bloco-ticket bloco-login">
          <img src="">
          <h2>Status do cadastro</h2>
          <form action="">
              <p>Seu cadastro foi confirmado, fique atento ao seu e-mail para o resultado do sorteio. Caso vocë seja sorteado, seu ingresso também aparecerá nessa página</p>
          <script type="text/javascript" src="./js/main.js"></script>
  </main>
    </body>
</html>


