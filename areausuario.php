<script type="text/javascript" src="./js/jquery.js"></script>


include('./php/protect.php'); //inclui o arquivo que protege a página
require('./php/conectabanco.php'); //inclui o arquivo que faz a conexão com o banco
// require('./php/buscadados.class.php'); //inclui class usuario


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
        <p class="titulo-area-usuario">E-mail:  <p>
        <p> <?php echo $_SESSION['email'] ?>  </p>
        <p class="titulo-area-usuario">Data de Nascimento:  <p>
        <p><?php echo $_SESSION['datan'] ?></p>
        <p class="titulo-area-usuario">CPF: </p>
        <p><?php echo $_SESSION['cpf'] ?></p>
        <p class="titulo-area-usuario">Endereço: </p>
        <p><?php echo $_SESSION['endereco'] ?></p>
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


