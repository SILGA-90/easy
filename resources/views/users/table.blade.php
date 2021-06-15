<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Role</th>
                {{-- <th>compagnie</th> --}}
                {{-- <th>Password</th>
                <th>Remember Token</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
                <td><img src="{{asset('users_images/' .$users->img)}}" alt="" class="rounded-circle" width="50" height="50" style="border-radius: 50%; vertical-align:middle;"></td>
                <td>{{ $users->lastname }}</td>
                <td>{{ $users->firstname }}</td>
                <td>{{ $users->email }}</td>
                 <td>{{ $users->mobile }}</td>
                <td> 
                    @if ($users->role_id == 1)
                        <span>Super Admin</span>
                    @elseif ($users->role_id == 2)
                        <span>Agent</span>
                    @else
                        <span>Client</span>
                    @endif
                </td>
                {{-- <td>{{ $users->compagnie }}</td> --}}
                {{-- <td>{{ $users->password }}</td>
                <td>{{ $users->remember_token }}</td> --}}
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$users->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$users->id]) }}" class='btn btn-default btn-xs'>
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
