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
	$sair = "loginoff.php";
	$pagperfil = "";
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
		<script language="Javascript">
			window.onload = initPage;
			function initPage(){
				document.getElementById("errorEmail").style.display = 'none';
				document.getElementById("errorSenha").style.display = 'none';
				document.getElementById('errorUsername').style.display = 'none';
			}

			function validacaoEmail(field,nomeDiv) {
				usuario = field.value.substring(0, field.value.indexOf("@"));
				dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
				el = nomeDiv;
				var email = (usuario.length >=1) && (dominio.length >=3) && (usuario.search("@")==-1) && (dominio.search("@")==-1) && (usuario.search(" ")==-1) && (dominio.search(" ")==-1) && (dominio.search(".")!=-1) && (dominio.indexOf(".") >=1)&& (dominio.lastIndexOf(".") < dominio.length - 1);
				var display = document.getElementById(el).style.display;
				var tamanho = field.value.length;

				if (email && (tamanho > 0)) {
					document.getElementById(el).style.display = 'none';

				}
				if(!email && tamanho != 0){
					document.getElementById(el).style.display = 'block';
				}
			}

			function verificaSenha(){
				el = f1.senha;
				if(el.value.length >= 5){
					document.getElementById('errorSenha').style.display = 'none';
				}else{
					document.getElementById('errorSenha').style.display = 'block';
				}
			}

			function verificaUsername(){
				el = f1.username;
				if(el.value.length < 4){
					document.getElementById('errorUsername').style.display = 'block';
				}else{
					document.getElementById('errorUsername').style.display = 'none';
				}
			}

		</script>
        <section>
            <div id="registro">
                <form action="register.php" name="f1" enctype="multipart/form-data" method="POST">
        			<h3><label>Registrar</label></h3>
					<div id="errorUsername"><h5>Nome de usuário curto!</h5></div>
                    <input class="campoLogin" type="text" onkeypress="verificaUsername()" name="username" size="30" maxlength="30" placeholder="Nome de usuário" />
					<div id="errorEmail"><h5>Email incorreto!</h5></div>
					<input class="campoLogin" type="text" onkeypress="validacaoEmail(f1.email, 'errorEmail')" name="email" size="30" maxlength="30" placeholder="Email" />
					<div id="errorSenha"><h5>Senha muito curta!</h5></div>
					<input class="campoLogin" type="password" name="senha" onkeypress="verificaSenha()" size="30" maxlength="30" placeholder="Senha" />
                    <label id="imglabel">Selecione uma imagem</label>
                    <input class="inputimage" type="file" name="imagem" value="Selecione a imagem" accept="image/*"/>
                    <input class="btn" type="submit" value="Registrar" /><br>
        			<a id="registrar" href="login.php" ><h4>Já possui uma conta?</h4></a>
					<?php
						if(isset($_GET['error'])){
							$error = $_GET['error'];
							switch($error){
								case 1:
									echo '<div class="error"><h5>Erro ao registrar! Tente novmente!</h5></div>';
									break;
								case 2:
									echo '<div class="error"><h5>Preencha os campos corretamente!</h5></div>';
									break;
								case 3:
									echo '<div class="error"><h5>Usuário já existe!</h5></div>';
									break;
								case 4:
									echo '<div class="error"><h5>Email já cadastrado!</h5></div>';
									break;
							}
						}
					?>
                </form>
            </div>
        </section>
<?php
	include("footer.php");
?>
