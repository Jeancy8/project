<?php
    if(isset($_GET['name'])) {
        $avisManager = new AvisManager(getDb());
        $profilManager = new ProfilManager(getDb());
        $avisList = $avisManager->get(htmlspecialchars($_GET['name']));
        if(empty($avisList)) {
            $alert = "Pas d'avis pour cette balade";
        }
    }
?>