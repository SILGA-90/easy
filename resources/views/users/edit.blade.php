@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fas fa-edit"> Modifier Détail de l'utilisateur</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {{-- {!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch']) !!} --}}
            <form action="{{route('users.update', $users->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')

                <div class="card-body">
                    <div class="row">
                        {{-- @include('users.fields') --}}
                           
                            <!-- First Name Field -->
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="lastname">Nom:</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{$users->lastname}}">    
                                </div>
                            </div>
                            <!-- Lastname Field -->
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="firstname">Prénom:</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{$users->firstname}}">    
                                </div>
                            </div>
                            <!-- Email Field -->
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{$users->email}}">    
                                </div>
                            </div>
                            <!-- Mobile Field -->
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="mobile">Téléphone:</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control" value="{{$users->mobile}}">    
                                </div>
                            </div>
                            <!-- Img Field -->
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="form-group form-group-login">
                                    <table style="">
                                        <tbody>
                                            <tr>
                                                <td class="image">
                                                    {!!Html::image('users_images/' .$users->img, null, ['class'=>'comp_image', 'id'=>'showImage'])!!}
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
                             
                            <!-- compaginies Field -->
                            <div class="form-group col-md-6">
                                {!! Form::label('compagnies', 'Compagnie:') !!}
                                @if (Auth::User()->role_id == 2)
                                   
                                    <select name="comp_id" class="form-control" disabled="true" >
                                        <option selected>Choisir la compagnie</option>
                                        @foreach($compagnies as $compagnie)
                                            <option value="{{$compagnie->comp_id}}">{{$compagnie->comp_name}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <select name="comp_id" class="form-control" id="comp_id">
                                        <option selected></option>
                                        @foreach($compagnies as $compagnie)
                                            <option value="{{$compagnie->comp_id}}">{{$compagnie->comp_name}}</option>
                                        @endforeach
                                    </select>
                                @endif
                                  
                            </div>
                            <!-- Role Field -->
                            
                            <div class="form-group col-md-6">
                                {!! Form::label('role', 'Rôle:') !!}
                                @if (Auth::User()->role_id == 2)
                                    <select name="role_id" class="form-control" disabled="true" >
                                        <option selected value="{{$users->role_id}}">
                                            @if ($users->role_id == 1)
                                                <span>Super Admin</span>
                                            @elseif ($users->role_id == 2)
                                                <span>Agent</span>
                                            @else
                                                <span>Client</span>
                                            @endif
                                        </option>
                                        @foreach($roles as $role)
                                            <option value="{{$role->role_id}}" >{{$role->title}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <select name="role_id" class="form-control" >
                                        <option selected value="{{$users->role_id}}">
                                            @if ($users->role_id == 1)
                                                <span>Super Admin</span>
                                            @elseif ($users->role_id == 2)
                                                <span>Agent</span>
                                            @else
                                                <span>Client</span>
                                            @endif
                                        </option>
                                        @foreach($roles as $role)
                                            <option value="{{$role->role_id}}" >{{$role->title}}</option>
                                        @endforeach
                                    </select>
                                @endif
                                  
                            </div>
                        </div>
                    </div>
                    <!-- Password Field -->
                    <div class="footer">
                        {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('users.show', [$users->id]) }}" class="btn btn-default">Annuler</a>
                    </div>
                </div>
            </form>
           {{-- {!! Form::close() !!} --}}

        </div>
    </div>
@endsection


