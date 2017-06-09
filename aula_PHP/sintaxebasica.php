<!DOCTYPE html>
<html>
    <body>
        <?php
            $i = 3.4;
            $j = "oi";
            $k = (int)$i + 3;
            echo $j . "\n" . "mundo";
            echo "\t" . $k;
            echo '<br/>';
            echo "Hoje é dia " .date('d/m/Y');
            echo '<br/><br/>';

            for ($a = 0; $a < 5; $a++):
                if($a > 2){
                    echo "Agora entrou no if. Laço: " . $a;
                    echo '<br/>';
                }else {
                    echo "Não entrou no if. Laço: " . $a;
                    echo '<br/>';
                }
            endfor;

            echo '<br/>';
            $v = array(3);
            $v [0] = 2;
            $v [1] = 9;
            $v [2] = "oi";
            for ($u = 0; $u < sizeof($v); $u++):
                echo 'Conteúdo da posição' . "\n" . $u . "\n" . 'É:' . "\n" . $v[$u];
                echo '<br/>';
            endfor;

            echo "<br/>";
            foreach ($v as $u){
                echo 'Conteúdo:' . "\n" . $u;
                echo '<br/>';
            }
        ?>


        <pre>
            <?
                var_dump($v);
            ?>
        </pre>
    </body>
</html>
