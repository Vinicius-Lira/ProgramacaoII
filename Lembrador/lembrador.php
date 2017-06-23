<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lembrador</title>

        <link rel="stylesheet" type="text/css" href="style.css" />

        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet" />
    </head>

    <body>
        <h1>Lembrador</h1>

        <div id="formulario">
            <form>
                <fieldset id="fieldset">
                    <div class="campo">
                        <label>Nome do lembrete</label><br>
                        <input id="campoNome" type="text" name="nome" size="30" maxlength="30" /><br><br>
                    </div>
                    <div class="campo">
                        <label>Tipo de lembrete</label>
                        <select size="1" id="combobox" name="cbbox">
                            <option selected value=" ">Selecione</option>
                            <option value="Estudo">Estudo</option>
                            <option value="Aula">Aula</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                    <div id="detalhe">
                        <label>Detalhes do lembrete</label><br>
                        <input id="detalhes" type="text" name="detalhe" size="2500" maxlength="2500" wrap="soft" /><br>
                        <input id="salvar" type="submit" value="Salvar" />
                    </div>
                </fieldset>
            </form>

            <?php
                $lista_nome = [];
                $lista_detalhe = [];
                $lista_cbbox = [];
                if(array_key_exists('nome', $_GET)){
                    $_SESSION['lista_nome'][] = $_GET['nome'];
                }

                if(array_key_exists('detalhe', $_GET)){
                    $_SESSION['lista_detalhe'][] = $_GET['detalhe'];
                }

                if(array_key_exists('cbbox', $_GET)){
                    $_SESSION['lista_cbbox'][] = $_GET['cbbox'];
                }

                if(array_key_exists('lista_nome', $_SESSION)){
                    $lista_nome = $_SESSION['lista_nome'];
                }

                if(array_key_exists('lista_detalhe', $_SESSION)){
                    $lista_detalhe = $_SESSION['lista_detalhe'];
                }

                if(array_key_exists('lista_cbbox', $_SESSION)){
                    $lista_cbbox = $_SESSION['lista_cbbox'];
                }
            ?>
        </div>

        <div id="lembretes">
            <h2>Lembretes</h2>
            <table id="tableLembrete">
                <thead>
                    <tr>
                        <th>Lembrete</th>
                        <th>Detalhes</th>
                        <th id="tipo">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i = 0, $size = count($lista_nome); $i < $size; $i++): ?>
                        <tr>
                            <td><?php echo $lista_nome[$i]; ?></td>
                            <td><?php echo $lista_detalhe[$i]; ?></td>
                            <td id="tipo"><?php if($lista_cbbox[$i]) echo $lista_cbbox[$i]; ?></td>
                        </tr>
                    <? endfor; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
