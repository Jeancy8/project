<?php

    if(isset($_POST['inscrsubmit'])) {

        $user = array(
            'email' => htmlspecialchars($_POST['inscrmail']),
            'pseudo' => htmlspecialchars($_POST['inscrpseudo']),
            'password' => htmlspecialchars(hash(hash_algos()[7], $_POST['inscrpassword'])),
            'password2' => htmlspecialchars(hash(hash_algos()[7], $_POST['inscrvalidationpassword'])),
            'date_time_registration' => htmlspecialchars(date("Y-m-d H:i:s"))
            );

        $profil = new Profil($user);
        $profilManager = new ProfilManager(getDb());

        // Verifie que le pseudo n'est pas une adresse mail
        if(!filter_var($user['pseudo'], FILTER_VALIDATE_EMAIL)) {
            if(strlen($user['pseudo']) <= 12) {
                //Vérifie si le mot de passe comporte 1 lettre, 1 chiffre et a minimum 6 caractères
                if(preg_match('#(([a-zA-Z]+[0-9]+|[0-9]+[a-zA-Z]+).*|.*([a-zA-Z]+[0-9]+|[0-9]+[a-zA-Z]+).*|[a-zA-Z]+.*[0-9]+|[0-9]+.*[a-zA-Z])#', $_POST['inscrpassword']) && strlen($_POST['inscrpassword']) >= 6) {
                    if($user['password'] == $user['password2']) {
                        if(!$profilManager->pseudoExist($user['pseudo'])) {
                            if(!$profilManager->emailExist($user['email'])) {
                                $profilManager->insert($profil);
                                $sucess = "Votre compte a bien été créer.";
                            } else
                                $alert = "Cette adresse email est déjà utilisé.";
                        } else
                            $alert = "Ce pseudonyme a déjà été pris.";
                    } else
                    $alert = "Les mots de passes ne se correspondent pas.";
                } else
                $alert = "Le mot de passe doit avoir au minimum 6 caractères, un chiffre et une lettre.";
            } else
            $alert = "Le pseudo ne doit pas dépasser 12 caractères";
        } else
        $alert = "Votre pseudo ne doit pas être une adresse mail";

    }
?>