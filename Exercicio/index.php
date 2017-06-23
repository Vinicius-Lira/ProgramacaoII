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
            if($_GET['n']=='nome' && $_GET['s']==12345){
                header("Location: ok.php?login=1");
            }else{
                header("LOcation: form.php?login=0");
            }
        ?>
    </body>
</html>
