<!-- CONTENU -->
<section class="bg-light">		
    <div class="row paddingtop">
        <?php if(!empty($avisList)): ?>
        <div class="col-md-12"><h1 class="text-center">Avis sur la balade "<?= $visite[$_GET['name']];?>"</h1></div>
        <?php endif;?>
    </div>
    

    <!-- 1 COMMENTAIRE -->
    <?php
    foreach($avisList as $key => $avis):
        $user = $profilManager->get(intval($avis->getId_profil()));

    ?>
    <div class="row paddingtop border-top border-bottom">
        <div class="col-md-3">
            <p class="font-weight-bold titrecommentaire text-info">
                Par <?php
                if(isset($_SESSION['pseudo']) == $user->getPseudo()):
                    echo "Moi";
                else:
                    echo $user->getPseudo();
                endif;?>
                <br>Le <?= date("d-m-Y", strtotime($avis->getDate_time())); ?></p>
        </div>
        <div class="col-md-9">
            <p class="font-weight-bold titrecommentaire"><?= $avis->getTitle(); ?></p>
            <p><?= $avis->getMessage(); ?></p>
            <?php
            if(isset($_SESSION['pseudo']) AND $myProfil->getRole() == $role['admin']):?>
                <button id="delete" type="button" class="btn btn-outline-danger marginbottom10px" data-id-avis=<?= $avis->getId(); ?>>
                    Supprimer
                </button>
            <?php endif; ?>
        </div>
    </div>
    <?php
    endforeach;
    ?>
</section>