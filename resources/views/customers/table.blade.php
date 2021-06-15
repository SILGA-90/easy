<div class="table-responsive">
    <table class="table" id="customers-table">
        <thead>
            <tr>
                <th>Lastname</th>
        <th>Firstname</th>
        <th>Email</th>
        <th>Phone</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customers as $customers)
            <tr>
                <td>{{ $customers->lastname }}</td>
            <td>{{ $customers->firstname }}</td>
            <td>{{ $customers->email }}</td>
            <td>{{ $customers->phone }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['customers.destroy', $customers->cust_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customers.show', [$customers->cust_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('customers.edit', [$customers->cust_id]) }}" class='btn btn-default btn-xs'>
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
