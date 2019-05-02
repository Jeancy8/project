<?php
    if(isset($_POST['validnote'])) {

        $info = array(
            'restaurant' => htmlspecialchars($_POST['selectbasic']),
            'note' => htmlspecialchars($_POST['radios']),
            'idProfil' => htmlspecialchars($myProfil->getId()),
            'date_time' => htmlspecialchars(date("Y-m-d H:i:s"))
        );

        $note = new Note($info);
        $noteManager = new NoteManager(getDb());

        $noteManager->insert($note);
        $sucess = "Votre note est enrégistrée";
    }
?>