<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Comp Name Field -->
            <div class="col-sm-12">
                {!! Form::label('comp_name', 'Nom de la compagnie:') !!}
                <p>{{ $compagnies->comp_name }}</p>
            </div>

            <!-- Comp Code Field -->
            <div class="col-sm-12">
                {!! Form::label('comp_code', 'Code de la compagnie:') !!}
                <p>{{ $compagnies->comp_code }}</p>
            </div>

            <!-- Comp Statut Field -->
            <div class="col-sm-12">
        {!! Form::label('comp_statut', 'Statut:') !!}
            <p> @if ($compagnies->comp_statut == 1) 
                    <span class="btn btn-success">Actif</span>
                @else
                    <span class="btn btn-danger">Inactif</span>
                @endif
            </p>
        </div>
        </div>
        <div class="col-md-6">
            <div class="card-footer clearfix float-right">
                <div class="float-right">
                    <p><img src="{{asset('compagnie_images/' .$compagnies->image)}}" alt="" class="rounded-circle" min-width="150" min-height="100" ></p>
                </div>
            </div>
        </div>
    </div>
</div>


