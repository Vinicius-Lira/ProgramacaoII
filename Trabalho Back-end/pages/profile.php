<?php
	$header_title = "Comparar Jogos";
	$icon = "../favicon.ico";
	$logo = "../imagens/logo.jpg";
	$icoFacebook = "../imagens/fb.gif";
	$icoTwitter = "../imagens/twitter.png";
	$icoTwitch = "../imagens/twitch.png";
	$icoYoutube = "../imagens/youtube.png";

	$pagindex = "../index.php";
	$pagjogos = "jogos.php";
	$pagcomparajogos = "compararjogos.php";
	$pagsobrenos = "sobre.php";
	$pagesports = "esports.php";
	$pagcontato = "contato.php";
	$pagparcerias = "parcerias.html";
	$login = "login.php";
	$sair = "loginoff.php";
    $pagperfil = "";

	$plataformaLoc  = "plataforma.php";

	include("header.php");

	include("config_DB/function_php.php");
	include("config_DB/conectaDB.php");
?>
<style>
	<?php
		include ("../css/header.css");
		include ("../css/footer.css");
		include ("../css/estiloesports.css");
        include ("../css/profile.css");
	 ?>
</style>

    <?php
        if(isset($_GET['user'])){
            if($_GET['user'] == ''){
                echo '<h3>Usuário não encontrado!</h3>';
            }else {
                $id = $_GET['user'];
                $usuario = busca_usuario($id);
                ?>
                <div class="Usuario" >
                    <img src="../imagens/usuarios/<? print $usuario[0]['NOMEIMG'] ?>"/>
                    <p>Nome:  <?php print $usuario[0]['USERNAME'] ?></p>
                    <p>E-mail:  <?php print $usuario[0]['EMAIL'] ?></p>
                    <p>Data cadastro:  <?php print $usuario[0]['DATACRIACAO'] ?></p>
                </div>

                <?php
            }


        }else {
            echo '<h3>Usuário não encontrado!</h3>';
        }
     ?>

<?php
	include("footer.php");
?>
