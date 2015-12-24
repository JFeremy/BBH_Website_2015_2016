<? 	session_start(); 
	$_SESSION['titre'] = "Les astreintes pour les équipes du BBH: Brest Bretagne Handball - Pôle Formation";
	include("header.php");
	
	define('WP_USE_THEMES', false); // aucun besoin d'utiliser le thème actif donc on le désactive
	require('blog/wp-load.php'); // on include le "moteur" wordpress
?>
		
			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Astreintes</h2>
						<p><span class="icon fa-list-alt accent2"></span>
							Liste des Astreintes
						</p>
					</header>

					<?php // Affichage des astreintes 						
						$recentPosts = new WP_Query();
						$recentPosts->query('category_name=astreintes');

						while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

					<section class="box special features">	
						<header class="major">
							<h3><?php echo the_title(); ?></h3>
						</header>
						<?php echo the_content(); ?>
					</section>
					<?php endwhile;	?>
				</section>

<?php include("footer.php"); ?>