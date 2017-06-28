<?php
    echo '<title>Register</title>';

    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['senha'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(($username != '') && ($email != '') && ($senha != '')){
            include("config_DB/connect.php");
            //Conta o numero de registros na plataforma passada por parametro;
            $sql = "SELECT COUNT(*) FROM USUARIOS WHERE USERNAME='$username'";
            $result = $PDO->query($sql);
            $num_rows = $result->fetchColumn();
            //Se não tiver nenhum usuario com o mesmo nome
            if($num_rows == 0){
                $sql = "SELECT COUNT(*) FROM USUARIOS WHERE EMAIL='$email'";
                $result = $PDO->query($sql);
                $num_rows = $result->fetchColumn();
                //Se não tiver nenhum email igual
                if($num_rows == 0){
                    $sql = "SELECT COUNT(*) FROM USUARIOS";
                    $result = $PDO->query($sql);
                    $num_rows = $result->fetchColumn();
                    $id = $num_rows + 1;
                    //Pega a data e hora nome momento do cadastro do usuario
                    date_default_timezone_set('America/Sao_Paulo');
                    $date = date('d-m-Y H:i');

                    if ( isset( $_FILES[ 'imagem' ][ 'name' ] ) && $_FILES[ 'imagem' ][ 'error' ] == 0 ) {
                        $arquivo_tmp = $_FILES[ 'imagem' ][ 'tmp_name' ];
                        $nome = $_FILES[ 'imagem' ][ 'name' ];

                        // Pega a extensão
                        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

                        // Converte a extensão para minúsculo
                        $extensao = strtolower ( $extensao );

                        // Cria um nome único para esta imagem
                        // Evita que duplique as imagens no servidor.
                        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                        $novoNome = $id . '.' . $extensao;

                        // Concatena a pasta com o nome
                        $destino = '../imagens/usuarios/ ' . $novoNome;

                        // tenta mover o arquivo para o destino
                        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                            echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                            /*print '<img src = "' . $destino . '" width="500" height="500"/>';*/
                            header("Location: login.php");
                        }else{
                            echo 'sem prermisssão!';
                        }
                    }else{
                        /*echo 'Você não enviou nenhum arquivo!';*/
                    }




                    $sql = "INSERT INTO USUARIOS VALUES(:id,:username, :email, :datacriacao, :nomeimg,:senha)";
                    $result = $PDO->prepare($sql);

                    $nomeimg = "01.png";

                    $result->bindValue(":id", $id);
                    $result->bindValue(":username", $username);
                    $result->bindValue(":email", $email);
                    $result->bindValue(":datacriacao", $date);
                    $result->bindValue(":nomeimg", $nomeimg);
                    $result->bindValue(":senha", $senha);
                    $result->execute();
                }else{
                    header("Location: registro.php?error=4");
                }
            }else{
                header("Location: registro.php?error=3");
            }
        }else{
            header("Location: registro.php?error=2");
        }
    }else{
        header("Location: registro.php?erro=1");
    }
?>
