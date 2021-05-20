<?php
session_start();

$user = $_POST['login'];
$passwd = $_POST['code'];

//Sessions
$_SESSION['i'][0] = $user;
$_SESSION['i'][1] = $passwd;


try {
    
    $cnx = new PDO("mysql:host=localhost;dbname=concours;charset=utf8","root", "");
    $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $req = "SELECT courriel and passwd  FROM candidat WHERE courriel = '".$user."' AND passwd = '".$passwd."'";

    echo $req."<br/>";
    
    $pdoreq = $cnx->query($req);

    $val=$pdoreq->Fetch();

	if ($_POST['login']==admin && $_POST['code']==100) {
		header("location: connexion_reu_adm.php");
        exit;
	}

    if($user==$_POST['login'] && $passwd== $_POST['code'] )
    {
        header("location: connexion_reu_cand.php");
        exit;

    }
    else
    {
        header("location: erreur 404.php");
        exit;
    }



}
catch(PDOException $event) {

    echo "Erreur : ".$event -> getMessage()."<br/>";
    die();
    
    }

?>