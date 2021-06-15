@extends('layouts.app')

@section('content')
     <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-registered"></i>Chauffeurs de bus</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="" data-toggle="modal" data-target="#chaufModal">
                       <i class="fas fa-plus-circle"></i>
                        Ajouter
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')
        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('chauffeurs.table')
                
                {{-- {!! Form::open(['route' => 'chauffeurs.store']) !!} --}}
                <form action="{{route('chauffeurs.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            @include('chauffeurs.fields')
                        </div>

                    </div>
                </form>
                {{-- {!! Form::close() !!} --}}
            </div>

        </div>
    </div>

@endsection

