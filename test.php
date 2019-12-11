<?php

include "utilisateur.class.php";

$p = "<h1>Premier formulaire</h1>";
$p .= "<hr>";

/*

if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
    $p .= "<p>Nom : ".$_POST['nom']."</p><p>Prenom : ".$_POST['prenom']."</p>";
}else{
    $p .= "<p>Valeur(s) incorrect(s) !</p>";
}

echo $p;
*/

if(isset($_POST['nom']) && isset($_POST['prenom'])){
    Utilisateur::create_utilisateur($_POST['nom'], $_POST['prenom']);
    $p .= "<p>Utilisateur créé</p>";
}else{
    $o .= "<p>Création impossible, le formulaire est invalide.</p>"
}

echo $p;
?>
