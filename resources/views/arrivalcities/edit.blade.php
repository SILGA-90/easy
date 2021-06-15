@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fas fa-edit"> Modifier le lieu d'arrivée</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($arrivalcity, ['route' => ['arrivalcities.update', $arrivalcity->arrivalcity_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('arrivalcities.fields') --}}
                     <!-- Jour Field -->
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label for="acity_name">Lieu de départ:</label>
                            <input type="text" name="acity_name" id="acity_name" class="form-control" value="{{$arrivalcity->acity_name}}">    
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('arrivalcities.index') }}" class="btn btn-default">Annuler</a>
                </div>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
