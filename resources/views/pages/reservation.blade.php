@extends('layout.public_user')

    @section('page-title')
        Réservation
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
                        <a class="nav-link mb-sm-3 mb-md-0 active bienvenue" href="{{ route('page') }}"><span class="fas fa-tachometer-alt mr-2"></span>Bienvenue</a>
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
                    <img src="assets/images/001.png" alt="" class="fluid">
                </div>
            </div>
            <!-- End of Carousel -->
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-10 ">
            <!-- Tab Nav -->
            <div class="nav-wrapper position-relative mb-4">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active bienvenue" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fas fa-tint"></i>Votre trajet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 bienvenue" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-bug"></i>Vos préférences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 bienvenue" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fas fa-user-astronaut"></i>Paiement</a>
                    </li>
                </ul>
            </div>
            <!-- End of Tab Nav -->
            <!-- Tab Content -->
            <div class="card shadow-inset bg-primary border-light p-4 rounded">
                <div class="card-body p-0">
                    <div class="tab-content" id="tabcontent2">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                            
                            <div class="card bg-primary shadow-soft border-light px-4 py-1 m-3">
                                <div class="card-body text-center">
                                    <h5 class="mb-3 bienvenue">Choisissez votre itinéraire</h5>
                                    <hr id="hrr">
                                </div>
                                    <form name="bussearch" id="bussearch" method="POST" action="{{route('reservation')}}" onsubmit="return validateBusForm(this)" class="col-md-12">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputIcon2">Ville d'origine:</label>
                                                <div class="input-group mb-4">
                                                    <input class="form-control" id="exampleInputIcon2" placeholder="D'où quittez-vous ?" aria-label="Input group" type="text" name="dest_from">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><span class="fas fa-search"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputIcon2">Destination:</label>
                                                <div class="input-group mb-4">
                                                    <input class="form-control" id="exampleInputIcon2" placeholder="Où allez-vous ?" aria-label="Input group" type="text" name="dest_to">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><span class="fas fa-search"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="h6" for="exampleInputDate1">Date aller:</label>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                                    </div>
                                                    <input name="doj" class="form-control datepicker" id="exampleInputDate1" placeholder="date du voyage" type="text" aria-label="Date with icon left " data-date-format="dd/mm/yyyy">
                                                </div>
                                                {{-- <button class="btn btn-block btn-primary">Soumettre</button> --}}
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="h6" for="exampleInputDate1">Date retour:</label>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                                    </div>
                                                    <input name="dor" class="form-control datepicker" id="exampleInputDate1" placeholder="date du voyage" type="text" aria-label="Date with icon left " data-date-format="dd/mm/yyyy">
                                                </div>
                                                
                                            </div>
                                            <button class="btn btn-block btn-primary">Soumettre</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-md-12">
                                    <div class="table-responsive-sm shadow-soft rounded">
                                        <table class="table table-striped">      
                                            <tr>
                                                <th class="border-0" scope="col" id="class2">Compagnie</th>
                                                <th class="border-0" scope="col" id="teacher2">Départ</th>
                                                <th class="border-0" scope="col" id="males2">Arrivée</th>
                                                <th class="border-0" scope="col" id="females2">heure de départ</th>
                                                <th class="border-0" scope="col" id="females2">Type de bus</th>
                                                <th class="border-0" scope="col" id="females2">Action</th>
                                            </tr>
                                            
                                            {{-- @foreach ($result as $itineraires) --}}
                                            <tr>
                                                <th scope="row" id="firstyear2" rowspan="1">Rahimo</th>
                                                <td scope="row" id="Bolter2" >Ouagadougou</td>
                                                <td headers="firstyear2 Bolter2 males2">Ouahigouya</td>
                                                <td headers="firstyear2 Bolter2 females2">15h30</td>
                                                <td headers="firstyear2 Bolter2 males2">Mini-car</td>
                                                <td headers="firstyear2 Bolter2 females2">
                                                    <div class="btn-group mr-2 mb-2">
                                                        <button type="button" class="btn btn-primary text-success">Réserver</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fas fa-angle-down dropdown-arrow"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item text-success" href="#">Réserver</a>
                                                            <a class="dropdown-item text-danger" href="#">Annuler réservation</a>
                                                            <a class="dropdown-item text-warning" href="#">Enregistrer trajet</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">PLus de détails</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" id="secondyear2" rowspan="1">Elitis express</th>
                                                <th scope="row" id="Lam2" headers="secondyear2 teacher2">Ouagadougou</th>
                                                <td headers="secondyear2 Lam2 males2">Ouahigouya</td>
                                                <td headers="secondyear2 Lam2 females2">17h00</td>
                                                 <td headers="firstyear2 Bolter2 males2">Long car</td>
                                                <td headers="firstyear2 Bolter2 females2">
                                                    <div class="btn-group mr-2 mb-2">
                                                        <button type="button" class="btn btn-primary text-success">Réserver</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fas fa-angle-down dropdown-arrow"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item text-success" href="#">Réserver</a>
                                                            <a class="dropdown-item text-danger" href="#">Annuler réservation</a>
                                                            <a class="dropdown-item text-warning" href="#">Enregistrer trajet</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">PLus de détails</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- @endforeach --}}
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="alert alert-success shadow-inset" role="alert">
                                        <iframe class="map rounded" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1991027.104472577!2d-0.2274152968750176!3d12.92540021679353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbf!4v1623691381560!5m2!1sfr!2sbf"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                            
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection