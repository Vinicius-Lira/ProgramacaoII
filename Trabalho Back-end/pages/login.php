<?php
	$header_title = "Login";
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

	include("config_DB/connect.php");

?>

<style>
	<?php
		include ("../css/loginstyle.css");
        include ("../css/header.css");
        include ("../css/footer.css");
	 ?>
</style>

    <div class="login">
        <form action="loginuser.php" method="POST">
			<h3><label>LOGIN</label></h3>
            <input class="campoLogin" type="text" name="username" size="30" maxlength="30" placeholder="Nome de usuário" />
            <input class="campoLogin" type="password" name="senha" size="30" maxlength="30" placeholder="Senha" />
			<?php
				if(isset($_GET['error'])){
					$error = $_GET['error'];
					if($error == 406){
						echo '<div id="error"><h5>Preencha corretamente os campos!</h5></div>';
					}elseif ($error == 405) {
						echo '<div id="error"><h5>Usuário ou senha incorretos!</h5></div>';
					}elseif ($error == 404){
						echo '<div id="error"><h5>Erro ao efetuar login tente novamente!</h5></div>';
					}
				}else {
					echo '<div id="error"><h5></h5></div>';
				}
			 ?>
            <input class="btn" type="submit" value="Login" /><br>
			<a id="registrar" href="registro.php" ><h4>Registrar</h4></a>
        </form>
    </div>

<?php include ("footer.php") ?>
