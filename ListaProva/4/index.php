<?php
    function deleteByRange($idMin, $idMax){
        include("conect_database.php");
        for($i = $idMin; $i <= $idMax; $i++){
            $sql = "DELETE FROM usuario WHERE id=".$i;
            mysqli_query($conexao, $sql);
        }
    }

    $idMin = 4;
    $idMax = 5;
    deleteByRange($idMin, $idMax);
?>
