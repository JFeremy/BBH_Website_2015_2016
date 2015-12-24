<? 	session_start();
	$_SESSION['titre'] = "L'ensemble des équipes du BBH: Brest Bretagne Handball - Pôle Formation";
	include("header.php");
?>
		<div id="wait" style="display: none;">
			<h2>Chargement<br>
			<img src="/images/loader.gif" alt="loader"></h2>
		</div>
		
			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Les Equipes</h2>
						<p><span class="icon fa-list-ul accent2"></span> 
							 La liste des liens vers les équipes avec les informations sur le championnat, le lien vers la fédération, les statistiques, le calendrier des matchs de la saison, etc...
						</p>
					</header>
						
					<!-- Navigation -->
					<header class="ss_nav">
						<div class="row">
							<div class="12u">
								<a href="club.php" class="button small icon fa-chevron-left">Club</a>
							</div>
						</div>
					</header>
					
					<div class="row">
						<div class="4u 12u(mobilep)">
							<section class="box special liste">
								<span class="icon major fa-child accent3"></span>
								<h3>Ecole de Hand</h3>
								<ul class="alt">
									<li><a href="equipe_ecole.php?equipe=ecole" id="equipe" class="button alt"><span class="icon fa-chevron-right"> - 10 ans mixte</span></a></li>
								</ul>
							</section>
						</div>
						<div class="4u 12u(mobilep)">
							<section class="box special liste">
								<span class="icon major fa-female accent2"></span>
								<h3>Féminin</h3>
								<ul class="alt">
									<li><a href="equipe.php?equipe=-12F" id="equipe" class="button special"><span class="icon fa-chevron-right"> - 12 ans F</span></a></li>
									<li><a href="equipe.php?equipe=-14F" id="equipe" class="button special"><span class="icon fa-chevron-right"> - 14 ans F</span></a></li>
									<li><a href="equipe.php?equipe=-15F" id="equipe" class="button special"><span class="icon fa-chevron-right"> - 15 ans F</span></a></li>
									<li><a href="equipe.php?equipe=-17F" id="equipe" class="button special"><span class="icon fa-chevron-right"> - 17 ans F</span></a></li>
									<li><a href="equipe.php?equipe=-18F" id="equipe" class="button special"><span class="icon fa-chevron-right"> - 18 ans F</span></a></li>
									<li><a href="equipe.php?equipe=SF3" id="equipe" class="button special"><span class="icon fa-chevron-right"> Senior F3</span></a></li>
									<li><a href="equipe.php?equipe=N2F" id="equipe" class="button special"><span class="icon fa-chevron-right"> Nationale 2</span></a></li>
									<li><a href="equipe.php?equipe=D2F" id="equipe" class="button special"><span class="icon fa-chevron-right"> D2F</span></a></li>
								</ul>
							</section>
						</div>
						<div class="4u 12u(mobilep)">
							<section class="box special liste">
								<span class="icon major fa-male accent1"></span>
								<h3>Masculin</h3>

								<ul class="alt">
									<li><a href="equipe.php?equipe=-12G1" id="equipe" class="button "><span class="icon fa-chevron-right"> - 12 ans G1</span></a></li>
									<li><a href="equipe.php?equipe=-12G2" id="equipe" class="button "><span class="icon fa-chevron-right"> - 12 ans G2</span></a></li>
									<li><a href="equipe.php?equipe=-14G" id="equipe" class="button "><span class="icon fa-chevron-right"> - 14 ans G</span></a></li>
									<li><a href="equipe.php?equipe=-15G" id="equipe" class="button "><span class="icon fa-chevron-right"> - 15 ans G</span></a></li>
									<li><a href="equipe.php?equipe=-18G" id="equipe" class="button "><span class="icon fa-chevron-right"> - 18 ans G</span></a></li>
									<li><a href="equipe.php?equipe=SG1" id="equipe" class="button "><span class="icon fa-chevron-right"> Senior G1</span></a></li>
									<li><a href="equipe.php?equipe=SG2" id="equipe" class="button "><span class="icon fa-chevron-right"> Senior G2</span></a></li>
								</ul>
							</section>
						</div>
						
						<script src="assets/js/chargement.js"></script>
					</div>
				</section>

<?php include("footer.php"); ?>