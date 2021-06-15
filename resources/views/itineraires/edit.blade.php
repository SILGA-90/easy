@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fas fa-edit"> Modifier Détail du trajet</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($itineraires, ['route' => ['itineraires.update', $itineraires->it_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('itineraires.fields') --}}

                    <!-- Comp Id Field -->
                    <div class="form-group col-md-12">
                        {!! Form::label('comp_id', 'Compagnie:') !!}
                        <select name="comp_id" class="form-control">
                            <option selected value="{{$itineraires->comp_id}}">{{optional($itineraires->compagnies)->comp_name}}</option>
                            <option></option>
                            @foreach($compagnies as $compagnie)
                                <option value="{{$compagnie->comp_id}}">{{$compagnie->comp_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Departcity Id Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('departcity_id', 'Lieu de départ:') !!}
                        <select name="departcity_id" class="form-control">
                            <option selected value="{{$itineraires->departcity_id}}">{{optional($itineraires->departcity)->dcity_name}}</option>
                            @foreach($departcity as $departcit)
                                <option value="{{$departcit->departcity_id}}">{{$departcit->dcity_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Arrivalcity Id Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('arrivalcity_id', 'Lieu d\'arrivée:') !!}
                        <select name="arrivalcity_id" class="form-control">
                            <option selected value="{{$itineraires->arrivalcity_id}}">{{optional($itineraires->arrivalcity)->acity_name}}</option>
                            @foreach($arrivalcity as $arrivalcit)
                                <option value="{{$arrivalcit->arrivalcity_id}}">{{$arrivalcit->acity_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Day Id Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('day_id', 'Jour de départ:') !!}
                        <select name="day_id" class="form-control">
                            <option selected value="{{$itineraires->day_id}}">{{optional($itineraires->days)->jour->format('D d M Y')}}</option>
                            @foreach($days as $day)
                                <option value="{{$day->day_id}}">{{$day->jour->format('D d M Y')}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Time Id Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('time_id', 'Heure de départ:') !!}
                        <select name="time_id" class="form-control">
                            <option selected value="{{$itineraires->time_id}}">{{optional($itineraires->times)->departtime}}</option>
                            @foreach($times as $time)
                                <option value="{{$time->time_id}}">{{$time->departtime}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Bus Id Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('bus_id', 'Car:') !!}
                        <select name="bus_id" class="form-control">
                            <option selected value="{{$itineraires->bus_id}}">{{optional($itineraires->bus)->bus_number}} {{optional($itineraires->bus)->bus_type}} {{optional($itineraires->bus)->bus_marque}}</option>
                            @foreach($bus as $bu)
                                <option value="{{$bu->bus_id}}">{{$bu->bus_number}} {{$bu->bus_type}} {{$bu->bus_marque}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Price Id Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('price_id', 'Prix:') !!}
                        <select name="price_id" class="form-control">
                            <option selected value="{{$itineraires->price_id}}">{{optional($itineraires->prices)->price}}</option>
                            @foreach($prices as $price)
                                <option value="{{$price->price_id}}">{{$price->price}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- It Statut Field -->
                    <div class="form-group col-sm-12">
                        <div class="form-check">
                            {!! Form::hidden('it_statut', 0, ['class' => 'form-check-input']) !!}
                            {!! Form::checkbox('it_statut', '1', null, ['class' => 'form-check-input']) !!}
                            {!! Form::label('it_statut', 'Statut', ['class' => 'form-check-label']) !!}
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer">
                {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('itineraires.index') }}" class="btn btn-default">Annuler</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
