@extends('layout.public_user')

    @section('page-title')
        Bienvenue
    @endsection

    @section('content') 
            <div class="col-md-2 ico">
                <div class="icon shadow-soft border border-light rounded-circle mt-2" > 
                    <img class="img-fluid" src="./assets/images/monlogo.png" alt="Logo dark">
                    <a href="#top"><i class="arrow fas fa-arrow-alt-circle-up fa-2x"></i>
                </div>
            </div>
            <div class="col-md-10">
                <div class="nav-wrapper mt-5">
                    <ul class="nav nav-pills rounded nav-fill flex-column flex-sm-row">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" href="{{ route('page') }}" id="bienvenue"><span class="fas fa-tachometer-alt mr-2"></span>Bienvenue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 navme" href="#"><span class="far fa-sun mr-2"></span>A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 navme" href="{{route('contact')}}"><span class="far fa-comments mr-2"></span>Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 navme" href="{{ route('login') }}"><span class="far fa-user-circle mr-2"></span>Login</a>
                        </li>   
                    </ul>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <!-- Carousel -->
                <div id="Carousel1" class="carousel slide shadow-soft border border-light p-2 rounded" data-ride="carousel">
                    <div class="carousel-inner rounded ">
                        <div id="slider" class="nivoSlider">

                            <img src="assets/images/slideshow/01.jpg" data-thumb="assets/images/slideshow/01.jpg" alt="" />

                            <img src="assets/images/slideshow/02.jpg" data-thumb="assets/images/slideshow/02.jpg" alt="" />
                            {{-- title="This is an example of a caption"  --}}

                            <img src="assets/images/slideshow/03.jpg" data-thumb="assets/images/slideshow/03.jpg" alt="" data-transition="slideInLeft" />

                            <img src="assets/images/slideshow/04.jpg" data-thumb="assets/images/slideshow/04.jpg" alt="" />

                        </div>
                    </div>
                </div>
                <!-- End of Carousel -->
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="card bg-primary shadow-soft border-light px-4 py-1 mb-4 mt-4">
                    <div class="card-body text-center text-md-left">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2 class="mb-3">R??servez maintenant !</h2>
                                <p class="mb-4">
                                    Easy R??servation, toutes les commodit??s du voyage en 3 click. Laissez vous tenter par l'exp??rience Easy!
                                </p>
                                <a href="{{ route('reservation') }}" class="btn btn-primary">
                                    <span class="mr-1 reserver">
                                        <i class="fas fa-file-invoice"></i>
                                         R??server
                                    </span>    
                                </a>
                            </div>
                            <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right">
                                <img src="assets/images/bus.png" alt="bus" class="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="card bg-primary shadow-inset border-light p-3">
                    <!-- Content -->
                    <div>
                        <div class="card bg-primary shadow-soft border-light mb-4">
                            <div class="card-body px-5 py-3 text-center text-md-left">
                                <div class="row align-items-center">
                                    <div class="col-md-12 text-center">
                                        <h2 class="mb-3 reserver">Comment r??server un billet de bus ?</h2>
                                        <p class="mb-0"> 
                                            Les modes de r??servation d???un billet de bus se multiplient pour vous offrir toujours plus de choix. C???est bien, mais ?? force il n???est pas toujours simple de s???y retrouver ! Alors Easy Reservation a pens?? ?? vous avec ce guide de r??servation pour vous aider ?? savoir comment r??server un billet de bus simplement. Ce guide vous explique ??tape par ??tape comment r??server en ligne.
                                        </p>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="alert alert-success shadow-inset" role="alert">
                                            <span class="alert-inner--icon icon-lg"><span class="far fa-thumbs-up"></span></span>
                                            <span class="alert-heading">Etape 1</span>
                                            <h5 class="text-success">choisissez votre voyage en bus en 3 clics :</h5>
                                            <p>
                                                <i class="fas fa-arrow-alt-circle-right"></i> Renseignez les lieux et dates de d??part et d'arriv??e <br>
                                                <i class="fas fa-arrow-alt-circle-right"></i> Cliquez sur ?? Soumettre ?? pour trouver votre trajet au meilleur prix. <br>
                                            </p>
                                            <hr>
                                            <p class="mb-0">Une fois que vous avez trouv?? votre trajet de car, il vous suffit de cliquer sur <strong>?? R??server ??</strong> pour ajouter le voyage ?? votre panier.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="alert alert-success shadow-inset" role="alert">
                                            <span class="alert-inner--icon icon-lg"><span class="far fa-thumbs-up"></span></span>
                                            <span class="alert-heading">Etape 2</span>
                                            <h5 class="text-success">choisissez vos pr??f??rences :</h5>
                                            <p>
                                                <i class="fas fa-arrow-alt-circle-right"></i> Choisissez le si??ge passager qui vous convient<br>
                                                <i class="fas fa-arrow-alt-circle-right"></i> Cliquez sur suivant 
                                            </p>
                                            <hr>
                                            <p class="mb-0">Vous pouvez choisir le nombre de si??ges que vous voulez simplement en cliquant sur le ou les si??ges voulus.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="alert alert-success shadow-inset" role="alert">
                                            <span class="alert-inner--icon icon-lg"><span class="far fa-thumbs-up"></span></span>
                                            <span class="alert-heading">Etape 3</span>
                                            <h5 class="text-success">payez votre billet de bus par:</h5>
                                            <p>
                                                <i class="fas fa-arrow-alt-circle-right"></i> Orange Money <br>
                                                <i class="fas fa-arrow-alt-circle-right"></i> Liguidi Cash
                                            </p>
                                            <hr>
                                            <p class="mb-0">
                                                Une fois votre moyen de paiement s??lectionn??, remplissez les informations demand??es et cliquez sur ?? Proc??der au paiement ??. <br>
                                                Une fois la r??servation de votre billet effectu??e, vous recevrez une confirmation par mail et par sms avec un r??capitulatif complet.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-4 d1">
                            <div class="card bg-primary shadow-soft border-light ">
                                <div class="fake px-lg-6 px-md-3 py-3 ">
                                    <div class="card-head text-center p-4">
                                        <img src="/assets/images/Clock_50px.png" class="card-icon" >
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <h3 class="h5 mb-2"><i class="fas fa-info-circle"> D??lais de r??servation</i></h3>
                                    <p class="card-text">
                                        Vous pouvez r??server les billets 30 jours en avance. <br>
                                        Vous pouvez annuler les billets 24h avant la date pr??vue pour le voyage. <br> 
                                        Avec un remboursement de 90% dans les 24h suivant l'annulation.
                                    </p>
                                    <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3 spa">
                                        <span><i class="fas fa-info"> Lire nos conditions</i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d1">
                            <div class="card bg-primary shadow-soft border-light">
                                <div class="fake px-lg-6 py-3">
                                    <div class="card-head text-center p-4">
                                        <img src="/assets/images/Speech Bubble_52px.png" class="card-icon" >
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <h3 class="h5 mb-2"><i class="fas fa-info-circle"> Evaluer et sugg??rer</i></h3>
                                    <p class="card-text">
                                        Vous pouvez commenter / envoyer vos questions et suggestions ?? nos contacts <br>
                                        Vous pouvez ??galement ??valuer les services d'une compagnie de transport et laisser une plainte.
                                    </p>
                                    <a href="#" target="_blank" class="icon icon-xs icon-slack spa">
                                        <span><i class="fas fa-info"> Vos suggestions</i></span>
                                    </a>
                                    <br id="brlast">
                                    <a href="#" target="_blank" class="icon icon-xs icon-slack spa">
                                        <span><i class="fas fa-info"> Evaluation / plaintes</i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d1">
                            <div class="card bg-primary shadow-soft border-light">
                                <div class="fake px-lg-6 py-3">
                                    <div class="card-head text-center p-4">
                                        <img src="/assets/images/Checked User Male_52px.png" class="card-icon" >
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <h3 class="h5 mb-2"><i class="fas fa-info-circle">Ouverture de compte</i></h3>
                                    <p class="card-text">
                                        Vous pouvez cr??er votre compte personnel et consulter l'historique de vos r??servations. <br>
                                        Vous pouvez ??galement b??n??ficier des offres promotionnelles des diff??rentes compagnies.
                                    </p>
                                    <a href="#" target="_blank" class="icon icon-xs icon-slack spa">
                                        <span><i class="fas fa-info"> Cr????r un compte</i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>            
            </div>
    @endsection
    
