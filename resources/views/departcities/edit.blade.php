@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fas fa-edit"> Modifier le lieu de départ</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($departcity, ['route' => ['departcities.update', $departcity->departcity_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('departcities.fields') --}}
                    <!-- Jour Field -->
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label for="dcity_name">Lieu de départ:</label>
                            <input type="text" name="dcity_name" id="dcity_name" class="form-control" value="{{$departcity->dcity_name}}">    
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('departcities.index') }}" class="btn btn-default">Annuler</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
