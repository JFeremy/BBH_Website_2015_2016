<?	session_start(); 
	$_SESSION['titre'] = "Les différentes informations du BBH: Brest Bretagne Handball - Pôle Formation";
	include("header.php"); 
?>
			<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Le Brest Bretagne Handball Club - Pôle Formation</h2>
					<p><span class="icon fa-thumb-tack accent2"></span> 
						 Voici les informations sur le club
					</p>
				</header>
				<header class="ss_nav">
					<div class="row">
						<div class="4u 12u(mobilep)">
							<a href="liste_equipes.php" class="button small icon fa-chevron-right">Les équipes</a>
						</div>
						<div class="4u 12u(mobilep)">
							<a href="entrainements.php" class="button small icon fa-chevron-right">Les entraînements</a>
						</div>
						<div class="4u 12u(mobilep)">
							<a href="salles.php" class="button small icon fa-chevron-right">Les salles</a>
						</div>
					</div>
				</header>
				<!-- Text -->
				<section class="box special">
					<header>
						<h2><span class="icon fa-file accent2"> Documents</span></h2>
					</header>
					<div class="row">
						<div class="6u 12u(mobilep)">
							<iframe src="https://docs.google.com/file/d/0B29jlj-qlPnrYUZXdzJLWHVpM0U/preview" width="" height="420"></iframe>
							<h3>Charte de Sportivité</h3>
						</div>
						<div class="6u 12u(mobilep)">
							<iframe src="https://docs.google.com/file/d/0B29jlj-qlPnrcGxUZGRWM29fb0k/preview" width="" height="420"></iframe>
							<h3>Organigramme</h3>
						</div>
					</div>
				</section>
			</section>

			
<?php include("footer.php"); ?>