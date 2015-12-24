<!-- Main -->
<section id="main" class="container">
	<header>
		<h2><?php echo $equipe; ?></h2>
		<p><span class="icon fa-list-alt accent2"></span>
			<?php echo $niveau1; ?>
		</p>
	</header>
	
	<header class="ss_nav">
		<div class="row">
			<div class="6u 12u(mobilep)">
				<a href="liste_equipes.php" class="button small icon fa-chevron-left">Retour sur la liste des équipes</a>
			</div>
			<div class="6u 12u(mobilep)">
				<a href="<?php echo $url1; ?>" class="button small icon fa-search" target="_blank">Lien vers la Fédération</a>
			</div>
		</div>
	</header>
	
	<?php
	if ($url2 != '')
	{ ?>
	<section class="box special">
		<header>
			<h2><span class="icon fa-bar-chart accent2"> <?php echo $niveau2; ?></span></h2>
		</header>
		<div class="tableau">
		<?php include("equipe_brassages.php"); ?>
		</div>
	</section>
	<?php } ?>
	
	<section class="box special">
		<header>
			<h2><span class="icon fa-bar-chart accent2"> Classement</span></h2>
		</header>
		<div class="tableau">
		<?php include("equipe_statistiques.php"); ?>
		</div>
	</section>
	
	<section class="box special">
		<header>
			<h2><span class="icon fa-calendar accent2"> Calendrier et Scores</span></h2>
		</header>
		<div class="eq_calendrier">
		<?php include("equipe_calendrier.php"); ?>
		</div>
	</section>
	
	<section class="box special">
		<em>Toutes les informations sur les classements et résultats proviennent directement des informations du site de la FFHB (remontées de résultats par les clubs, reports de matchs ... etc...)</em>
		<em>A ce titre si elles sont erronées, ne nous en tenez pas rigueur, elles seront mises à jour lors d'un prochain traitement par la FFHB.</em>
	</section>
</section>