<section class="bg-light">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Espace administration</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-1">
            <div class="row">
                <p class="font-weight-bold">Nombre d'inscrit :
                    <?= $userCount;?>
                </p>
            </div>
            <div class="row">
                <p class="font-weight-bold">Date dernier message :
                    <?= date("d-m-Y à H:i:s", strtotime($dateLastMessage)); ?>
                </p>
            </div>
            <div class="row"><p class="font-weight-bold font-italic">
                    Pour modérer les avis de la page balade, rendez-vous sur la
                    <a href=<?= $link['visite'];?>>page</a> concernée</p>
            </div>
        </div>
    </div>
</section>