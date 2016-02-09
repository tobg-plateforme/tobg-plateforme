<?php

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
            //On définit un tableau de paramêtres
            $db_config = array();
            //On définit le type de SGBD choisit
            $db_config['SGBD'] = 'mysql';
            //On définit l'hôte
            $db_config['HOST'] = 'localhost';
            //On définit le nom de la base
            $db_config['DB_NAME'] = 'tests';
            //On définit le nom de la base;
            $db_config['USER'] = 'root';
            //On définit le nom de la base;
            $db_config['PASSWORD'] = '';
            //On définit le nom de la base;
            $db_config['OPTIONS'] = array(
                // On active les exceptions PDO :

                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //On change le fetch mode par défaut sur FETCH_ASSOC ( fetch() retournera un tableau associatif ) :
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );



            $pdo = new PDO($db_config['SGBD'] . ':host=' . $db_config['HOST'] . ';dbname=' . $db_config['DB_NAME'], $db_config['USER'], $db_config['PASSWORD'], $db_config['OPTIONS']);

            unset($db_config);

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
