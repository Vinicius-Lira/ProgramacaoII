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

	$plataformaLoc  = "plataforma.php";

	include("header.php");
?>
<style>
	<?php
		include ("../css/header.css");
		include ("../css/footer.css");
		include ("../css/estiloSobre.css");
	 ?>
</style>

			<div id="content">
				<section>
                    <div id="sobre">
                        <h5 id="texto">Sobre Nós</h5>
                        <p>
							&emsp;&emsp;Site criado para o componente curricular de Programação II com o objetivo de desenvolver o front-end de um site usando apenas HTML e CSS.<br>
							&emsp;&emsp;Este site como tema a comparação de jogos, notícias sobre jogos, anúncios de jogos competitivos de jogos eletrônicos.
						</p>
                        <img src="../imagens/game.jpg" alt="Game"/>
                    </div>
				</section>

<?php
	include("footer.php");
?>
