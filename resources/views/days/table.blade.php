<div class="table-responsive">
    <table class="table" id="days-table">
        <thead>
            <tr>
                <th>Jour</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($days as $days)
            <tr>
                <td>{{ $days->jour->format('D d M Y') }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['days.destroy', $days->day_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('days.show', [$days->day_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('days.edit', [$days->day_id]) }}" class='btn btn-default btn-xs'>
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
