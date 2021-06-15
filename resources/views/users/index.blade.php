@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-registered"></i> Les utilisateurs</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="" data-toggle="modal" data-target="#usersModal">
                       <i class="fas fa-plus-circle"></i>
                        Ajouter un agent
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @include('adminlte-templates::common.errors')
        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('users.table')
                <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            @include('users.fields')
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection

