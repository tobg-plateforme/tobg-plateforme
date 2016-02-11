<!DOCTYPE html>
<!--
Tales of Battleground
Document : $nomdufichier
Version : 0.1
Auteur : Alexandra 
Date : 11/02/2016
-->
<html>
    <head>
        <title>Tales of Battleground</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- Structure globale avant découpage en plusieurs fichiers -->
        
        
        <!-- Header + menu -->
        
        <!-- Barre suppérieure avec bouton menu, Titre de la page affichée, 
                    avatar de l'utilisateur connecté (s'il l'est) -->
        <header>
            <!-- Boutton menu (à voir pour la construction de l'élément) -->
            <img alt='' src=''>
            
            <!-- Titre de la page (peu importe l'élément affiché, article, fichier, evenement, fil d'actu...) -->
            <h2 id='tobg_titre_page'><!-- $titrePage --></h2>
            
            <!-- Avatar de l'utilisateur CONNECTE -->
            <img alt='' src=''>
            <!-- div notification si nouveaux messages privés, à voir pour la nature de l'élément -->
            <div></div>
        </header>
        
        <!-- Navigation principale, menu latéral affiché par défaut, possible de le cacher grâce au bouton
                    à gauche du header -->
        <nav id='tobg_left_menu'>
            <!-- Le menu étant affiché par défaut, on met le logo du site dedans
                Dans un h1 pour le référencement du site -->
            <h1 id='tobg_logo_container'>
                <img id='tobg_logo_img' src='' alt=''>
            </h1>
            
            <ul id='tobg_left_menu_ul'>
                <li class='tobg_left_menu_li'>
                    <!-- $titreMenu -->
                </li>
            </ul>
        </nav>
        
        
        <!-- Contenu de la page -->
        
        <div id='tobg_container'>
            
            
            

