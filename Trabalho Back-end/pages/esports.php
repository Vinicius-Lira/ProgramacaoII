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

	include("config_DB/connect.php");
?>
<style>
	<?php
		include ("../css/header.css");
		include ("../css/footer.css");
		include ("../css/estiloesports.css");
	 ?>
</style>

			<div id="content">
				<section>
					<?php
						$sql = "SELECT * FROM ESPORTS";
						$result = $PDO->query($sql);
						$rows = $result->fetchAll( PDO::FETCH_ASSOC);
					 ?>
					<h3>Calendário E-sports: veja as datas das principais competições de 2017</h3>
					<?php foreach ($rows as $i):?>
						<h4><?php print $i['NOMEGAME'] ?></h4>
						<?php print $i['TEXTO'] ?>
					<?php endforeach ?>


				</section>
<?php
	include("footer.php");
?>
