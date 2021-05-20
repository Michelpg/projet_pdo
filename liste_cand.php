<?php


$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
	<title>Liste des candidat</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="adm.css"  type="text/css">
	
</head>
<body>
HTML;
echo $html;

try {
    
    $cnx = new PDO("mysql:host=localhost;dbname=concours;charset=utf8","root", "");
    $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $req = "SELECT * from candidat";
  
    $pdoreq = $cnx->query($req);
    $pdoreq -> setFetchMode(PDO::FETCH_ASSOC);
    
    foreach($pdoreq as $ligne){
        echo $ligne['idCand']." ".$ligne['prenoms']." 
        ".$ligne['datenaiss']." ".$ligne['lieunaiss']." ".$ligne['rue']." 
        ".$ligne['CP']." ".$ligne['ville']." 
        ".$ligne['tel']." ".$ligne['courriel']." ".$ligne['sexe']." 
        ".$ligne['idSpec']."".$ligne['idFil']." ".$ligne['passwd']." <br>";
    
    
        
    }

    }

catch(PDOException $event) {

    echo "Erreur : ".$event -> getMessage()."<br/>";
    die();
    
    }

$html = <<<HTML


<h1>Liste des candidat </h1>  






</body>
</html>
HTML;
echo $html;


?>