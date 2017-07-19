<?php
    function usuarioInsere($nome, $email, $senha){
        include("conect_database.php");
        if(is_string($nome) && is_string($email) && is_string($senha)){
            $senha_codificada_md5 = md5($senha);

            $sql = "INSERT INTO usuario(nome, email, senha) VALUES(:nome, :email, :senha_codificada_md5)";

            $result = $PDO->prepare($sql);

            $result->bindValue(":nome", $nome);
            $result->bindValue(":email", $email);
            $result->bindValue(":senha_codificada_md5", $senha_codificada_md5);
            $result->execute();

            return true;
        }
        return false;
    }

    $nome = "Vinicius";
    $email = "viniciusklira@gmail.com";
    $senha = "123";

    echo usuarioInsere($nome, $email, $senha);
?>
