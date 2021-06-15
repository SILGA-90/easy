<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <!-- Lastname Field -->
                <div class="col-sm-6">
                    {!! Form::label('lastname', 'Nom:') !!}
                    <p>{{ $chauffeurs->lastname }}</p>
                </div>
                <!-- Firstname Field -->
                <div class="col-sm-6">
                    {!! Form::label('firstname', 'Prénom:') !!}
                    <p>{{ $chauffeurs->firstname }}</p>
                </div>

                <!-- Old Field -->
                <div class="col-sm-6">
                    {!! Form::label('old', 'Âge:') !!}
                    <p>{{ $chauffeurs->old }} ans</p>
                </div>

                <!-- Gender Field -->
                <div class="col-sm-6">
                    {!! Form::label('gender', 'Genre:') !!}
                    <p>
                        @if ($chauffeurs->gender == 0)
                            <span>Masculin</span>
                        @else
                            <span>Féminin</span>
                        @endif
                    </p>
                </div>

                <!-- Email Field -->
                <div class="col-sm-6">
                    {!! Form::label('email', 'Email:') !!}
                    <p>{{ $chauffeurs->email }}</p>
                </div>

                <!-- Phone Field -->
                <div class="col-sm-6">
                    {!! Form::label('phone', 'Téléphone:') !!}
                    <p>{{ $chauffeurs->phone }}</p>
                </div>

                <!-- Nationality Field -->
                <div class="col-sm-6">
                    {!! Form::label('nationality', 'Nationalité:') !!}
                    <p>{{ $chauffeurs->nationality }}</p>
                </div>

                <!-- No Cnib Field -->
                <div class="col-sm-6">
                    {!! Form::label('no_CNIB', 'Numéro CNIB:') !!}
                    <p>{{ $chauffeurs->no_CNIB }}</p>
                </div>

                <!-- Statut Field -->
                <div class="col-sm-6">
                    {!! Form::label('statut', 'Statut:') !!}
                    <p> 
                        @if ($chauffeurs->statut == 1) 
                            <span class="btn btn-success">Actif</span>
                        @else
                            <span class="btn btn-danger">Inactif</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <!-- Image Field -->
        <div class="col-md-6">
            <div class=" clearfix float-right">
                <div class="float-right">
                    <p><img src="{{asset('chauffeur_images/' .$chauffeurs->image)}}" alt="" class="rounded-circle" min-width="160" min-height="100" ></p>
                </div>
            </div>
        </div>
   </div>
</div>

