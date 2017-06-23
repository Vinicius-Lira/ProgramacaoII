<?php session_start() ?>
<!DOCTYPE html>
<html>
        <head>
                <title>Agenda sobre pessoas</title>
                <meta charset="utf-8" />
        </head>

        <body>
                <h1>Gerenciador de Contatos</h1>
                <form>
                    <fieldset>
                            <label>Nome:
                                    <input type="text" name="nome">
                                    <input type="submit" value="Salvar">
                            </label>
                    </fieldset>
                </form>

                <?php
                        $lista_contatos=[ ];
                        if(array_key_exists('nome', $_GET)){
                            $_SESSION['lista_contatos'][] = $_GET['nome'];
                        }
                        if( array_key_exists('lista_contatos', $_SESSION ) ) {
                                $lista_contatos=$_SESSION['lista_contatos'];
                        }

                        /*if(isset($_GET['nome'])){
                            $lista_contatos[] = $_GET['nome'];
                        }*/
                ?>

                <table>
                        <tr><th>Contatos: </th></tr>
                        <?php foreach($lista_contatos as $contato): ?>
                        <tr>
                                <td><?php echo $contato; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
        </body>
</html>
