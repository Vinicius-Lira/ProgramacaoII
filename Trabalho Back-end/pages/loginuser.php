<?php
    session_start();

    include("config_DB/function_php.php");
    include("config_DB/conectaDB.php");

    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }else {
        header("Location: login.php?error=404");
    }
    if(isset($_POST['senha'])){
        $password = $_POST['senha'];
    }else {
        header("Location: login.php?error=404");
    }

    if(($username != "") && ($password != "")){
        $sql = "SELECT * FROM USUARIOS WHERE USERNAME='$username'";
        $result = $PDO->query($sql);
        $rows = $result->fetchAll( PDO::FETCH_ASSOC);

        if(($rows[0]['SENHA'] == $password) && ($rows[0]['USERNAME'] == $username)){
            $_SESSION['USER'] = $username;
            $_SESSION['LOGIN'] = 1;
            header("Location: ../index.php");
        }else {
            header("Location: login.php?error=405");
        }
    }else {
        header("Location: login.php?error=406");
    }

?>
