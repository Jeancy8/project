<?php

    include_once 'include/config.php';
    
    $p = (isset($_GET['p'])) ? $_GET['p'] : 'index';

    include_once 'include/define.php';

    include_once $path['controllers'].'global.php';

    //Controllers
    switch($p) {
        case $page['accueil']:
            include $path['controllers'].$page['accueil'].'.php';
        break;
        case $page['visite']:
            include $path['controllers'].$page['visite'].'.php';
        break;
        case $page['restaurant']:
            include $path['controllers'].$page['restaurant'].'.php';
        break;
        case $page['noter-resto']:
            if(isset($_SESSION['pseudo']))
                include $path['controllers'].$page['noter-resto'].'.php';
            else
                include $path['controllers'].$page['error404'].'.php';
            break;
        case $page['meteo']:
            include $path['controllers'].$page['meteo'].'.php';
        break;
        case $page['contact']:
            include $path['controllers'].$page['contact'].'.php';
        break;
        case $page['depot-avis']:
            if(isset($_SESSION['pseudo']))
                include $path['controllers'].$page['depot-avis'].'.php';
            else
                include $path['controllers'].$page['error404'].'.php';
            break;
        case $page['avis']:
            include $path['controllers'].$page['avis'].'.php';
        break;
        case $page['inscription']:
            if(!isset($_SESSION['pseudo']))
                include $path['controllers'].$page['inscription'].'.php';
            else
                include $path['controllers'].$page['error404'].'.php';
        break;
        case $page['connexion']:
            if(!isset($_SESSION['pseudo']))
                include $path['controllers'].$page['connexion'].'.php';
            else
                include $path['controllers'].$page['error404'].'.php';
        break;
        case $page['administrateur']:
            if(isset($_SESSION['pseudo']) AND $myProfil->getRole() == $role['admin'])
                include $path['controllers'].$page['administrateur'].'.php';
            else
                include $path['controllers'].$page['accueil'].'.php';
            break;
        case $page['deconnexion']:
            include $path['controllers'].$page['deconnexion'].'.php';
        break;
        default:
            include $path['controllers'].$page['accueil'].'.php';
        break;
    }

    //Haut de page, head + header
    include $path['elt'].'top.php';

    //Views
    switch($p) {
        case $page['accueil']:
            include $path['views'].$page['accueil'].'.php';
        break;
        case $page['visite']:
            include $path['views'].$page['visite'].'.php';
        break;
        case $page['restaurant']:
            include $path['views'].$page['restaurant'].'.php';
        break;
        case $page['noter-resto']:
            if(isset($_SESSION['pseudo']))
                include $path['views'].$page['noter-resto'].'.php';
            else
                include $path['views'].$page['error404'].'.php';
            break;
        case $page['meteo']:
            include $path['views'].$page['meteo'].'.php';
        break;
        case $page['contact']:
            include $path['views'].$page['contact'].'.php';
        break;
        case $page['depot-avis']:
            if(isset($_SESSION['pseudo']))
                include $path['views'].$page['depot-avis'].'.php';
            else
                include $path['views'].$page['error404'].'.php';
            break;
        case $page['avis']:
            include $path['views'].$page['avis'].'.php';
        break;
        case $page['inscription']:
            if(!isset($_SESSION['pseudo']))
                include $path['views'].$page['inscription'].'.php';
            else
                include $path['views'].$page['error404'].'.php';
        break;
        case $page['connexion']:
            if(!isset($_SESSION['pseudo']))
                include $path['views'].$page['connexion'].'.php';
            else
                include $path['views'].$page['error404'].'.php';
        break;
        case $page['administrateur']:
            if(isset($_SESSION['pseudo']) AND $myProfil->getRole() == $role['admin'])
                include $path['views'].$page['administrateur'].'.php';
            else
                include $path['views'].$page['accueil'].'.php';
            break;
        default:
            include $path['views'].$page['accueil'].'.php';
        break;
    }

    //Bas de page, footer + script
    include $path['elt'].'bottom.php';
?>