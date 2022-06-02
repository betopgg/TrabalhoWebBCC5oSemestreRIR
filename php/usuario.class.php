<?php

class usuario {

    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM pseudo_dados WHERE email = :email AND senha = :senha ";
        $sql = $pdo->prepare($sql);
        $sql->bindvalue("senha", $senha);
        $sql->bindvalue("email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['id'] = $dado['id'];
            $_SESSION['name'] = $dado['name'];
            $_SESSION["cep"]= $dado['cep'];
            $_SESSION["cpf"]= $dado['cpf'];
            $_SESSION["email"]= $dado['email'];
            $_SESSION["senha"]= $dado['senha'];
            $_SESSION["dataN"]= $dado['dataN'];
            $_SESSION["tele"]= $dado['tele'];
            $_SESSION["cep"]= $dado['cep'];
            $_SESSION["dia"]= $dado['dia'];
            $_SESSION["justificativa"]= $dado['justificativa'];
            $_SESSION["endereco"]=$dado['endereco'];
            $_SESSION["complemento"]= $dado['complemento'];
            $_SESSION["bairro"]=$dado['bairro'];
            $_SESSION["cidade"]=$dado['cidade'];
            $_SESSION["uf"]=$dado['uf'];
            $_SESSION["endereço completo"] = $dado['endereco'] . "," . $dado['bairro'] . "," . $dado['cidade'] . "," . $dado['uf']; 


            return true;
        
        }

        else{ 
            return false;
        }

    }

}
?>