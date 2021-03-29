<?php $this->title = "Equus Home Page"; ?>

<div class="d-flex">
    <div class="containposts col-9">
        <div class="posts">
            <div class="container">
                <section class="text-center">
                    <h2 class="font-weight-bold mb-5">Partage de connaissances</h2>
                    <div class="row">
                        <?php foreach ($knowledge as $knowledge) : ?>
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
                                <div class="card hoverable">
                                    <img class="card-img-top" src="public/pictures/horse.jpg" alt="knowledge img">
                                    <div class="card-body">
                                        <p class="card-title text-muted text-uppercase font-small mt-1 mb-3"><?= $knowledge->know_title() ?></p>
                                        <p class="mb-2"><?= $knowledge->know_content() ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                </section>
            </div>
        </div>
        <br>
        <br>
        <hr>

        <div class="posts">
            <div class="container">
                <section class="text-center">
                    <h2 class="font-weight-bold mb-5">Les services</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                            <div class="card hoverable">
                                <img class="card-img-top" src="public/pictures/horse.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">News</p>
                                    <p class="mb-2">We relocated our office to a new designed garage</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                            <div class="card hoverable">
                                <img class="card-img-top" src="public/pictures/horseshoe.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Marketing</p>
                                    <p class="mb-2">Top five brilliant content marketing strategies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-0">
                            <div class="card hoverable">
                                <img class="card-img-top" src="public/pictures/horse.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Design</p>
                                    <p class="mb-2">Best practices for minimalist design with example</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="article col-3">
        <div class="container sm my-5 py-5 z-depth-1">
            <section class="px-md-2 mx-md-2 dark-black-text text-center text-lg-left">
                <div class="">
                    <div class="">
                        <div class="embed-responsive embed-responsive-16by9 mb-4">
                            <iframe class="embed-responsive-item" src="https://youtu.be/UpCHufqos9I" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/UpCHufqos9I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-0 mb-4 mb-lg-0">
                        <h3 class="font-weight-bold">Partagez vos moments</h3>
                        <p class="font-weight-bold">That's a very nice subheading</p>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                            molestiae
                            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>
                        <a class="font-weight-bold" href="#">Learn more<i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="">
                        <div class="embed-responsive embed-responsive-16by9 mb-4">
                            <iframe class="embed-responsive-item" src="https://youtu.be/UpCHufqos9I" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/UpCHufqos9I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-0 mb-4 mb-lg-0">
                        <h3 class="font-weight-bold">Partagez vos moments</h3>
                        <p class="font-weight-bold">That's a very nice subheading</p>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                            molestiae
                            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>
                        <a class="font-weight-bold" href="#">Learn more<i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>