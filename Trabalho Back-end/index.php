<?php
	$header_title = "Comparar Jogos";
	$icon = "favicon.ico";
	$logo = "imagens/logo.jpg";
	$icoFacebook = "imagens/fb.gif";
	$icoTwitter = "imagens/twitter.png";
	$icoTwitch = "imagens/twitch.png";
	$icoYoutube = "imagens/youtube.png";

	$pagindex = "index.php";
	$pagjogos = "pages/jogos.php";
	$pagcomparajogos = "pages/compararjogos.php";
	$pagsobrenos = "pages/sobre.php";
	$pagesports = "pages/esports.php";
	$pagcontato = "pages/contato.php";
	$pagparcerias = "pages/parcerias.html";

	$plataformaLoc  = "pages/plataforma.php";

	include("pages/header.php");

	include("pages/config_DB/conect.php");
?>
<!-- Importa os estilos -->
<style>
	<?php
		include("css/header.css");
		include("css/footer.css");
		include("css/estiloIndex.css");
	?>
</style>

			<div id="content">
				<section>

					<?php
						$sql = "SELECT * FROM DESTAQUEINDEX";
						$result = $PDO->query($sql);
						$rows = $result->fetchAll( PDO::FETCH_ASSOC);
						$emdestaque = $rows[0]['DESTAQUE'];
						$video = $rows[0]['LINKVIDEO'];
						$id = $rows[0]['ID'];
					?>
					<!-- Assassin's creed III -->
					<h4>JOGO EM DESTAQUE:<a href="pages/paginajogo.php?id=<?php print $id ?>" ><?php print $emdestaque ?> </a></h4><br>
					<iframe src="<?php print $video ?>" allowfullscreen></iframe>
				</section>

				<article>
					<!-- Notícias que serão atualizadas com o que está no banco -->
					<?php
						$sql = "SELECT * FROM NOTICIAS";
						$result = $PDO->query($sql);
						$rows = $result->fetchAll( PDO::FETCH_ASSOC);
					?>

					<?php foreach($rows as $i): ?>
						<div class="noticia">
							<a href="pages/noticia.php?id=<?php print $i['ID'] ?>" >
								<img src="imagens/noticias/<?php print $i['NOMEIMAGEM'] ?>" alt="<?php print $i['TITLE'] ?>"/>
								<h5><?php print $i['TITLE'] ?></h5>
								<p><?php print $i['RESUMONOTICIA'] ?></p>
							</a>
						</div>
					<?php endforeach ?>

				</article>
<?php
	include("pages/footer.php");
?>
