
@extends('layout.public_user')

@section('page-title')
    Authentification
@endsection
@section('content')
    <div class="col-md-2 ico">
        <div class="icon shadow-soft border border-light rounded-circle mt-2" > 
            <img class="img-fluid" src="./assets/images/monlogo.png" alt="Logo dark">
        </div>
    </div>
    <div class="col-md-10">
        <div class="nav-wrapper mt-5">
            <ul class="nav nav-pills rounded nav-fill flex-column flex-sm-row">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 "  href="{{ route('page') }}" id="bienvenue"><span class="fas fa-tachometer-alt mr-2"></span>Bienvenue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 navme"  href="#"><span class="far fa-sun mr-2"></span>A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 navme"  href="{{route('contact')}}"><span class="far fa-comments mr-2"></span>Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 navme active"  href="{{ route('login') }}"><span class="far fa-user-circle mr-2"></span>Login</a>
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
        <div class="col-md-12 mt-4">
            <div class="alert shadow-inset" role="alert">
                <div class="card bg-primary shadow-soft border-light mb-2 mt-2">
                    <div class="card-body text-center text-md-left">
                        <div class=" container container0">
                            <img src="assets/images/undraw_secure_login_pdn4.svg" class="img img-1 img-fluid" alt="">
                            <img src="assets/images/undraw_Selecting_team_re_ndkb.svg" class="img img-2 img-fluid" alt="">
                            <div class="login-signup-box login loginSignUp" id="loginSignUp">
                                <div class="inner-box" id="signIn">
                                    <button class="toggle-button btn btn-primary" id="signUpBtn">
                                        <i class="fa fa-angle-left mt-1"></i>
                                        <span>S'inscrire</span>
                                    </button>
                                    <form action="{{ url('/login') }}" method="POST">
                                        @csrf
                                    <div style="width: 100%;"> 
                                        <p>Authentification</p>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                                </div>
                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputIcon3" placeholder="example@company.com" aria-label="email adress">
                                                @error('email')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                                </div>
                                                <input class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" type="password" aria-label="email adress" name="password">
                                                
                                                @error('password')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                                <div id="toggle" onclick="showHide();">
                                                    <img src="{{asset('assets/images/show.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="button-box signInBtn-Box">
                                            <button class="btn btn-block btn-primary">Connexion</button>
                                        </div>

                                        <div class="d-block d-sm-flex justify-content-between align-items-center mt-3">
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                                <label class="form-check-label" for="defaultCheck5">
                                                  Se souvenir de moi
                                                </label>
                                            </div>
                                            <div><a href="{{ route('password.request') }}" class="small text-right">Mot de passe oublié ?</a></div>
                                        </div> 
                                    </div>
                                    </form>
                                </div>
                                <div class="inner-box" id="signUp" style="transform: scale(0);">
                                    <button class="toggle-button btn btn-primary" id="signInBtn">
                                        <i class="fa fa-angle-right mt-1"></i>
                                        <span>Connexion</span>
                                    </button>
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                    <div style="width: 100%;">
                                        <p>S'inscrire</p>

                                        <!-- Form -->
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><span class="fas fa-user"></span></span>
                                                </div>
                                                <input type="text"
                                                    name="lastname"
                                                    class="form-control @error('lastname') is-invalid @enderror"
                                                    value="{{ old('lastname') }}"
                                                    placeholder="Entrer votre nom">
                                                @error('lastname')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><span class="fas fa-user"></span></span>
                                                </div>
                                                <input type="text"
                                                    name="firstname"
                                                    class="form-control @error('firstname') is-invalid @enderror"
                                                    value="{{ old('firstname') }}"
                                                    placeholder="Entrer votre prénom">
                                                @error('firstname')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                                </div>
                                                <input type="email"
                                                    name="email"
                                                    value="{{ old('email') }}"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Email">
                                                @error('email')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- End of Form -->
                                        <div class="form-group">
                                            <!-- Form -->
                                            <div class="form-group">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                                    </div>
                                                    <input type="password"
                                                        name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="Mot de passe">
                                                    @error('password')
                                                    <span class="error invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- End of Form -->
                                            <!-- Form -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                                    </div>
                                                <input type="password"
                                                        name="password_confirmation"
                                                        class="form-control"
                                                        placeholder="Confirmer mot de passe">
                                                </div>
                                            </div>
                                            <!-- End of Form -->
                                            {{-- <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                                <label class="form-check-label" for="defaultCheck6">
                                                    I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div> --}}
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Inscription</button>   
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('third_party_scripts')
    <script type="text/javascript">
        const password = document.getElementById('password');
        const toggle = document.getElementById('toggle');

        function showHide() {
            if (password.type === 'password') {
                password.setAttribute('type','text');
                toggle.classList.add('hide')
            }
            else {
                password.setAttribute('type','password');
                toggle.classList.remove('hide');
            }
        }
    </script>
@endsection