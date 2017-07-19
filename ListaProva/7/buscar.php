<?php
    function busca_usuario($email){
        include("conect_database.php");

        $sql = "SELECT * FROM usuario WHERE email='$email'";
        $result = $PDO->query($sql);
        $rows = $result->fetchAll( PDO::FETCH_ASSOC);

        $num_rows = 0;
        foreach ($rows as $rows_i) {
            $num_rows += 1;
        }

        if($num_rows){
            echo "<h3>ID:" . $rows[0]['id'] . "</h3><br>";
            echo "<h3>Nome:" . $rows[0]['nome'] . "</h3><br>";
            echo "<h3>Email:" . $rows[0]['email'] . "</h3><br>";
            echo "<h3>Senha:" . $rows[0]['senha'] . "</h3><br>";
        }
    }

    $email = "viniciusklira@gmail.com";

    busca_usuario($email);
 ?>
