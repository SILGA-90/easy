@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fas fa-edit"> Modifier Détail du chauffeur</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {{-- {!! Form::model($chauffeurs, ['route' => ['chauffeurs.update', $chauffeurs->chauf_id], 'method' => 'patch']) !!} --}}
            <form action="{{route('chauffeurs.update', $chauffeurs->chauf_id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="row">
                        {{-- @include('chauffeurs.fields') --}}
                        <!-- Firstname Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="comp_name">Prénom:</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" value="{{$chauffeurs->firstname}}">    
                            </div>
                        </div>
                        <!-- Lastname Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="comp_name">Nom:</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" value="{{$chauffeurs->lastname}}">    
                            </div>
                        </div>
                        <!-- Old Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="comp_name">Âge:</label>
                                <input type="text" name="old" id="old" class="form-control" value="{{$chauffeurs->old}}">    
                            </div>
                        </div>
                        <!-- Gender Field -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <fieldset>
                                    <legend>Genre</legend>
                                    <table style="width: 100%;marginy-top:14px">
                                        <tr style="border-bottom:1px solid #ccc;">
                                            <td>
                                                <label for="">
                                                    <input type="radio" name="gender" id="gender" value="0" {{$chauffeurs->gender == '0' ? 'checked' : ''}}>
                                                    Masculin
                                                </label>
                                                <label for="">
                                                    <input type="radio" name="gender" id="genre" value="1" {{$chauffeurs->gender == '1' ? 'checked' : ''}}>
                                                    Féminin 
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                        </div>
                        <!-- Email Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="comp_name">Email:</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{$chauffeurs->email}}">    
                            </div>
                        </div>
                        <!-- Phone Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="comp_name">Téléphone:</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{$chauffeurs->phone}}">    
                            </div>
                        </div>
                        <!-- Nationality Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="comp_name">Nationalité:</label>
                                <input type="text" name="nationality" id="nationality" class="form-control" value="{{$chauffeurs->nationality}}">    
                            </div>
                        </div>
                        <!-- No Cnib Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="comp_name">Numero CNIB:</label>
                                <input type="text" name="no_CNIB" id="no_CNIB" class="form-control" value="{{$chauffeurs->no_CNIB}}">    
                            </div>
                        </div>
                        <!-- Chauf Statut Field -->
                        <div class="form-group col-sm-6">
                            <div class="form-check">
                                {!! Form::hidden('statut', 0, ['class' => 'form-check-input']) !!}
                                {!! Form::checkbox('statut', '1', null, ['class' => 'form-check-input']) !!}
                                {!! Form::label('statut', 'Statut', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>
                        <!-- Image Field -->
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-group form-group-login">
                                <table style="">
                                    <tbody>
                                        <tr>
                                            <td class="image">
                                                {!!Html::image('chauffeur_images/' .$chauffeurs->image, null, ['class'=>'comp_image', 'id'=>'showImage'])!!}
                                                <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center; background: #ddd;">
                                            <input type="button" name="browse_file" id="browse_file" class="form-control btn-choose btn btn-outline-dark" value="choisir">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- comp_id Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('compagnies', 'Compagnie:') !!}
                            <select name="comp_id" class="form-control">
                                <option selected>Choisir la compagnie</option>
                                @foreach($compagnies as $compagnie)
                                    <option value="{{$compagnie->comp_id}}">{{$compagnie->comp_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="footer">
                            {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('chauffeurs.index') }}" class="btn btn-default">Annuler</a>
                        </div>
                    </div>
                </form>
           {{-- {!! Form::close() !!} --}}    
        </div>
    </div>
@endsection
