<?php
    function chargerClasse($classe) {
        require 'models/'.$classe.'.php';
    }
    spl_autoload_register('chargerClasse');

    if(isset($_SESSION['pseudo'])) {
        
        $profilManager = new ProfilManager(getDb());
        $myProfil = $profilManager->get($_SESSION['pseudo']);
        
        $pseudo = $_SESSION['pseudo'];
    }
?>