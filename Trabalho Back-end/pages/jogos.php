<?php
	$header_title = "Jogos";
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

	$plataformaLoc  = "plataforma.php";

	include("header.php");

	include("config_DB/function_php.php");
	include("config_DB/conectaDB.php");

?>
<style>
	<?php
		include ("../css/header.css");
		include ("../css/footer.css");
		include ("../css/estiloJogos.css");
	 ?>
</style>
				<section>
					<?php
						$sql = "SELECT * FROM JOGO";
						$result = $PDO->query($sql);
						$rows = $result->fetchAll( PDO::FETCH_ASSOC);
					?>


					<h2>JOGOS</h2>

					<?php foreach($rows as $i): ?>
						<div class="jogo">
							<a href="paginajogo.php?id=<?php print $i['ID'] ?>"><img src="../imagens/CapaJogos/<?php print $i['NAMECAPA'] ?>" alt="<?php print $i['NAME'] ?>" title="<?php print $i['NAME'] ?>"/></a>
						</div>
					<?php endforeach ?>
				</section>
				<div id="aux"></div>
<?php
	include("footer.php");
?>
