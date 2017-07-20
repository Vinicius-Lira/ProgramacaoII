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
		include ("../css/comparajogos.css");
	 ?>
</style>

				<section>

					<?php
						$sql = "SELECT * FROM JOGO";
						$result = $PDO->query($sql);
						$rows = $result->fetchAll( PDO::FETCH_ASSOC);
					?>
					<h3>Selecione os jogos que deseja comparar</h3>
					<form action="compararjogos.php" method="GET">

						<select class="selectjogos" name="jogo1">
							<option value="" disabled="disabled" selected="selected">Selecione o jogo</option>
							<?php foreach ($rows as $i): ?>
								<option value="<?php print $i['ID'] ?>"><?php print $i['NAME'] ?></option>
							<?php endforeach ?>
						</select>
						<select class="selectjogos" name="jogo2">
							<option value="" disabled="disabled" selected="selected">Selecione o jogo</option>
							<?php foreach ($rows as $i): ?>
								<option value="<?php print $i['ID'] ?>"><?php print $i['NAME'] ?></option>
							<?php endforeach ?>
						</select>
						<input id="buttonComparar" type="submit" value="COMPARAR" />
					</form>

					<?php
						if(isset($_GET['jogo1']) && isset($_GET['jogo2'])){
							$id1 = $_GET['jogo1'];
							$id2 = $_GET['jogo2'];

							$aux = 1;
						}else {
							$aux = 0;
						}
					?>

					<?php if($aux): ?>
						<?php
							$sql = "SELECT * FROM JOGO WHERE ID='$id1'";
							$result = $PDO->query($sql);
							$rows1 = $result->fetchAll( PDO::FETCH_ASSOC);

							$sql = "SELECT * FROM JOGO WHERE ID='$id2'";
							$result = $PDO->query($sql);
							$rows2 = $result->fetchAll( PDO::FETCH_ASSOC);
						?>

						<div class="esquerdo">

							<h2><?php print $rows1[0]['NAME'] ?></h2>
							<img src="../imagens/CapaJogos/<?php print $rows1[0]['NAMECAPA'] ?>" alt="<?php print $rows1[0]['NAME'] ?>"/>
							<h3>Sobre o jogo</h3>
							<?php print $rows1[0]['TEXTO'] ?>
							<br><h3>PRÓS</h3><br>
							<p><?php print $rows1[0]['PROS'] ?></p>
							<br><h3>CONTRAS</h3><br>
							<p><?php print $rows1[0]['CONTRAS'] ?></p>

							<h4>Fonte: <a href="<?php print $rows1[0]['LINKFONTE'] ?>"><?php print $rows1[0]['FONTE'] ?></a></h4>
						</div>

						<div class="direito">
							<h2><?php print $rows2[0]['NAME'] ?></h2>
							<img src="../imagens/CapaJogos/<?php print $rows2[0]['NAMECAPA'] ?>" alt="<?php print $rows2[0]['NAME'] ?>"/>
							<h3>Sobre o jogo</h3>
							<?php print $rows2[0]['TEXTO'] ?>
							<br><h3>PRÓS</h3><br>
							<p><?php print $rows2[0]['PROS'] ?></p>
							<br><h3>CONTRAS</h3><br>
							<p><?php print $rows2[0]['CONTRAS'] ?></p>

							<h4>Fonte: <a href="<?php print $rows2[0]['LINKFONTE'] ?>"><?php print $rows2[0]['FONTE'] ?></a></h4>
						</div>
					<?php endif ?>

				</section>

<?php
	include("footer.php");
?>
