<?php
    function atualiza_nome($id, $nome){
        include("conect_database.php");
        $sql = "UPDATE usuario SET nome='$nome' WHERE id='$id'";
        $result = $PDO->query($sql);
    }

    atualiza_nome(1, "Vinicius");
?>
