<?php
    session_start();
    include("config_DB/function_php.php");
    include("config_DB/conectaDB.php");

    $idjogo = $_SESSION['IDDOJOGO'];
    $idusuario = $_SESSION['IDUSUARIO'];
    $comentario = $_POST['Coment'];

    if(isset($_SESSION['IDDOJOGO']) && isset($_SESSION['IDUSUARIO']) && isset($_POST['Coment'])){
        $sql = "INSERT INTO COMENTARIOS(COMENTARIO, IDJOGO, IDUSER, DATACOMENTARIO) VALUES(:comentario, :idjogo, :iduser, :datacomentario)";
        $result = $PDO->prepare($sql);
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d-m-Y H:i');

        $result->bindValue(":comentario", $comentario);
        $result->bindValue(":idjogo", $idjogo);
        $result->bindValue(":iduser", $idusuario);
        $result->bindValue(":datacomentario", $date);
        $result->execute();
        echo 'inserido';
    }

    header("Location: paginajogo.php?id=$idjogo");
 ?>
