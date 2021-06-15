<div class="table-responsive">
    <table class="table" id="tickets-table">
        <thead>
            <tr>
                <th>Tick Type</th>
        <th>Tick Statut</th>
        <th>Place Choisie</th>
        <th>Bus Id</th>
        <th>It Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tickets as $tickets)
            <tr>
                <td>{{ $tickets->tick_type }}</td>
            <td>{{ $tickets->tick_statut }}</td>
            <td>{{ $tickets->place_choisie }}</td>
            <td>{{ $tickets->bus_id }}</td>
            <td>{{ $tickets->it_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tickets.destroy', $tickets->tick_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tickets.show', [$tickets->tick_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tickets.edit', [$tickets->tick_id]) }}" class='btn btn-default btn-xs'>
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
