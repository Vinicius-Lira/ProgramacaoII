<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <title>ECHO PHP</title>
    </head>

    <body>
        <?php
            echo "Hoje é dia " .date('d/m/Y');
            echo "Agora são " .date('H:i:s');
        ?>

        <?php
            if($_GET['u']=='usuario' && $_GET['s']==12345){
                header("Location: conteudo.php?login=1");
            }else{
                header("LOcation: index.php?login=0");
            }

            $_SESSION['nome'] = $_GET['n'];
        ?>
    </body>
</html>
