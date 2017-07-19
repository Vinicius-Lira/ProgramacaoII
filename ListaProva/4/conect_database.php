<?php
    define('MYSQL_HOST', 'localhost');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB_NAME', 'usuarios');

    $conexao = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB_NAME);

    if(mysqli_connect_errno($conexao)){
        echo "Problemas para conectar o banco. Erro: ";
        echo mysqli_connect_error();
        die();
    }
 ?>
