<?	session_start();

	$_SESSION['equipe'] = $_GET['equipe'];
	include("equipe_selection.php");

	$_SESSION['titre'] = $title;

	include("header.php");?>

	<!-- Main -->
	<section id="main" class="container">
		<header>
			<h2><?php echo $equipe; ?></h2>
			<p><span class="icon fa-list-alt accent2"></span>
				<?php echo $niveau; ?>
			</p>
		</header>
		
		<header class="ss_nav">
			<div class="row">
				<div class="6u 12u(mobilep)">
					<a href="liste_equipes.php" class="button small icon fa-chevron-left">Retour sur la liste des équipes</a>
				</div>
				<div class="6u 12u(mobilep)">
					<a href="<?php echo $url; ?>" class="button small icon fa-search" target="_blank">Lien vers la Fédération</a>
				</div>
			</div>
		</header>
		
		<section class="box special">
			<header>
				<h2><span class="icon fa-calendar accent2"> Calendrier</span></h2>
			</header>
			<div class="row">
				<div class="6u 12u(mobilep)">
					<iframe src="https://docs.google.com/file/d/0B29jlj-qlPnrcTVOZVJHa3E3RWs/preview" width="" height="480"></iframe>
				</div>
				<div class="6u 12u(mobilep)">
					<iframe src="https://docs.google.com/file/d/0B29jlj-qlPnrSWlIYWstZTFFQUE/preview" width="" height="480"></iframe>
				</div>
			</div>
		</section>
		
		<section class="box special">
			<header>
				<h2><span class="icon fa-gears accent2"> Règlements</span></h2>
			</header>
			<div class="row">
				<div class="6u 12u(mobilep)">
					<iframe src="https://docs.google.com/file/d/0B29jlj-qlPnrYnR6X3U5OHhxc3c/preview" width="" height="480"></iframe>
				</div>
				<div class="6u 12u(mobilep)">
					<iframe src="https://docs.google.com/file/d/0B29jlj-qlPnrNjFWN19Qek1PeTQ/preview" width="" height="480"></iframe>
				</div>
			</div>
		</section>
	</section>
	
<?php
	include("footer.php"); 
?>