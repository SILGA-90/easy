<!-- Tick Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tick_type', 'Tick Type:') !!}
    {!! Form::text('tick_type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tick Statut Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('tick_statut', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('tick_statut', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('tick_statut', 'Tick Statut', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Place Choisie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('place_choisie', 'Place Choisie:') !!}
    {!! Form::text('place_choisie', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bus Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bus_id', 'Bus Id:') !!}
    {!! Form::number('bus_id', null, ['class' => 'form-control']) !!}
</div>

<!-- It Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('it_id', 'It Id:') !!}
    {!! Form::number('it_id', null, ['class' => 'form-control']) !!}
</div>