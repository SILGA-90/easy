<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Comp Id Field -->
            <div class="col-sm-12">
                {!! Form::label('comp_id', 'Coompagnie:') !!}
                <input type="text" readonly value="{{optional($itineraires->compagnies)->comp_name}}" class="form-control">
            </div>
            <!-- Day Id Field -->
            <div class="col-sm-12">
                {!! Form::label('day_id', 'Jour de départ:') !!}
                <input type="text" readonly value="{{optional($itineraires->days)->jour}}" class="form-control">
            </div>
            <!-- Departcity Id Field -->
            <div class="col-sm-12">
                {!! Form::label('departcity_id', 'Lieu de départ:') !!}
                <input type="text" readonly value="{{optional($itineraires->departcity)->dcity_name}}" class="form-control">
            </div>

            <!-- Arrivalcity Id Field -->
            <div class="col-sm-12">
                {!! Form::label('arrivalcity_id', 'Lieu d\'arrivée:') !!}
                <input type="text" readonly value="{{optional($itineraires->arrivalcity)->acity_name}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <!-- Time Id Field -->
            <div class="col-sm-12">
                {!! Form::label('time_id', 'Heure de départ:') !!}
                <input type="text" readonly value="{{optional($itineraires->times)->departtime}}" class="form-control">
            </div>
            <!-- Bus Id Field -->
            <div class="col-sm-12">
                {!! Form::label('bus_id', 'Bus attribué:') !!}
                <input type="text" readonly value="{{optional($itineraires->bus)->bus_number}} {{optional($itineraires->bus)->bus_type}} {{optional($itineraires->bus)->bus_marque}}" class="form-control">
            </div>
            <!-- Price Id Field -->
            <div class="col-sm-12">
                {!! Form::label('price_id', 'Prix:') !!}
                <input type="text" readonly value="{{optional($itineraires->prices)->price}} fcfa" class="form-control">
            </div>
            <!-- It Statut Field -->
            <div class="col-sm-12">
                {!! Form::label('it_statut', 'Statut:') !!}
                <p>
                    @if ($itineraires->it_statut == 1)
                        <span class="btn  btn-success">Actif</span>
                    @else
                        <span class="btn  btn-danger">Inactif</span>
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
