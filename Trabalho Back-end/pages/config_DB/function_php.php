<?php
    define('MYSQL_HOST', 'localhost');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB_NAME', 'COMPARAJOGOS');

    function busca_comentarios($id){
        include("conectaDB.php");
        $sql = "SELECT * FROM COMENTARIOS WHERE IDJOGO=".$id;
        $result = $PDO->query($sql);
        $rows = $result->fetchAll( PDO::FETCH_ASSOC);

        return $rows;
    }

    function busca_usuario($id){
        include("conectaDB.php");
        $sql = "SELECT * FROM USUARIOS WHERE ID=".$id;
        $result = $PDO->query($sql);
        $rows = $result->fetchAll( PDO::FETCH_ASSOC);

        return $rows;
    }

    function numero_registros_tabela($nome_tabela, $nome_campo, $buscar){
        include("conectaDB.php");
        if($nome_campo != "" && $buscar != ""){
            $sql = "SELECT * FROM $nome_tabela WHERE $nome_campo='$buscar'";
        }else{
            $sql = "SELECT * FROM " . $nome_tabela;
        }
        $result = $PDO->query($sql);
        $rows = $result->fetchAll( PDO::FETCH_ASSOC);

        $num_rows = 0;
        foreach ($rows as $value) {
            $num_rows += 1;
        }

        return $num_rows;
    }

    function id_maximo_tabela($nome_tabela){
        include("conectaDB.php");

        $sql = "SELECT * FROM " . $nome_tabela;
        $result = $PDO->query($sql);
        $rows = $result->fetchAll( PDO::FETCH_ASSOC);
        $id = 0;
        foreach ($rows as $value) {
            if($value['ID'] > $id){
                $id = $value['ID'];
            }
        }
        return $id + 1;
    }

    function verifica_se_existe_itens_tabela($nome_tabela){
        include("conectaDB.php");

        $sql = "SELECT COUNT(*) FROM " . $nome_tabela;
        $result = $PDO->query($sql);
        $num_rows = $result->fetchColumn();
        if($num_rows){
            return true;
        }
        return false;
    }

?>
