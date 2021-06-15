<div class="table-responsive">
    <table class="table" id="paiements-table">
        <thead>
            <tr>
                <th>Somme</th>
        <th>Compte Debit</th>
        <th>Compte Credit</th>
        <th>Cust Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($paiements as $paiements)
            <tr>
                <td>{{ $paiements->somme }}</td>
            <td>{{ $paiements->compte_debit }}</td>
            <td>{{ $paiements->compte_credit }}</td>
            <td>{{ $paiements->cust_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['paiements.destroy', $paiements->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('paiements.show', [$paiements->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('paiements.edit', [$paiements->id]) }}" class='btn btn-default btn-xs'>
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
