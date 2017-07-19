<?php
    function insereSeguro($nome, $email, $senha){
        include("conect_database.php");
        $sql = "SELECT COUNT(email) FROM usuario WHERE email='$email'";
        $result = $PDO->query($sql);
        $num_rows = $result->fetchColumn();

        if($num_rows){
            return false;
        }else{
            //Insere
            $sql = "INSERT INTO usuario(nome, email, senha) VALUES(:nome, :email, :senha)";
            $result = $PDO->prepare($sql);
            $result->bindValue(":nome", $nome);
            $result->bindValue(":email", $email);
            $result->bindValue(":senha", $senha);
            $result->execute();

            return true;
        }
    }

    $nome = "Vinicius Lira";
    $email = "viniciusklira@tese.com";
    $senha = "123";

    if(insereSeguro($nome, $email,$senha)){
        echo "<h3>Inserido com secesso!</h3>";
    }else{
        echo "<h3>Email já existe</h3>";
    }
 ?>
