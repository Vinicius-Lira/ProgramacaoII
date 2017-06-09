<!DOCTYPE html>
<html>
    <body>
        <?php
            if(isset($_GET['login']) && $_GET['login'] == 0){
                echo 'Login falhou';
            }
        ?>

        <form action="index.php" method="get">
            NOME: <input type="text" name="n" /><br/>
            SENHA:<input type="password" name="s" />
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
