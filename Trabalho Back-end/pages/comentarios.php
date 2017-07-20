<style>
    <?php include("../css/comentarios.css"); ?>
</style>

<?php

    echo '<div class="comentarios">';
        $num_comentarios = numero_registros_tabela("COMENTARIOS", "","");
        echo '<br><h2>' . $num_comentarios . ' Comentários:</h2>';

        if(isset($_SESSION['USER']) && isset($_SESSION['LOGIN']) && isset($_SESSION['ID'])){
            if($_SESSION['LOGIN'] == 1){
                $usuario = busca_usuario($_SESSION['ID']);
                $nome_de_usuario = $usuario[0]['USERNAME'];
                $bntComentar = 1;
                $nomeimg = "../imagens/usuarios/" . $usuario[0]['NOMEIMG'];
            }else {
                $usuario = "Anônimo";
                $nome_de_usuario = $usuario;
                $nomeimg = "../imagens/usuarios/anonimo.png";
                $bntComentar = 0;
            }
        }else{
            $usuario = "Anônimo";
            $nomeimg = "../imagens/usuarios/anonimo.png";
            $bntComentar = 0;
        }

        echo '<div class="espacoNome"><p class="user">' . $nome_de_usuario . '</p></div>';
        echo '<div class="comentario">';
            echo '<form action="inserecomentarios.php" method="POST">';
            echo     '<textarea id="textComentario" name="Coment" wrap="soft" placeholder="Digite seu comentário aqui..."></textarea>';
                    if($bntComentar == 1){
                        $_SESSION['IDDOJOGO'] = $idJogo;
                        $_SESSION['IDUSUARIO'] = $_SESSION['ID'];
                        $_SESSION['COMENTARIO'] = "Teste";
                        echo '<div id="bntComentar"><input id="inputComentar"  type="submit" value="Comentar"/></div>';
                    }
                    if($bntComentar == 0){
                        echo '<div id="bntComentar"><a href="login.php">Comentar</a></div>';
                    }
            echo '</form>';
        echo '</div>';


        echo '<div class="imagemPerfil" >';
            echo '<img src="'.$nomeimg.'">';
        echo '</div>';


        echo '<hr id="linhaaux" noshade>';
        $comentarios = busca_comentarios($idJogo);
        $comentarios_reverso = array_reverse($comentarios);
        foreach ($comentarios_reverso as $comentario) {
            $usuario = busca_usuario($comentario['IDUSER']);
            $nomeimg = $usuario[0]['NOMEIMG'];
            $data = $comentario['DATACOMENTARIO'];
            echo '<div class="espacoNome"><p class="user">' . $usuario[0]['USERNAME'] . '</p><p class="date">' . $data . '</p></div>';
            echo '<div class="comentario"><h3>' . $comentario['COMENTARIO'] . '</h3></div>';
            echo '<div class="imagemPerfil" >';
                echo '<img src="../imagens/usuarios/'.$nomeimg.'">';
            echo '</div>';
        }
    echo '</div>';
    echo '<div id="space"></div>';
 ?>
