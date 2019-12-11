<?php

require_once('myPDO.include.php');

class Utilisateur {
    private $nom;
    private $prenom;

    public static function create_utilisateur($nom ,$prenom){
        $pdo = myPDO::getInstance();
        $stmt = $pdo->prepare("INSERT INTO `entrees`(`nom`, `prenom`)
                               VALUES(:nom, :prenom);");

        $stmt->execute(array( 'nom'=>$nom, 'prenom'=>$prenom));
    }
}
