<!-- Lastname Field -->
<div class="col-sm-12">
    {!! Form::label('lastname', 'Lastname:') !!}
    <p>{{ $reservations->lastname }}</p>
</div>

<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $reservations->firstname }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $reservations->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $reservations->phone }}</p>
</div>

<!-- Reserv Statut Field -->
<div class="col-sm-12">
    {!! Form::label('reserv_statut', 'Reserv Statut:') !!}
    <p>{{ $reservations->reserv_statut }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $reservations->date }}</p>
</div>

<!-- It Id Field -->
<div class="col-sm-12">
    {!! Form::label('it_id', 'It Id:') !!}
    <p>{{ $reservations->it_id }}</p>
</div>

