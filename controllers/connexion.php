<?php 

    if(isset($_POST['login'])){
            
        $identifiant = htmlspecialchars($_POST['identifiant']);
        $password = htmlspecialchars(hash(hash_algos()[7], $_POST['password']));

        $connexion = new ProfilManager(getDb());
        $log = $connexion->loginCompte($identifiant, $password);
        if($log == false) {
            $alert = "Pseudo/email ou mot de passe incorrect.";
        } else {
            header('Location:'.$link['accueil']);
        }   
    }
?>