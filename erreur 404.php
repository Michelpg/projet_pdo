<?php

$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
	<title>Erreur 404</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="erreur_404.css" media="screen" type="text/css" />
	
</head>
<body>
HTML;

$html = <<<HTML
<div id="image">

<img src="erreur_404.jpg" alt="ERREUR 404" width="50%" height="50%"></br>

</div>  
</body>
</html>
HTML;
echo "$html";

?>