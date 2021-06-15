@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fas fa-edit"> Modifier les horaires</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($times, ['route' => ['times.update', $times->time_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('times.fields') --}}
                     <!-- dtime Field -->
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label for="departtime">Heure de départ:</label>
                            <input type="time" name="departtime" id="departtime" class="form-control" value="{{$times->departtime}}">    
                        </div>
                    </div>
                    <!-- atime Field -->
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label for="arrivaltime_id">Heure prévue:</label>
                            <input type="time" name="arrivaltime_id" id="arrivaltime_id" class="form-control" value="{{$times->arrivaltime_id}}">    
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('times.index') }}" class="btn btn-default">Annuler</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
