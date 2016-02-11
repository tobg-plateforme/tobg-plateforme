<?php

include 'Implementation/Constantes.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connexion
 *
 * @author Jordan
 */
class Connexion {

    //On dénifit un objet connexion privé
    private $cnx;

    //On délégue la création de la connexion au constructeur
    public function __construct() {
        try {

            //On définit nos variables afin de récupérer nos constantes de connexion
            $sgbd = Constantes::SDGB_TYPE;
            $host = Constantes::HOST_NAME;
            $dbName = Constantes::DB_NAME;
            $user = Constantes::USER_NAME;
            $password = Constantes::PASSWORD_USER;
            $options = Constantes::OPTION_CONNEXION;



            $pdo = new PDO($sgbd . ':host=' . $host . ';dbname=' . $dbName, $user, $password, $options);
            //On assigne à notre objet de connexion privée
            $this->cnx = $pdo;
        } catch (Exception $e) {

            trigger_error($e->getMessage(), E_USER_ERROR);
        }
    }

    //On utilisera cette méthode pour créer une instance de connexion PDO
    //On l'utilise de la même façon qu'un accesseur Get
    function getLaConnexion() {

        $pdo = $this->cnx;
        return $pdo;
    }

}
