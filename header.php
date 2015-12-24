<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $_SESSION['titre'] ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" href="images/bbhfavicon.png" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		
		<!-- Feuille de style pour le RESET -->
		<link rel="stylesheet" href="assets/css/reset.css" />
		<!-- Feuille de style pour le BASIC -->
		<link rel="stylesheet" href="assets/css/basic.css" />
		<!-- Feuille de style pour le HEADER FOOTER BANNER -->
		<link rel="stylesheet" href="assets/css/header_banner_footer.css" />
		<!-- Feuille de style pour le CONTENUE -->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- Feuille de style pour le MEDIAQUERY -->
		<link rel="stylesheet" href="assets/css/mediaquery.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->	
		
		<script type="text/javascript" src="assets/js/alertjs.js"></script>
		<script type="text/javascript" src="assets/js/jquery.autoheight.js"></script>
	</head>
	
	<body>
		<?php include("popup.php"); ?>
		<div id="page-wrapper">
 
			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Brest Bretagne Handball</a> - Pôle Formation</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Accueil</a></li>
							<li><a href="blog.php">Fil Info</a></li>
							<li>
								<a href="club.php" class="icon fa-angle-down">Le Club</a>
								<ul>
									<li><a href="liste_equipes.php">Equipes</a></li>
									<li><a href="entrainements.php">Entrainements</a></li>
									<li><a href="salles.php">Salles</a></li>
								</ul>
							</li>
							<li><a href="astreintes.php">Astreintes</a></li>
							<li><a href="photo.php">Galerie Photos</a></li>
							<li><a href="contacts.php">Contact</a></li>
							<li><a href="http://www.brest-bretagnehandball.fr/" target="_blanc">Pôle Haut Niveau</a></li>
						</ul>						
					</nav>
				</header>