<div class="container">
    <div class="row">
        <div class="col-md-9">
            <!-- Image Field -->
            <div>
                <p><img src="{{asset('bus_images/' .$bus->image)}}" alt="" class="img-fluid"></p>
            </div>
        </div>
        <div class="col-md-3">
            <!-- Bus Marque Field -->
            <div class="col-sm-12">
                {!! Form::label('bus_marque', 'Marque du bus:') !!}
                <input type="" readonly value="{{ $bus->bus_marque }}" class="form-control border-0 ">
            </div>

            <!-- Bus Number Field -->
            <div class="col-sm-12">
                {!! Form::label('bus_number', 'Numéro du bus:') !!}
                <input type="" readonly value="{{ $bus->bus_number }}" class="form-control border-0 ">
            </div>

            <!-- Bus Type Field -->
            <div class="col-sm-12">
                {!! Form::label('bus_type', 'Type du bus:') !!}
                <input type="" readonly value="{{ $bus->bus_type }}" class="form-control border-0 ">
            </div>

            <!-- Total Place Field -->
            <div class="col-sm-12">
                {!! Form::label('total_place', 'Capacité du bus:') !!}
                <input type="" readonly value="{{ $bus->total_place }} places" class="form-control border-0 ">
            </div>

            <!-- Bus Statut Field -->
            <div class="col-sm-12">
                {!! Form::label('bus_statut', 'Statut du bus:') !!}
                <p>
                    @if ( $bus->bus_statut == 1)
                        <span class="btn btn-success">Actif</span>
                    @else
                        <span class="btn btn-danger">Inactif</span>
                    @endif
                </p>
            </div>

            <!-- Chauf Id Field -->
            <div class="col-sm-12">
                {!! Form::label('chauf_id', 'Nom du chauffeur:') !!}
                <input type="" readonly value="{{optional($bus->chauffeurs)->lastname}} {{optional($bus->chauffeurs)->firstname}}" class="form-control border-0 ">
            </div>
        </div>
    </div>
</div>

