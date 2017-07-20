<?php
	$header_title = "Contato";
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
?>
<style>
	<?php
		include ("../css/header.css");
		include ("../css/footer.css");
		include ("../css/contato.css");
	 ?>
</style>

				<?php
					if(isset($_GET['OK'])){
						$ok = $_GET['OK'];
					}else{
						$ok = 0;
					}
				 ?>

				<?php
					if($ok == 1):
						echo '<h2>Mensagem enviada com sucesso!</h2>';
					elseif ($ok == 2):
						echo '<h2>Erro ao enviar a mensagem! Tente novamente!</h2>';
					elseif($ok == 3):
						echo '<h2>Preencha os campos de Nome, E-mail ou mensagem corretamente!</h2>';
					endif
				?>

				<div class="formularioContato">
					<h6>Deixe sua mensagem abaixo</h6>
					<h4>Formulário de contato</h4>
					<form action="enviamensagem.php" method="POST">
						<input class="in" type="text" name="Nome" size="30" maxlength="30" placeholder="Digite seu nome" /><br><br>
						<input class="in" type="text" name="Email" size="30" maxlength="30" placeholder="Digite seu E-mail" /><br><br>
						<textarea id="mensagem" name="Mensagem" wrap="soft" placeholder="Digite sua mensagem aqui..."></textarea><br><br><br>
						<input id="button" type="submit" value="Enviar" />
					</form>
				</div>

<?php
	include("footer.php");
?>
