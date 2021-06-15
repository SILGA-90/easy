@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fas fa-edit"> Modifier Détail du bus</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {{-- {!! Form::model($bus, ['route' => ['buses.update', $bus->bus_id], 'method' => 'patch']) !!} --}}
            <form action="{{route('buses.update', $bus->bus_id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')

                <div class="card-body">
                    <div class="row">
                        {{-- @include('buses.fields') --}}

                        <!-- Bus Marque Field -->     
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="bus_marque">Marque: </label>
                                <input type="text" name="bus_marque" id="bus_marque" class="form-control" value="{{$bus->bus_marque}}">    
                            </div>
                        </div>

                        <!-- Bus Number Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="bus_number">Numéro: </label>
                                <input type="text" name="bus_number" id="bus_number" class="form-control" value="{{$bus->bus_number}}">    
                            </div>
                        </div>

                        <!-- Bus Type Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="bus_type">Type: </label>
                                <input type="text" name="bus_type" id="bus_type" class="form-control" value="{{$bus->bus_type}}">    
                            </div>
                        </div>

                        <!-- Total Place Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="total_place">Capacité: </label>
                                <input type="text" name="total_place" id="total_place" class="form-control" value="{{$bus->total_place}}">    
                            </div>
                        </div>

                        <!-- Bus Statut Field -->
                        <div class="form-group col-sm-6">
                            <div class="form-check">
                                {!! Form::hidden('bus_statut', 0, ['class' => 'form-check-input']) !!}
                                {!! Form::checkbox('bus_statut', '1', null, ['class' => 'form-check-input']) !!}
                                {!! Form::label('Statut', 'Statut', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>

                        <!-- Image Field -->
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-group form-group-login">
                                <table style="">
                                    <tbody>
                                        <tr>
                                            <td class="image">
                                                {!!Html::image('bus_images/' .$bus->image, null, ['class'=>'comp_image', 'id'=>'showImage'])!!}
                                                <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center; background: #ddd;">
                                                <input type="button" name="browse_file" id="browse_file" class="form-control btn-choose btn btn-outline-dark" value="choose">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Chauf Id Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('chauf_id', ' Chauffeur: ') !!}
                            <select name="chauf_id" class="form-control">
                                <option selected value="{{$bus->chauf_id}}">{{optional($bus->chauffeurs)->lastname}} {{optional($bus->chauffeurs)->firstname}}</option>
                                @foreach($chauffeurs as $chauffeur)
                                    <option value="{{$chauffeur->chauf_id}}">{{$chauffeur->lastname}} {{$chauffeur->firstname}}</option>
                                @endforeach
                            </select>  
                        </div>
                        
                        <!-- Comp Id Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('comp_id', ' Compagnie: ') !!}
                            <select name="comp_id" class="form-control">
                                <option selected value="{{$bus->comp_id}}">{{optional($bus->compagnies)->comp_name}}<option>
                                @foreach($compagnies as $compagnie)
                                    <option value="{{$compagnie->comp_id}}">{{$compagnie->comp_name}}</option>
                                @endforeach
                            </select>  
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('buses.index') }}" class="btn btn-default">Annuler</a>
                </div>
            </form>
           {{-- {!! Form::close() !!} --}}

        </div>
    </div>
@endsection
