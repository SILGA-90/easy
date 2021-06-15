<div class="table-responsive">
    <table class="table" id="departcities-table">
        <thead>
            <tr>
                <th>Lieu de départ</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($departcities as $departcity)
            <tr>
                <td>{{ $departcity->dcity_name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['departcities.destroy', $departcity->departcity_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departcities.show', [$departcity->departcity_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('departcities.edit', [$departcity->departcity_id]) }}" class='btn btn-default btn-xs'>
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
