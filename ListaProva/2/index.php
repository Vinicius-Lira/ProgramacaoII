<?php


    function busca_id($email, $senha){
        include("conect_database.php");
        $sql = "SELECT id FROM usuario WHERE (email='$email') AND (senha='$senha')";
        $result = $PDO->query($sql);
        $rows = $result->fetchAll( PDO::FETCH_ASSOC);
        $num_rows = $result->fetchColumn();

        $sql = "SELECT COUNT(id) FROM usuario WHERE (email='$email') AND (senha='$senha')";
        $result = $PDO->query($sql);
        $num_rows = $result->fetchColumn();

        if($num_rows == 0){
            return -1;
        }else{
            return $rows[0]['id'];
        }
    }

    $email = "viniciusklira@gmail.com";
    $senha = "123";
    print busca_id($email, $senha);
 ?>
