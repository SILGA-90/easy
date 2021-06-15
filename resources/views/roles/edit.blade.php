@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1><i class="fas fa-edit"> Modifier le rôle</i></h1>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($roles, ['route' => ['roles.update', $roles->role_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('roles.fields') --}}

                    <!-- Title Field -->
                <div class="form-group col-6">
                    {!! Form::label('title', 'Titre:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('roles.index') }}" class="btn btn-default">Annuler</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
