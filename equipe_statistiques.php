<?php 
// Code pour récupérer le tableaud de stats

	// Récupération de la page source
	$code_page = file_get_contents($url1);
	
	// Organisation de la page pour l'exploiter
	$code_page = str_replace("\n", "", $code_page);

	// On extrait le calendrier complet
	preg_match('#<div class="round">(.*)</div>#Us', $code_page, $sortie);

	// On affiche le calendrier complet 
	foreach($sortie as $element)
	{
		echo $element . '<br />';
		// On stop l'affichage pour éviter le doublon
		break;
	}
?>
<script>
	var lien = document.querySelectorAll(".eq");

	for(var i=1; i<lien.length; i++)
	{
		text = lien.item(i).removeChild(lien.item(i).firstChild);
		var newText = document.createTextNode(text.innerHTML);
		lien.item(i).appendChild(newText);
		
		// On améliore la lisibilité
		if(lien.item(i).parentNode.innerHTML.indexOf("BREST BRETAGNE") !== -1)
		{
			lien.item(i).parentNode.style.fontWeight = 'bold';
			lien.item(i).parentNode.style.fontStyle = 'italic';
		}
	}
</script>