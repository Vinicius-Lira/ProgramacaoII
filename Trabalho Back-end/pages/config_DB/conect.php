<!DOCTYPE html>
<html>
    <head>
        <title>Conect DB</title>
    </head>
    <body>
        <?php
            define('MYSQL_HOST', 'localhost');
            define('MYSQL_USER', 'root');
            define('MYSQL_PASSWORD', '');
            define('MYSQL_DB_NAME', 'COMPARAJOGOS');

            try{
                $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
                $PDO->exec("set names utf8");
            }catch (PDOException $e){
                echo 'Erro ao conectar com o MySQL: ' . $e->getMassage();
            }

        ?>
    </body>
</html>
