<?php 

	define('WP_USE_THEMES', false); // aucun besoin d'utiliser le thème actif donc on le désactive
	require('blog/wp-load.php'); // on include le "moteur" wordpress
	
	$id = 174;
	$post = get_post($id);
	$date = $post->post_modified;
	
	if(!isset($_SESSION['date']))
	{
		$_SESSION['date'] = $post->post_modified;
	}
	
	if (!isset($_SESSION['activation']) || $_SESSION['activation'] == 0 || $date > $_SESSION['date'])  {
	/* Activation de la PopUp */
	
	$_SESSION['activation'] = 1;
	$_SESSION['date'] = $date;
	
	$contenu = $post->post_content;
	$contenu = apply_filters('the_content', $contenu);
	$contenu = str_replace(']]>', ']]&gt;', $contenu);

	echo '<div id="message" style="display:none;">';
	echo $contenu;
	echo '</div>';
?>
	
	<script type="text/javascript">
		var activation = 1;
		var message = document.getElementById("message").firstChild.innerHTML;
		var titre = "Important";
		if(activation == <?php echo $_SESSION['activation']; ?>)
		{
			alert(titre,message);
		}
	</script> <?php } ?>