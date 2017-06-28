<?php
    session_start();
    $_SESSION['LOGIN'] = 0;
    $_SESSION['USER'] = '';
    echo getcwd();
    if(getcwd() == '/opt/lampp/htdocs/backend/pages'){
        header("Location: ../index.php");
    }
?>
