<?php
    $profilManager = new ProfilManager(getDb());
    $avisManager = new AvisManager(getDb());

    $userCount = $profilManager->getRegisteredCount();
    $dateLastMessage = $avisManager->getDateLastMessage();

?>