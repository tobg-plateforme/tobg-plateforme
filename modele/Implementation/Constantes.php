<?php

/* 
 * Tales of Battleground
 * Document : $nomdufichier
 * Version : 0.1
 * Auteur : Jordan 
 * Date :
 */
class Constantes {
    //On définit des constantes de connexion afin de faciliter le parametrage de la connexion
    const SDGB_TYPE = "mysql";
    const HOST_NAME = "localhost";
    const DB_NAME = "tobgplateforme";
    const USER_NAME = "root";
    const PASSWORD_USER = "";
    const OPTION_CONNEXION = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //On change le fetch mode par défaut sur FETCH_ASSOC ( fetch() retournera un tableau associatif ) :
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    
    
    
    public static function getTypeSGBD()
    {
        return self::SDGB_TYPE;
    }
    public static function getHost()
    {
        return self::HOST_NAME;
    }
    public static function getDb()
    {
        return self::DB_NAME;
    }
    public static function getUserDb()
    {
        return self::USER_NAME;
    }
    public static function getPasswordUser()
    {
        return self::PASSWORD_USER;
    }
    public static function getOptionsConnexion()
    {
       return self::PASSWORD_USER; 
    }
    
    
}
