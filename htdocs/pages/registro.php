<?php
	$header_title = "Registrar";
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

?>
<style>
	<?php
        include ("../css/header.css");
        include ("../css/footer.css");
        include ("../css/registro.css");
	 ?>
</style>
        <section>
            <div id="registro">
                <form action="register.php" enctype="multipart/form-data" method="POST">
        			<h3><label>Registrar</label></h3>
                    <input class="campoLogin" type="text" name="username" size="30" maxlength="30" placeholder="Nome de usuário" />
                    <input class="campoLogin" type="text" name="email" size="30" maxlength="30" placeholder="Email" />
                    <input class="campoLogin" type="password" name="senha" size="30" maxlength="30" placeholder="Senha" />
                    <label id="imglabel">Selecione uma imagem</label>
                    <input class="inputimage" type="file" name="imagem" value="Selecione a imagem" accept="image/*"/>
                    <input class="btn" type="submit" value="Registrar" /><br>
        			<a id="registrar" href="login.php" ><h4>Já possui uma conta?</h4></a>
                </form>
            </div>
        </section>
<?php
	include("footer.php");
?>
