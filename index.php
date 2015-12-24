<? 	session_start(); 
	$_SESSION['titre'] = "Site du BBH: Brest Bretagne Handball - Pôle Formation";

	include("header.php"); 
	define('WP_USE_THEMES', false); // aucun besoin d'utiliser le thème actif donc on le désactive
	require('blog/wp-load.php'); // on include le "moteur" wordpress
?>
			<!-- Banner -->
				<section id="banner">
					<h2 id="Titre" class="effet">Brest Bretagne Handball - Pôle Formation</h2>
					<!--h3><em>Partenaire du Mondial 2017 <a href="http://www.francehandball2017.com/fr/" target="_blank">
						<img src="images/logo-mondial.png" title="Mondial 2017" alt="Logo Mondial 2017" ></a>
						</em></h3-->
					<ul class="actions menu_ordi">
						<li><a href="blog.php" class="filinfo"></a></li>
                        <li><a href="club.php" class="club"></a></li>
                        <li><a href="calendrier.php" class="calendrier"></a></li>
                        <li><a href="photo.php" class="photo"></a></li>
                        <li><a href="contacts.php" class="contact"></a></li>
                   	</ul>
                   	<ul class="actions menu_mobile">
						<li><a href="blog.php" class="button">Fil Info</a></li>
                        <li><a href="club.php" class="button">Club</a></li>
                        <li><a href="astreintes.php" class="button">Astreintes</a></li>
                        <li><a href="photo.php" class="button">Galerie Photos</a></li>
                        <li><a href="contacts.php" class="button">Contact</a></li>
                   	</ul>
                   	
					<section class="container">
						<div class="actu 6u 12u(mobilep)">
							<div class="row">
								<div class="6u 12u(mobilep)">
									<h4>Articles récents</h4>
									<ul class="alt">
									<?php
										$recentPosts = new WP_Query();
										$recentPosts->query('showposts=4');

										while ($recentPosts->have_posts()) : $recentPosts->the_post(); 
											$article = get_permalink();
											$domaine = array("http://brest-bretagnehandball.com");
											$lien = str_replace($domaine, "", $article);?>
										<li><a href="<?php echo "blog.php?blog=".$lien ?>" rel="bookmark"><?php the_title(); ?></a><br>
											<?php endwhile;	?>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
					
					
					<script type="text/javascript" src="assets/js/titre.js"></script>
				</section>
<?php include("footer.php"); ?>