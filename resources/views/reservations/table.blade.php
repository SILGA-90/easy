<div class="table-responsive">
    <table class="table" id="reservations-table">
        <thead>
            <tr>
                <th>Lastname</th>
        <th>Firstname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Reserv Statut</th>
        <th>Date</th>
        <th>It Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservations)
            <tr>
                <td>{{ $reservations->lastname }}</td>
            <td>{{ $reservations->firstname }}</td>
            <td>{{ $reservations->email }}</td>
            <td>{{ $reservations->phone }}</td>
            <td>{{ $reservations->reserv_statut }}</td>
            <td>{{ $reservations->date }}</td>
            <td>{{ $reservations->it_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['reservations.destroy', $reservations->reserv_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reservations.show', [$reservations->reserv_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('reservations.edit', [$reservations->reserv_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Veuillez confirmer la suppression !')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
