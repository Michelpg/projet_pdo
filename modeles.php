<?php

function connexion($host, $dbname, $user, $pass) {

    $host = 'localhost';
    $dbname = 'concours';
    $user = 'admin';
    $pass = '100';

    try {
        $dbh = new PDO($host, $dbname, $user, $pass);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        die();
    }
}

function requeteSelect($cnx, $req) {

    try {
        $cnx = new PDO ('localhost', 'concours', 'admin', '100');
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $req = "SELECT * FROM concours;";
        $pdoreq = $cnx -> query ($req);

        $pdoreq -> setFetchmode(PDO::FETCH_BOTH);

        foreach ($pdoreq as $ligne) {
            echo $ligne['idCand']."  ".$ligne[1]."  ".$ligne[2]."<br />";
        }
    }

    catch(PDOException $e) {
        echo "Erreur : ".$e -> getMessage()."<br />";
        die();
    }
}

function requeteUpdate($cnx, $req) {

    try {
        $cnx = new PDO ('localhost', 'concours', 'admin', '100');
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $req = "UPDATE candidat SET note = 10 WHERE note IS NULL;"; //Exemple à modifier
        $pdoreq = $cnx -> query ($req);

        $pdoreq -> setFetchmode(PDO::FETCH_BOTH);
        }
    }

    catch(PDOException $e) {
        echo "Erreur : ".$e -> getMessage()."<br />";
        die();
    }
}

function requeteDelete($cnx, $req) {

    try {
        $cnx = new PDO ('localhost', 'concours', 'admin', '100');
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $req = "DELETE FROM candidat WHERE nom = 'exemple' AND note = 5;"; //Exemple à modifier
        $pdoreq = $cnx -> query ($req);

        $pdoreq -> setFetchmode(PDO::FETCH_BOTH);
        }
    }

    catch(PDOException $e) {
        echo "Erreur : ".$e -> getMessage()."<br />";
        die();
    }
}

function requeteInsert($cnx, $req) {

    try {
        $cnx = new PDO ('localhost', 'concours', 'admin', 'BTS1IR');
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $req = "INSERT INTO candidat ($id, $nom, $prenom) VALUES (152, 'Smith', 'James');";
        $pdoreq = $cnx -> query ($req);

        $pdoreq -> setFetchmode(PDO::FETCH_BOTH);
        }
    }

    catch(PDOException $e) {
        echo "Erreur : ".$e -> getMessage()."<br />";
        die();
    }
}
?>