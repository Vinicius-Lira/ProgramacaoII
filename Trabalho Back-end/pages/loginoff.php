<?php
    session_start();
    $_SESSION['LOGIN'] = 0;
    $_SESSION['USER'] = '';
    echo getcwd();
    $local = getcwd();
    if($local == "/opt/lampp/htdocs/backend/pages"){
        header("Location: ../index.php");
    }
?>
