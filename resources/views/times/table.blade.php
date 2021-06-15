<div class="table-responsive">
    <table class="table" id="times-table">
        <thead>
            <tr>
                <th>Heure de départ</th>
                <th>Heure prévue d'arrivée</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($times as $times)
            <tr>
                <td>{{ $times->departtime }}</td>
                <td>{{ $times->arrivaltime_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['times.destroy', $times->time_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('times.show', [$times->time_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('times.edit', [$times->time_id]) }}" class='btn btn-default btn-xs'>
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
