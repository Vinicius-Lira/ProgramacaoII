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

	$plataformaLoc  = "plataforma.php";

	include("header.php");

	include("config_DB/function_php.php");
	include("config_DB/conectaDB.php");
?>
<style>
	<?php
		include ("../css/header.css");
		include ("../css/footer.css");
		include ("../css/estiloPaginaJogo.css");
	 ?>
</style>

                <article>
					<?php
						if(isset($_GET['id'])){
							$id = $_GET['id'];
						}

						$sql = "SELECT * FROM JOGO WHERE ID='$id'";
						$result = $PDO->query($sql);
						$rows = $result->fetchAll( PDO::FETCH_ASSOC);
					?>

                    <h2><?php print $rows[0]['NAME'] ?></h2>
                    <img src="../imagens/artigo/<?php print $rows[0]['NOMEIMAGEMARTIGO'] ?>" alt="<?php print $rows[0]['NAME'] ?>"/>
					<?php print $rows[0]['TEXTO'] ?>
                    <div id="fontes">
                        Fonte: <a href="<?php print $rows[0]['LINKFONTE'] ?>"><?php print $rows[0]['FONTE'] ?></a>
                    </div>
                </article>

                <div class="avaliacao">
                    <div class="notaavaliacao">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="itemavaliacao" >GRÁFICOS</td>
                                    <td class="valoravaliacao" ><?php print $rows[0]['GRAFICOS'] ?></td>
                                </tr>

                                <tr>
                                    <td class="itemavaliacao" >JOGABILIDADE</td>
                                    <td class="valoravaliacao"><?php print $rows[0]['JOGABILIDADE'] ?></td>
                                </tr>
                                <tr>
                                    <td class="itemavaliacao" >DIVERSÃO</td>
                                    <td class="valoravaliacao"><?php print $rows[0]['DIVERSAO'] ?></td>
                                </tr><tr>
                                    <td class="itemavaliacao" >SOM</td>
                                    <td class="valoravaliacao"><?php print $rows[0]['SOM'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="proscontras">
                        <table>
                            <tr>
                                <td class="pros">PRÓS</td>
                                <td class="contra">CONTRAS</td>
                            </tr>

                            <tr>
                                <td class="itensproscontra"><?php print $rows[0]['PROS'] ?></td>
                                <td class="itensproscontra"><?php print $rows[0]['CONTRAS'] ?></td>
                            </tr>
                        </table>
                    </div>

                </div>

				<div class="comentarios">
					<br><h3>Comentários</h3>
				</div>

				<div id="aux"></div>
<?php
	include("footer.php");
?>
