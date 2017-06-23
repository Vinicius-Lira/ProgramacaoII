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

	include("config_DB/connect.php");
?>
<style>
	<?php
		include ("../css/header.css");
		include ("../css/footer.css");
		include ("../css/estilonoticia.css");
	 ?>
</style>
            <section>
                <?php
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                    }

                    $sql = "SELECT * FROM NOTICIAS WHERE ID='$id'";
                    $result = $PDO->query($sql);
                    $rows = $result->fetchAll( PDO::FETCH_ASSOC);

                ?>


                <h3><?php print $rows[0]['TITLE'] ?></h3>
                <h6><?php print $rows[0]['NDATA'] ?></h6>
                <img src="../imagens/noticias/<?php print $rows[0]['NOMEIMAGEM'] ?>" alt="<?php print $rows[0]['TITLE'] ?>"/>
                <?php print $rows[0]['TEXTO'] ?>
                <p class="fonte">Fonte: <a href="<?php print $rows[0]['LINKFONTE'] ?>"><?php print $rows[0]['FONTES'] ?></a></p>
                <br><p class="fonte">Imagen(s): <a href="<?php print $rows[0]['LINKIMAGEM'] ?>" ><?php print $rows[0]['NOMEFONTEIMAGENS'] ?></a></p>
            </section>

            <article>

	                <?php
	                    $sql = "SELECT * FROM NOTICIAS";
	                    $result = $PDO->query($sql);
	                    $rows = $result->fetchAll( PDO::FETCH_ASSOC);
	                ?>

	                <?php foreach($rows as $i): ?>
	                    <?php if($id != $rows[0]['ID']): ?>
	                        <div class="noticia">
	                            <a href="noticia.php?id=<?php print $i['ID'] ?>" >
	                                <img src="../imagens/noticias/<?php print $i['NOMEIMAGEM'] ?>" alt="<?php print $i['TITLE'] ?>"/>
	                                <h5><?php print $i['TITLE'] ?></h5>
	                                <p><?php print $i['RESUMONOTICIA'] ?></p>
	                            </a>
	                        </div>
	                    <?php endif ?>
	                <?php endforeach ?>

            </article>


<?php
    include("footer.php");
?>
