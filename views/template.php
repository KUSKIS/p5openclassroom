<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/uanhlhi99qxpp27vqve0o6abe0iulcyje5ybsdh0tbbihv82/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="public/index.css">
</head>

<body>

    <style>
        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 100vh;
            }
        }

        .top-nav-collapse {
            background-color: #333333 !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }

        @media (max-width: 991px) {
            .navbar:not(.top-nav-collapse) {
                background: #333333 !important;
            }
        }

        h1 {
            letter-spacing: 20px;
            font-size: 70px;
        }

        h5 {
            letter-spacing: 3px;
        }

        .hr-light {
            border-top: 3px solid #fff;
            width: auto;

        }
    </style>


    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><strong>EQUUS</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Connexion/Inscription</a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold white-text">Connexion</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <form action="" method="post">
                            <div class="md-form mb-5">
                                <i class="fas fa-horse-head prefix white-text"></i>
                                <input type="text" name="pseudo" id="defaultForm-email" class="form-control validate" required>
                                <label data-error="" data-success="" for="defaultForm-text">Pseudo</label>
                            </div>
                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix white-text"></i>
                                <input type="password" name="pass" id="defaultForm-pass" class="form-control validate" required>
                                <label data-error="" data-success="" for="defaultForm-pass">Mot de Passe</label>
                            </div><br>
                            <div class="modal-footer d-flex justify-content-center"><br>
                                <button type="submit" class="btn btn-outline-white wow fadeInDown">Se connecter</button>
                            </div>
                            <div class="modal-footer d-flex justify-content-center"><br>
                                <button type="submit" class="btn btn-outline-white wow fadeInDown">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('public/pictures/saddle.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pt-2 mb-4 white-text text-center">
                            <h1 class="animation" class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><br><span class="word">PASSIONNEMENT CHEVAL</span><br><span class="word">PASSIONNEMENT E Q U U S</span></h1>
                            <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                            <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Partagez votre passion</strong></h5>
                            <a class="btn btn-outline-white wow fadeInDown" data-toggle="modal" data-wow-delay="0.4s" data-target="#modalLoginForm">Inscription</a>
                            <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?= $content ?>

    <footer class="page-footer font-small darken-3 pt-4">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script type="text/javascript" src="public/anime.js"></script>


</body>

</html>