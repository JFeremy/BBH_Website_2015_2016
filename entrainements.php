<?	session_start(); 
	$_SESSION['titre'] = "La liste des Entraînements des équipes du BBH: Brest Bretagne Handball - Pôle Formation";
	
	include("header.php"); 
?>
						
			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Les Entraînements</h2>
						<p><span class="icon fa-futbol-o accent2"></span> 
							Voici les différentes séances d'Entraînements
						</p>
					</header>
					
					<!-- Navigation -->
					<header class="ss_nav">
						<div class="row">
							<div class="12u">
								<a href="club.php" class="button small icon fa-chevron-left">Club</a>
							</div>
						</div>
					</header>
					
					<!-- Ecole de Hand --><section class="box special features">	
						<header class="major">
							<h3><span class="icon fa-male accent2"></span>
								Ecole de Hand
							</h3>
						</header>
						<!-- Table -->
						<div class="tableau">
							<table class="alt cls">
								<thead>
									<tr>
										<th>Groupe</th>
										<th>Jour</th>
										<th>Heure</th>
										<th>Gymnase</th>
										<th>Entraineur</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="2">10 ans Mixte</td>
										<td>Mercredi</td>
										<td>16h30 - 17h30</td>
										<td rowspan="2">Guéguéniat (Entraînement)</td>
										<td>Clarisse Opondzo</td>
									</tr>
									<tr>
										<td>Samedi</td>
										<td>10h - 11h30</td>
										<td>Clarisse Opondzo - Fleur ?</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</section>
					
					<!-- Féminin --><section class="box special features">
						<header class="major">
							<h3><span class="icon fa-female accent2"></span>
								Féminin
							</h3>
						</header>
						<!-- Table -->
						<div class="tableau">
							<table class="alt cls">
								<thead>
									<tr>
										<th>Groupe</th>
										<th>Jour</th>
										<th>Heure</th>
										<th>Gymnase</th>
										<th>Entraineur</th>
									</tr>
								</thead>
								<tbody>
									<!-- -12F -->
									<tr>
										<td rowspan="3">- 12 ans F</td>
										<td>Lundi</td>
										<td>17h30 - 18h45</td>
										<td>Guéguéniat (Compétition)</td>
										<td rowspan="3">Réginald Scolari  - Mathilde</td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>16h30 - 17h45</td>
										<td>Kerichen</td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>17h30 - 19h</td>
										<td>Guéguéniat (Entraînement)</td>
									</tr>
									
									<!-- -14F -->
									<tr>
										<td rowspan="3">-14 ans F</td>
										<td>Lundi</td>
										<td rowspan="2">17h30 - 18h45</td>
										<td rowspan="2">Guéguéniat (Entraînement)</td>
										<td rowspan="3">Julien Nedelec - Arnaud Dupiol</td>
									</tr>
									<tr>
										<td>Mercredi</td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>17h30 - 19h</td>
										<td>Guéguéniat (Compétition)</td>
									</tr>
									
									<!-- -15F -->
									<tr>
										<td rowspan="3">- 15 ans F</td>
										<td>Lundi</td>
										<td>19h - 20h15</td>
										<td>Pen Ar Streat</td>
										<td rowspan="3">Réginald Scolari </td>
									</tr>
									<tr>
										<td>Mardi</td>
										<td>18h15 - 19h45</td>
										<td>Guéguéniat (Compétition)</td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>19h - 20h15</td>
										<td>Guéguéniat (Entraînement)</td>
									</tr>
									
									<!-- -17F -->
									<!--tr>
										<td rowspan="2">- 17 ans F</td>
										<td>Lundi</td>
										<td>18h - 19h30</td>
										<td>Jacquard</td>
										<td rowspan="2">Clarisse Opondzo</td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>18h45 - 20h</td>
										<td>Guéguéniat (Entraînement)</td>
									</tr-->
									
									<!-- -18F -->
									<tr>
										<td rowspan="3">-18 ans F</td>
										<td>Lundi</td>
										<td rowspan="2">18h45 - 20h15</td>
										<td>Guéguéniat (Compétition)</td>
										<td>Julien Nedelec -Réginald Scolari</td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>Guéguéniat (Entraînement)</td>
										<td rowspan="2">Julien Nedelec</td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>19h - 20h30</td>
										<td>Guéguéniat (Compétition)</td>
									</tr>
									
									<!-- SF3 -->
									<tr>
										<td>Senior F3</td>
										<td>Mardi</td>
										<td>19h - 20h30</td>
										<td>Guéguéniat (Entraînement)</td>
										<td>Larbi Kiker</td>
									</tr>
									
									<!-- Nationale 2 -->
									<tr>
										<td rowspan="4">Nationale 2</td>
										<td>Mardi</td>
										<td>19h - 20h30</td>
										<td>Guéguéniat (Compétition)</td>
										<td rowspan="4">Loïc Gardey</td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>18h15 - 19h45</td>
										<td>Arena</td>
									</tr>
									<tr>
										<td>Jeudi</td>
										<td rowspan="2">19h - 20h30</td>
										<td>Guéguéniat (Compétition)</td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>Aréna</td>
									</tr>
									
									<!-- D2F -->
									<tr>
										<td rowspan="6">D2F</td>
										<td rowspan="1">Lundi</td>
										<td rowspan="4">9h30 - 11h<br>17h30 - 19h30</td>
										<td rowspan="6">Aréna</td>
										<td rowspan="6">Laurent Bezeau</td>
									</tr>
									<tr>
										<td>Mardi</td>
									</tr>
									<tr>
										<td>Mercredi</td>
									</tr>
									<tr>
										<td>Jeudi</td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>17h30 - 19h</td>
									</tr>
									<tr>
										<td>Samedi</td>
										<td>10h30 - 12h</td>
									</tr>
									
									<!-- SSF -->
									<tr>
										<td rowspan="3">SSF</td>
										<td>Mardi</td>
										<td>15h30 - 17h</td>
										<td rowspan="2">Foucault</td>
										<td rowspan="2">Réginald Scolari </td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>12h30 - 14h</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
					
					<!-- Masculin --><section class="box special features">	
						<header class="major">
							<h3><span class="icon fa-male accent2"></span>
								Masculin
							</h3>
						</header>
						<!-- Table -->
						<div class="tableau">
							<table class="alt cls">
								<thead>
									<tr>
										<th>Groupe</th>
										<th>Jour</th>
										<th>Heure</th>
										<th>Gymnase</th>
										<th>Entraineur</th>
									</tr>
								</thead>
								<tbody>
									<!-- 2005 - 2004 -->
									<tr>
										<td rowspan="2">2005 / 2004</td>
										<td>Mardi</td>
										<td rowspan="2">17h30 - 19h</td>
										<td>Jacquard</td>
										<td>Réginald Scolari </td>
									</tr>
									<tr>
										<td>Jeudi</td>
										<td>Guéguéniat (Compétition)</td>
										<td>Larbi Kiker</td>
									</tr>
									
									<!-- 2003 - 2002 -->
									<tr>
										<td rowspan="2">2003 / 2002</td>
										<td>Mardi</td>
										<td rowspan="2">17h30 - 19h</td>
										<td>Guéguéniat (Entraînement)</td>
										<td rowspan="2">Jean-Michel Berthou </td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>Jacquard</td>
									</tr>
									
									<!-- 2002 - 2001 -->
									<tr>
										<td rowspan="2">2002 / 2001</td>
										<td>Mardi</td>
										<td>17h30 - 19h</td>
										<td>Guéguéniat (Compétition)</td>
										<td>Larbi Kiker - Pierre Le Boursicot</td>
									</tr>
									<tr>
										<td>Jeudi</td>
										<td>18h30 - 20h</td>
										<td>Pen Ar Streat</td>
										<td>Larbi Kiker</td>
									</tr>
									
									<!-- SG -->
									<tr>
										<td rowspan="3">Senior Garçon</td>
										<td>Mardi</td>
										<td>20h30 - 22h</td>
										<td rowspan="3">Guéguéniat (Compétition)</td>
										<td rowspan="3">Larbi Kiker</td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>20h - 21h30</td>
									</tr>
									<tr>
										<td>Jeudi</td>
										<td>20h30 - 22h</td>
									</tr>
									
									<!-- SS4M -->
									<!--tr>
										<td rowspan="3">SS4M</td>
										<td>Lundi</td>
										<td>16h30 - 18h</td>
										<td rowspan="3">Beaumanoir</td>
										<td rowspan="2">Réginald Scolari </td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>13h - 14h30</td>
									</tr>
									<tr>
										<td>Jeudi</td>
										<td>16h30 - 18h</td>
										<td>Julien Nedelec</td>
									</tr-->
									
									
								</tbody>
							</table>
						</div>
					</section>
				</section>

<?php include("footer.php"); ?>