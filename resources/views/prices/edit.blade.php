@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fas fa-edit"> Modifier le prix</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($prices, ['route' => ['prices.update', $prices->price_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('prices.fields') --}}
                    <!-- Price Field -->
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label for="price">Nouveau Prix:</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{$prices->price}}">    
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('prices.index') }}" class="btn btn-default">Annuler</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
