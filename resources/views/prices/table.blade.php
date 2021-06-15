<div class="table-responsive">
    <table class="table" id="prices-table">
        <thead>
            <tr>
                <th>Prix de chaque trajet</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prices as $prices)
            <tr>
                <td>{{ $prices->price }} fcfa</td>
                <td width="120">
                    {!! Form::open(['route' => ['prices.destroy', $prices->price_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prices.show', [$prices->price_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('prices.edit', [$prices->price_id]) }}" class='btn btn-default btn-xs'>
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
