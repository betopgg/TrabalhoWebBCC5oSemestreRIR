<?php

require 'conectabanco.php';
require 'usuario.class.php';

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    $u = new Usuario();

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

if($u->login($email, $senha) == true) {
    if(isset($_SESSION['id'])){
        header('Location: ../areausuario.php');

    }
else{
    header('Location: ../login.html');
}
}

else{
    header('Location: ../login.html');

}

}

else{

    header('Location: ../login.html');

}

?>