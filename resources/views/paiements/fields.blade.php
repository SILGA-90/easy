<!-- Somme Field -->
<div class="form-group col-sm-6">
    {!! Form::label('somme', 'Somme:') !!}
    {!! Form::number('somme', null, ['class' => 'form-control']) !!}
</div>

<!-- Compte Debit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compte_debit', 'Compte Debit:') !!}
    {!! Form::text('compte_debit', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Compte Credit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compte_credit', 'Compte Credit:') !!}
    {!! Form::text('compte_credit', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cust Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cust_id', 'Cust Id:') !!}
    {!! Form::number('cust_id', null, ['class' => 'form-control']) !!}
</div>