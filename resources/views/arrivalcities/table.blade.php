<div class="table-responsive">
    <table class="table" id="arrivalcities-table">
        <thead>
            <tr>
                <th>Lieu de départ</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($arrivalcities as $arrivalcity)
            <tr>
                <td>{{ $arrivalcity->acity_name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['arrivalcities.destroy', $arrivalcity->arrivalcity_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('arrivalcities.show', [$arrivalcity->arrivalcity_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('arrivalcities.edit', [$arrivalcity->arrivalcity_id]) }}" class='btn btn-default btn-xs'>
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
