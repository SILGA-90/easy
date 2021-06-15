<!-- Somme Field -->
<div class="col-sm-12">
    {!! Form::label('somme', 'Somme:') !!}
    <p>{{ $paiements->somme }}</p>
</div>

<!-- Compte Debit Field -->
<div class="col-sm-12">
    {!! Form::label('compte_debit', 'Compte Debit:') !!}
    <p>{{ $paiements->compte_debit }}</p>
</div>

<!-- Compte Credit Field -->
<div class="col-sm-12">
    {!! Form::label('compte_credit', 'Compte Credit:') !!}
    <p>{{ $paiements->compte_credit }}</p>
</div>

<!-- Cust Id Field -->
<div class="col-sm-12">
    {!! Form::label('cust_id', 'Cust Id:') !!}
    <p>{{ $paiements->cust_id }}</p>
</div>

