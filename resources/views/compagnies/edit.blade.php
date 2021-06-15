@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1><i class="fas fa-edit"> Modifier la compagnie</i></h1>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {{-- {!! Form::model($compagnies, ['route' => ['compagnies.update', $compagnies->comp_id], 'method' => 'patch']) !!} --}}
            <form action="{{route('compagnies.update', $compagnies->comp_id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="row">
                        {{-- @include('compagnies.fields') --}}

                        <!-- Comp Name Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="comp_name">Nom de la compagnie:</label>
                                <input type="text" name="comp_name" id="comp_name" class="form-control" value="{{$compagnies->comp_name}}" placeholder="Veuillez saisir le nom">    
                            </div>
                        </div>
                        <!-- Comp Code Field -->
                        <div class="col-md-6 mt-2">
                            <div class="form-group ">
                                <label for="comp_code">Code de la compagnie:</label>
                                <input type="text" name="comp_code" id="comp_code" class="form-control" value="{{$compagnies->comp_code}}"  placeholder="Veuillez entrer le code">    
                            </div>
                        </div>
                        <!-- Comp Statut Field -->
                        <div class="form-group">
                            <div class="form-check">
                                {!! Form::hidden('comp_statut', 0, ['class' => 'form-check-input']) !!}
                                {!! Form::checkbox('comp_statut', '1', null, ['class' => 'form-check-input']) !!}
                                {!! Form::label('comp_statut', 'Statut', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>
                        <!-- Image Field -->
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-group form-group-login">
                                <table style="">
                                    <tbody>
                                        <tr>
                                            <td class="image">
                                                {!!Html::image('compagnie_images/' .$compagnies->image, null, ['class'=>'comp_image', 'id'=>'showImage'])!!}
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
                    </div>
                </div>
                <div class="card-footer">
                    {!! Form::submit('Auctualiser', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('compagnies.index') }}" class="btn btn-default">Annuler</a>
                </div>
            </form>
           {{-- {!! Form::close() !!} --}}
        </div>
    </div>
@endsection
