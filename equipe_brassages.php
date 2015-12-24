<?php 
// Code pour récupérer le tableaud de stats

	// Récupération de la page source
	$code_page2 = file_get_contents($url2);
	
	// Organisation de la page pour l'exploiter
	$code_page2 = str_replace("\n", "", $code_page2);

	// On extrait le calendrier complet
	preg_match('#<div class="round">(.*)</div>#Us', $code_page2, $sortie2);

	// On affiche le calendrier complet 
	foreach($sortie2 as $element2)
	{
		echo $element2 . '<br />';
		// On stop l'affichage pour éviter le doublon
		break;
	}
?>
<script>
	var lien2 = document.querySelectorAll(".eq");

	for(var j=1; j<lien.length; j++)
	{
		text2 = lien2.item(j).removeChild(lien2.item(j).firstChild);
		var newText2 = document.createTextNode(text2.innerHTML);
		lien2.item(j).appendChild(newText2);
		
		// On améliore la lisibilité
		if(lien2.item(j).parentNode.innerHTML.indexOf("BREST BRETAGNE") !== -1)
		{
			lien2.item(j).parentNode.style.fontWeight = 'bold';
			lien2.item(j).parentNode.style.fontStyle = 'italic';
		}
	}
</script>