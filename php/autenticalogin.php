<?php

require_once 'conectabanco.php';
require_once 'usuario.class.php';

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    $u = new Usuario();

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

if($u->login($email, $senha) == true) {
    if(isset($_SESSION['id'])){
        header('Location: entrar.php');

    }
else{
    header('Location: login.php');
}
}

else{
    header('Location: login.php');

}

}

else{

    header('Location: login.php');

}

?>