<?php
/* 
 * Tales of Battleground
 * Document : $nomdufichier
 * Version : 0.1
 * Auteur : Jordan 
 * Date :
 * Controleur centrale redirection
 */
//
if (filter_input(INPUT_GET,'module')) {
    
    //On attribut à une variable le paramètre passé en get
    $module = filter_input(INPUT_GET, 'module');
    
    //En utilisant le module en paramètre on pourra accéder à la vue souhaitée
    switch ($module) {
        case 'connexion':
            
            


            break;

        default:
            include 'web/vues/v_connexion.php';
            
            break;
    }
    
    
}


