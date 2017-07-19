<!DOCTYPE html>
<html>
    <head>
        <title>1 - PHP e Banco de dados</title>
    </head>

    <body>
        <form action="cadastro.php" method="post">
            <input type="text" name="nome" value="" />
            <input type="text" name="email" value="" />
            <input type="password" name="senha" value="" />
            <input type="submit" value="Enviar" />
        </form>
        <?php
            if(isset($_GET['erro'])){
                if($_GET['erro'] == 1){
                    echo "<h2>Email incorreto!</h2>";
                }
                if($_GET['erro'] == 0){
                    echo "<h2>Campos vazios ou preenchidos incorretamente!</h2>";
                }
            }
        ?>
    </body>
</html>
