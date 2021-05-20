<?php

$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
	<title>CANDIDAT</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="adm.css"  type="text/css">
	
</head>
<body>
HTML;
echo $html;

$html = <<<HTML
<h1>
Connexion reussi candidat 
</h1>  

<div class="menu" >
			
	<button class="menu"> Candidat </button>
			  
		<div class="dansmenu">			
			<a href="" >Affichage du candidat</a>			
			<a href="" >Modification candidat</a>								

				
		</div>
</div>

<div class="menu" >
			
	<button class="menu"> Résultats </button>
			  
		<div class="dansmenu">			
			<a href="" >Notes par épreuve</a>			

				
		</div>
</div>

</body>
</html>
HTML;
echo "$html";

?>