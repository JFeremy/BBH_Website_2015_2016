<?php
	$titleend = ': Brest Bretagne Handball - Pôle Formation';
	
	switch ($_SESSION['equipe']) {
	/* ECOLE DE HAND */
    case "ecole":
		$title = 'Ecole de handball mixte -10 ans' . $titleend;
		$equipe = 'Ecole de handball mixte (-10 ans)';
		$niveau1 = 'Championnat';
		$url1 = '';
		$niveau2 = '';
		$url2 = '';
        break;
		
	/* LES EQUIPES FEMININE */
    case "-12F":
		$title = '-12F (-12 ans Féminin)' . $titleend;
		$equipe = '-12 ans Fille';
		$niveau1 = 'PréRégion';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=2782&tx_obladygesthand_pi1%5Bphase_id%5D=3374&tx_obladygesthand_pi1%5Bgroupe_id%5D=6011&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=3831869d95531aeb10332fecb44497da';
		$niveau2 = 'Brassages';
		$url2 = 'http://www.ff-handball.org//competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1874&tx_obladygesthand_pi1%5Bphase_id%5D=2024&tx_obladygesthand_pi1%5Bgroupe_id%5D=2518&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=878d38185fb15b877010a5a798f0a98d';
        break;
	case "-14F":
		$title = '-14F (-14 ans Féminin)' . $titleend;
		$equipe = '-14 ans Fille';
		$niveau1 = 'PréRégion';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=2781&tx_obladygesthand_pi1%5Bphase_id%5D=3373&tx_obladygesthand_pi1%5Bgroupe_id%5D=6003&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=1fa4235f03107fa3736abd1c8bed6451';
        $niveau2 = 'Brassages';
		$url2 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1937&tx_obladygesthand_pi1%5Bphase_id%5D=2095&tx_obladygesthand_pi1%5Bgroupe_id%5D=2625&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=b78f5ef586bd63ff3f48fd0b2a3e7598';
        break;
    case "-15F":
		$title = '-15F (-15 ans Féminin)' . $titleend;
		$equipe = '-15 ans Fille';
		$niveau1 = 'Excellence Régionale';
		$url1 = 'http://www.ff-handball.org//competitions/championnats-regionaux/bretagne.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1265&tx_obladygesthand_pi1%5Bphase_id%5D=1306&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=d4f7dc0a5400c4b72b1daaca39ed30fc';
        $niveau2 = '';
		$url2 = '';
        break;
    case "-17F":
		$title = '-17F (-17 ans Féminin)' . $titleend;
		$equipe = '-17 ans Fille';
		$niveau1 = 'Poule Ouest 1ère Phase';
		$url1 = 'http://www.ff-handball.org//competitions/championnats-regionaux/bretagne.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1261&tx_obladygesthand_pi1%5Bphase_id%5D=1305&tx_obladygesthand_pi1%5Bgroupe_id%5D=1313&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=a93f40a2e8efe395517f980c90943016';
        $niveau2 = '';
		$url2 = '';
        break;
	case "-18F":
		$title = '-18F (-18 ans Féminin)' . $titleend;
		$equipe = '-18 ans Fille';
		$niveau1 = 'Nationale';
		$url1 = 'http://www.ff-handball.org//competitions/championnats-nationaux/moins-de-18-ans-f.html?tx_obladygesthand_pi1%5Bcompetition_id%5D=1163&tx_obladygesthand_pi1%5Bphase_id%5D=1180&tx_obladygesthand_pi1%5Bgroupe_id%5D=1112&cHash=c9ab4b1fd883effaadd4657f540aee1c';
        $niveau2 = '';
		$url2 = '';
        break;
    case "N2F":
		$title = 'N2F (Nationale équipe 2 Fille)' . $titleend;
		$equipe = 'Senior Fille 2';
		$niveau1 = 'Nationale 2';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-nationaux/n2f/resultats.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1082&tx_obladygesthand_pi1%5Bphase_id%5D=1090&tx_obladygesthand_pi1%5Bgroupe_id%5D=1051&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=7e52e8e0ccf41c234450b44cc25d419b';
        $niveau2 = '';
		$url2 = '';
        break;
    case "SF3":
		$title = 'SF3 (Senior Fille-équipe 3)' . $titleend;
		$equipe = 'Senior Fille 3';
		$niveau1 = 'Excellence Départementale';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bcompetition_id%5D=1331&cHash=a75456c0b2d2b303b76af49edd5d9d05';
        $niveau2 = '';
		$url2 = '';
        break;
    case "D2F":
		$title = 'D2F (Senior Fille-équipe Pro)' . $titleend;
		$equipe = 'Senior Fille Equipe Pro';
		$niveau1 = 'Championnat de France Division 2 Féminine';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-nationaux/d2f/resultats.html';
        $niveau2 = '';
		$url2 = '';
        break;
		
	/* LES EQUIPES MASCULINE */
    case "-12G1":
		$title = '-12G (-12 ans Masculin)' . $titleend;
		$equipe = '-12 ans Garçon Equipe 1';
		$niveau1 = 'PréRégion';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=2785&tx_obladygesthand_pi1%5Bphase_id%5D=3378&tx_obladygesthand_pi1%5Bgroupe_id%5D=6031&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=d9563befd1d7368a4f2c208eb48f633e';
        $niveau2 = 'Brassages Départementaux';
		$url2 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1924&tx_obladygesthand_pi1%5Bphase_id%5D=2078&tx_obladygesthand_pi1%5Bgroupe_id%5D=2610&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=1a2b7685eb4633e58481d19dcb676be6';
        break;
    case "-12G2":
		$title = '-12G (-12 ans Masculin)' . $titleend;
		$equipe = '-12 ans Garçon Equipe 2';
		$niveau1 = 'Honneur Départementale';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=2785&tx_obladygesthand_pi1%5Bphase_id%5D=3378&tx_obladygesthand_pi1%5Bgroupe_id%5D=6037&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=5168fefce5d464076bae96189d8485b2';
        $niveau2 = 'Brassages Départementaux';
		$url2 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1924&tx_obladygesthand_pi1%5Bphase_id%5D=2079&tx_obladygesthand_pi1%5Bgroupe_id%5D=2614&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=382f897d4dda3e2b1c704a7acfbcbb73';
        break;
    case "-14G":
		$title = '-14G (-14 ans Masculin)' . $titleend;
		$equipe = '-14 ans Garçon';
		$niveau1 = 'Excellence Bas Départementale';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=2784&tx_obladygesthand_pi1%5Bphase_id%5D=3376&tx_obladygesthand_pi1%5Bgroupe_id%5D=6024&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=b944b05069efef66e5b8af4a8cac853d';
        $niveau2 = 'Brassages Départementaux';
		$url2 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1943&tx_obladygesthand_pi1%5Bphase_id%5D=2103&tx_obladygesthand_pi1%5Bgroupe_id%5D=2637&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=2658a4349bb345bda0e4a0bda4bf492c';
        break;
	case "-15G":
		$title = '-15G (-15 ans Masculin)' . $titleend;
		$equipe = '-15 ans Garçon';
		$niveau1 = 'Régionale';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-regionaux/bretagne.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1262&tx_obladygesthand_pi1%5Bphase_id%5D=1288&tx_obladygesthand_pi1%5Bgroupe_id%5D=1289&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=424a1025c3705c88cead1ce3764d3595';
        $niveau2 = '';
		$url2 = '';
        break;
    case "-18G":
		$title = '-18G (-18 ans Masculin)' . $titleend;
		$equipe = '-18 ans Garçon';
		$niveau1 = 'Départementale';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bcompetition_id%5D=1953&cHash=b8077894a3e4b02a6288f04f6abbf3ba';
        $niveau2 = '';
		$url2 = '';
        break;
	case "SG1":
		$title = 'SG1 (Senior Garçon-équipe 1)' . $titleend;
		$equipe = 'Senior Garçon 1';
		$niveau1 = 'Excellence Départementale';
        $url1 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1357&tx_obladygesthand_pi1%5Bphase_id%5D=1398&tx_obladygesthand_pi1%5Bgroupe_id%5D=1469&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=56f4e1e5501738afcef53d8418ea049c';
        $niveau2 = '';
		$url2 = '';
        break;
    case "SG2":
		$title = 'SG2 (Senior Garçon-équipe 2)' . $titleend;
		$equipe = 'Senior Garçon 2';
		$niveau1 = 'Honneur Départementale';
		$url1 = 'http://www.ff-handball.org/competitions/championnats-departementaux/29-comite-du-finistere.html?tx_obladygesthand_pi1%5Bsaison_id%5D=11&tx_obladygesthand_pi1%5Bcompetition_id%5D=1847&tx_obladygesthand_pi1%5Bphase_id%5D=1994&tx_obladygesthand_pi1%5Bgroupe_id%5D=2458&tx_obladygesthand_pi1%5Bmode%5D=single_phase&cHash=89c23fb949bd26c2765963f4925b5b66';
        $niveau2 = '';
		$url2 = '';
        break;
	
	/* ERREUR */
	default:
		$title = 'ERREUR' . $titleend;
		$equipe = 'ERREUR';
		$niveau1 = 'ERREUR';
		$url1 = '';
		$niveau2 = 'ERREUR';
		$url2 = '';
}
?>