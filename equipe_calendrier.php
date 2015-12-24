<?php 
// Code pour récupérer le calendrier de la saison

		// Récupération de la page source
		$code_page = file_get_contents($url1);

		// Organisation de la page pour l'exploiter
		$code_page = str_replace("\n", "", $code_page);

		// On extrait le calendrier complet
		preg_match('#<ul id="journeelist" class="touchcarousel-container">(.*)</ul>#Us', $code_page, $sortie);
		
		// On affiche le calendrier complet 
		foreach($sortie as $element)
		{
			echo $element . '<br />';
			// On stop l'affichage pour éviter le doublon
			break;
		}
?>

    <script>		
	// On sélectionne toutes les lignes
	var allday = document.querySelectorAll('li');
	for(var j=0; j<allday.length; j++)
	{	
		// On sélectionne les tableaux
		var cal = allday.item(j).querySelectorAll('table');
		for(var i=0; i<cal.length; i++)
		{
			if(cal.item(i).innerHTML.indexOf("BREST BRETAGNE") === -1)
			{
				// Si cette ligne n'est pas pour le club, on la supprime
				cal.item(i).parentNode.removeChild(cal.item(i));
			}
			else
			{
				// On supprime les info inutiles
				var test = cal.item(i).firstChild.firstChild.children;
				test.item(4).parentNode.removeChild(test.item(4));
				test.item(3).parentNode.removeChild(test.item(3));
				test.item(2).parentNode.removeChild(test.item(2));
				
			}
		}
	}
    </script>
