<?php if(isset($alert)) { ?>
    <div class="row alert-pos">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="alert alert-danger center .alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span class="glyphicon glyphicon-alert position-icon"></span> <?= $alert; ?>
            </div>
        </div>
    </div>
<?php } else if(isset($sucess)) { ?>
    <div class="row alert-pos">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="alert alert-success center .alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span class="glyphicon glyphicon-alert position-icon"></span> <?= $sucess; ?>
            </div>
        </div>
    </div>
<?php }?>