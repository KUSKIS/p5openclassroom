<?php $this->title = "knowledgePost"; ?>

<div class="containwritten" class="row">
    <div class="col-md-8 col-lg-12 mx-auto">
        <p><a class="nav-link" href="index.php">
                <i class="fas fa-arrow-left"></i> Retour à l'accueil</a></p>
        <div class="container my-5">
            <section>
                <div class="card card-list">
                    <div class="card-header white d-flex justify-content-between align-items-center py-3">
                        <div class="d-flex justify-content-start align-items-center">
                            <img src="" class="z-depth-1 rounded-circle" width="45" alt="avatar image">
                            <div class="d-flex flex-column pl-3">
                                <a href="Home" class="font-weight-normal mb-0">Equus Accueil</a>
                                <p class="small text-muted mb-0">Edité le : <?= $knowledge['know_date'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2><?= $knowledge['know_title'] ?></h2><br>
                        <p><?= $knowledge['know_content'] ?></p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="d-flex flex-row">
                            </div>
                            <div class="d-flex flex-column pl-3">
                                <a href="" class="btn btn-info btn-sm py-1 px-2 m-0 mr-2"><i class="far fa-comment pr-1"></i> je commente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<br>