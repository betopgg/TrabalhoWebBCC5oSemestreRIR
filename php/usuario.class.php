<?php

class usuario {

    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM pseudo_dados WHERE email = :email AND senha = :senha ";
        $sql = $pdo->prepare($sql);
        $sql->bindvalue("senha", md5($senha));
        $sql->bindvalue("email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['id'] = $dado['id'];
            $_SESSION['nome'] = $dado['nome'];
            return true;
        
        }

        else{ 
            return false;
        }

    }

}
?>