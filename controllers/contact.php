<?php

    if(isset($_POST['contact-envoi'])) {

        $info = array(
            'who' => htmlspecialchars($_POST['radioWho']),
            'name' => htmlspecialchars($_POST['prenom']),
            'lastname' => htmlspecialchars($_POST['nom']),
            'email' => htmlspecialchars($_POST['contact-mail']),
            'subject' => htmlspecialchars($_POST['radioSubject']),
            'message' => htmlspecialchars($_POST['contact-mess']),
            'date_time' => htmlspecialchars(date("Y-m-d H:i:s"))
        );

        $contact = new Contact($info);
        $contactManager = new ContactManager(getDb());

        $contactManager->insert($contact);

        $sucess = "Votre message est enrégistrée";
    }
?>

