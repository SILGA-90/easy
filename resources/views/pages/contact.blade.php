
@extends('layout.public_user')

    @section('page-title')
        Contact
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
                        <a class="nav-link mb-sm-3 mb-md-0" href="{{ route('page') }}" id="bienvenue"><span class="fas fa-tachometer-alt mr-2"></span>Bienvenue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 navme" href="#"><span class="far fa-sun mr-2"></span>A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 navme active" href="{{route('contact')}}"><span class="far fa-comments mr-2"></span>Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 navme" href="{{ route('login') }}"><span class="far fa-user-circle mr-2"></span>Login</a>
                    </li>   
                </ul>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-10">
             @include('flash::message')
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
            <div class=" mt-4 col-md-10 ">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-12 col-lg-12 mb-2">
                            <!-- Contact Card -->
                            <div class="card bg-primary shadow-soft border-light p-2 p-md-3 p-lg-5">
                                <div class="card-header">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="shadow-inset p-4 mb-5 rounded">
                                                <iframe class="map rounded" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1991027.104472577!2d-0.2274152968750176!3d12.92540021679353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbf!4v1623691381560!5m2!1sfr!2sbf"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-8 text-center mb-5">
                                            <h1 class="display-2 mb-3 navme">Contactez-nous !</h1>
                                            <p class="lead"> Vous avez des suggestions à nous soumettre ? Vous avez une/des plainte(s) ? ou simplement avez-vous des questions ? Laissez-nous un message. Nous vous répondrons dans les 24h qui suivent.</p>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4 col-lg-4 text-center">
                                            <!-- Visit Box -->
                                            <div class="icon-box mb-4">
                                                <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                                    <span class="fas fa-map-marker-alt bienvenue"></span>
                                                </div>
                                                <h2 class="h5 icon-box-title bienvenue">Rendez-nous visite</h2>
                                                <span>
                                                    Secteur 26
                                                    <br>
                                                    Ouagadougou, BF
                                                </span>
                                            </div>
                                            <!-- End of Visit Box -->
                                        </div>
                                        <div class="col-md-4 col-lg-4 text-center">
                                            <!-- Call Box -->
                                            <div class="icon-box mb-4">
                                                <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                                    <span class="fas fa-headphones-alt bienvenue"></span>
                                                </div>
                                                <h2 class="h5 icon-box-title bienvenue">Appelez-nous</h2>
                                                <span>+22656234567</span>
                                                <div class="text-small text-gray">
                                                    24h/24 | 7j/7
                                                </div>
                                            </div>
                                            <!-- End of Call Box -->
                                        </div>
                                        <div class="col-md-4 col-lg-4 text-center">
                                            <!-- Email Box -->
                                            <div class="icon-box mb-4">
                                                <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                                    <span class="far fa-paper-plane bienvenue"></span>
                                                </div>
                                                <h2 class="h5 icon-box-title bienvenue">Laissez-nous un message</h2>
                                                <a href="#">example@company.com</a>
                                            </div>
                                            <!-- End of Email Box -->
                                        </div>
                                    </div>
                                </div>
                                <form class="col-12 col-md-8 mx-auto" method="POST" action="{{route('contact-us')}}">
                                    @csrf
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="nameInputIcon2">Votre nom</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="far fa-user-circle"></span></span>
                                            </div>
                                            <input class="form-control @error('name') is-invalid @enderror" id="nameInputIcon2" placeholder="e.g. SILGA Souleymane" type="text" aria-label="contact name input" name="name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="emailInputIcon2">Votre email</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="far fa-envelope"></span></span>
                                            </div>
                                            <input class="form-control @error('email') is-invalid @enderror" id="emailInputIcon2" placeholder="example@company.com" type="email" aria-label="contact email input" name="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Form -->
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="emailInputIcon2">Sujet:</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="far fa-envelope"></span></span>
                                            </div>
                                            <input class="form-control @error('subject') is-invalid @enderror" id="emailInputIcon2" placeholder="De quoi s'agit-il ?" type="text" aria-label="contact subject input" name="subject">
                                            @error('subject')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea2">Votre message</label>
                                        <textarea class="form-control  @error('message') is-invalid @enderror" placeholder="Entrer votre message..." id="exampleFormControlTextarea2" rows="4" name="message"></textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- End of Form -->
                                
                                <div class="card-footer px-0 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                                </div>
                                </form>
                            </div>
                            <!-- End of Contact Card -->
                        </div>
                    </div>
                </div>
            </div>
    @endsection
