<? 	session_start(); 
	$_SESSION['titre'] = "Les astreintes pour les équipes du BBH: Brest Bretagne Handball - Pôle Formation";
	include("header.php");
?>
		
			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Astreintes</h2>
						<p><span class="icon fa-list-alt accent2"></span>
							Liste des Astreintes
						</p>
					</header>
					<section>
						<iframe id="mon_iframe" name="FilInfo"  src="http://brest-bretagnehandball.com/blog/category/astreintes/" class="autoHeight" width="100%" style="min-height: 1000px;"></iframe>
					</section>
				</section>

<?php include("footer.php"); ?>