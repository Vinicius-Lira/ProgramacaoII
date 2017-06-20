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
            define('MYSQL_DB_NAME', 'CJ');
	
		/*
		define('MYSQL_HOST', 'mysql.hostinger.com.br');
            define('MYSQL_USER', 'u675780019_root');
            define('MYSQL_PASSWORD', '100ajuste');
            define('MYSQL_DB_NAME', 'u675780019_cj');*/

            try{
                $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
                $PDO->exec("set names utf8");
            }catch (PDOException $Exception){
                echo 'Erro ao conectar com o MySQL: ' . $Exception->getMessage();
            }

        ?>
    </body>
</html>
