<? 	session_start(); 
	$_SESSION['titre'] = "La situation des salles du BBH: Brest Bretagne Handball - Pôle Formation";
	include("header.php"); 
?>
						
			<!-- Main -->
				<section id="main" class="container">
				
					<!-- Titre -->
					<header>
						<h2>Les Salles</h2>
						<p><span class="icon fa-street-view accent2"></span> 
							Voici les différentes salles pour jouer à domicile
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
					
					<!-- Contenu -->
					<section class="box special features">
						<header class="major">
							<h3><span class="icon fa-map-marker accent2"></span>
								Situations des salles
							</h3>
							<iframe src="https://www.google.com/maps/d/u/0/embed?mid=zQCqYErY2v1g.krUtprxsbfvw" width="100%" height="360"></iframe>
						</header>
					</section>
					<section class="box special features">
						<div class="features-row">
							<section>
								<h3>Salle Jean Guéguéniat</h3>
								<span class="image salles">
									<img src="images/salle_jg.png" alt="Salle Jean Guéguéniat" title="Salle Jean Guéguéniat" />
								</span>
								<p>En face du stade Francis le Blé</p>
								<span class="icon fa-street-view"> Rue Maurice Piquemal - 29200 Brest</span>
							</section>
							<section>
								<h3>Gymnase de Pen Ar Streat</h3>
								<span class="image salles">
									<img src="images/salle_p.png" alt="Gymnase de Pen Ar Streat" title="Gymnase de Pen Ar Streat" />
								</span>
								<p>Quartier de Pontanézen</p>
								<span class="icon fa-street-view"> Rue du 8 Mai 1945 - 29200 Brest</span>
							</section>
						</div>
						<div class="features-row">
							<section>
								<h3>Gymnase de Bellevue</h3>
								<span class="image salles">
									<img src="images/salle_b.png" alt="Gymnase de Bellevue" title="Gymnase de Bellevue" />
								</span>
								<p>Derrière le Rinkla Stadium</p>
								<span class="icon fa-street-view"> Rue de Savoie - 29200 Brest</span>
							</section>
							<section>
								<h3>Gymnase Jacquard</h3>
								<span class="image salles">
									<img src="images/salle_j.png" alt="Gymnase Jacquard" title="Gymnase Jacquard" />
								</span>
								<p>Derrière le lycée</p>
								<span class="icon fa-street-view"> 6 Rue Jules Lesven - 29200 Brest</span>
							</section>
						</div>					
					</section>
				</section>

<?php include("footer.php"); ?>