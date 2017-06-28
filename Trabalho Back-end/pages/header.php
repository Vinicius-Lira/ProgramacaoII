<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title><?php print $header_title; ?></title>

		<link rel="icon" href="<?php print $icon ?>" type="image/x-icon"/>

		<!--Importa a fonte do ubuntu do google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rhodium+Libre" rel="stylesheet">
	</head>

	<body>
		<div id="wrap">

			<div id="header">
				<header>
					<a href="<?php print $pagindex ?>"><img src="<?php print $logo ?>" alt="logo"/></a>
					<nav>
						<ul>
							<li><a href="<?php print $pagindex ?>" >Notícias</a></li>
							<li><a href="<?php print $pagjogos ?>" >Jogos</a></li>
							<li><a href="<?php print $pagcomparajogos ?>">Comparar Jogos</a></li>
							<li><a href="<?php print $pagsobrenos ?>">Sobre nós</a></li>
							<li><a href="<?php print $pagesports ?>">E-Sports</a></li>
							<?php if(isset($_SESSION['LOGIN'])): ?>
								<?php if($_SESSION['LOGIN'] == 1): ?>
										<? $usuario = 'profile.php?user=' . $_SESSION['USER']; ?>
										<li><a href="<?php print $usuario ?>"><?php print 'Olá, ' . $_SESSION['USER'] ?></a></li>
										<li>|</li>
										<li><a href="<?php print $sair ?>">Sair</a></li>
								<?php else: ?>
										<li><a href="<?php print $login ?>" > Login </a></li>
								<? endif ?>
							<?php else: ?>
								<li><a href="<?php print $login ?>" > Login </a></li>
							<? endif ?>
						</ul>
					</nav>
				</header>
			</div>
			<div id="content">
