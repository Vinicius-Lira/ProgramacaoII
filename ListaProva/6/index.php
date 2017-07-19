<?php
    function podeLogar($email, $senha){
        include("conect_database.php");

        $sql = "SELECT * FROM usuario WHERE (email='$email') AND (senha='$senha')";
        $result = $PDO->query($sql);
        $num_rows = $result->fetchColumn();

        if($num_rows){
            return true;
        }else{
            return false;
        }
    }

    $email = "viniciusklira@gmail.com";
    $senha = "123";

    if(podeLogar($email, $senha)){
        echo "<h3>Login com sucesso!</h3>";
    }else{
        echo "<h3>Falha no login!</h3>";
    }
 ?>
