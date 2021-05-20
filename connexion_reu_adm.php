<?php

$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="adm.css"  type="text/css">
	
</head>
<body>
HTML;
echo $html;
$html = <<<HTML


<h1>
Connexion reussi ADMIN
</h1>  

<div class="menu" >
			
	<button class="menu"> Candidat </button>
			  
		<div class="dansmenu">			
			<a href="liste_cand.php" >Liste des candidat</a>			
			<a href="ajout_cand.php" >Ajout candidat</a>								
			<a href="modi_cand.php" >Modification candidat</a>				
			<a href="supp_cand.php" >Suppression candidat</a>							
			
				
		</div>
</div>

<div class="menu" >
			
	<button class="menu"> Résultats </button>
			  
		<div class="dansmenu">			
			<a href="note_par_cand.php" >Notes par candidat</a>			
			<a href="note_cand.php" >Noters des candidat</a>								
			<a href="modi_note.php" >Modification des notes</a>				
			<a href="calcul_moy.php" >Calcul des moyennes</a>							
			<a href="affiche_resl.php" >Affichage des résultats</a>
				
		</div>
</div>




</body>
</html>
HTML;
echo $html;


?>