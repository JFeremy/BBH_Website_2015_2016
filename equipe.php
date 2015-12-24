<?	session_start();

	$_SESSION['equipe'] = $_GET['equipe'];
	include("equipe_selection.php");

	$_SESSION['titre'] = $title;

	include("header.php");

	include("equipe_contenu.php");
	
	include("footer.php"); 
?>