<?php
    define('MYSQL_HOST', 'localhost');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB_NAME', 'usuarios');

    try{
        $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
        $PDO->exec("set names utf8");
    }catch (PDOException $Exception){
        echo 'Erro ao conectar com o MySQL: ' . $Exception->getMessage();
    }

    function valida_email($email){
        if(preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $email)) {
            return true;
        }else{
            return false;
        }
    }

    function verifica_se_nao_esta_vaziu($var){
        if($var != ""){
            return true;
        }else{
            return false;
        }
    }

    function existe($var){
        if(isset($var))
            return true;
        else{
            return false;
        }
    }

    if(existe($_POST['nome']) & existe($_POST['email']) & existe($_POST['senha'])){
        if(verifica_se_nao_esta_vaziu($_POST['nome']) & verifica_se_nao_esta_vaziu($_POST['email']) & verifica_se_nao_esta_vaziu($_POST['senha'])){
            if(valida_email($_POST['email'])){
                // Insere no banco
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $sql = "INSERT INTO usuario(nome, email, senha) VALUES(:nome, :email, :senha)";
                $result = $PDO->prepare($sql);

                $result->bindValue(":nome", $nome);
                $result->bindValue(":email", $email);
                $result->bindValue(":senha", $senha);
                $result->execute();
                echo "<h2>Cadastro realizado com sucesso!</h2>";
                sleep(5);
                header("Location: index.php");
            }else{
                header("Location: index.php?erro=1");
            }
        }else{
            header("Location: index.php?erro=0");
        }
    }else{
        header("Location: index.php?erro=0");
    }

 ?>
