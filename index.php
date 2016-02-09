<?php

//
if (filter_input(INPUT_GET,'module')) {
    
    //On attribut à une variable le paramètre passé en get
    $module = filter_input(INPUT_GET, 'module');
    
    //En utilisant le module en paramètre on pourra accéder à la vue souhaitée
    switch ($module) {
        case 'connexion':
            include 'web/vues/v_connexion.php';


            break;

        default:
            break;
    }
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

