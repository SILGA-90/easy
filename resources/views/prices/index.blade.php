@extends('layouts.app')

@section('content')
      <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-registered"></i>Gérer les prix</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="" data-toggle="modal" data-target="#priceModal">
                       <i class="fas fa-plus-circle"></i>
                        Nouveau prix
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
                @include('prices.table')

                {!! Form::open(['route' => 'prices.store']) !!}

                <div class="card-body">

                    <div class="row">
                        @include('prices.fields')
                    </div>

                </div>
                
                {!! Form::close() !!}
            </div>

        </div>
    </div>

@endsection

