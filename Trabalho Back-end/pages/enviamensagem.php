<?php
    include("config_DB/connect.php");

    if(isset($_POST['Nome']) && isset($_POST['Email']) && isset($_POST['Mensagem'])){
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $mensagem = $_POST['Mensagem'];
    }else{
        header("Location: contato.php?OK=2");
    }

    if(($nome == '') || ($email == '') || ($mensagem == '')){
        header("Location: contato.php?OK=3");
    }else{
        $sql = "SELECT COUNT(*) FROM MENSAGEMCONTATO";
        $result = $PDO->query($sql);
        $id = $result->fetchColumn() + 1;

        $sql = "INSERT INTO MENSAGEMCONTATO VALUES(:id,:nome, :email, :mensagem)";
        $result = $PDO->prepare($sql);

        $result->bindValue(":id", $id);
        $result->bindValue(":nome", $nome);
        $result->bindValue(":email", $email);
        $result->bindValue(":mensagem", $mensagem);
        $result->execute();

        header("Location: contato.php?OK=1");
    }
?>
