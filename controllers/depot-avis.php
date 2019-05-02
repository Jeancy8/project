<?php

    if(isset($_POST['validAvis'])) {

        $avis = array(
            'name' => htmlspecialchars($_POST['selectVisite']),
            'titre' => htmlspecialchars($_POST['selectVisiteTitre']),
            'message' => htmlspecialchars($_POST['contact-mess']),
            'id_profil' => htmlspecialchars($myProfil->getId()),
            'date_time' => htmlspecialchars(date("Y-m-d H:i:s"))
        );

        $avisUser = new Avis($avis);
        $avisManager = new AvisManager(getDb());

        $avisManager->insert($avisUser);

        $sucess = "Votre avis a bien été enregistrée.";
    }
?>