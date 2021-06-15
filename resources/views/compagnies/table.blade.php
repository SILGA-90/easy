<div class="table-responsive">

    <div class="panel">
        <div class="panel-body">
            <div class="wait" id="wait"></div>
        </div>
    </div>

    <table class="table" id="compagnies-table">
        <thead>
            <tr>
                <th>Logo</th>
                <th>Nom de la compagnie</th>
                <th>Code de la compagnie</th>
                <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($compagnies as $compagnies)
            <tr>
                <td><img src="{{asset('compagnie_images/' .$compagnies->image)}}" alt="" class="rounded-circle" width="50" height="50" style="border-radius: 50%; vertical-align:middle;"></td>
                <td>{{ $compagnies->comp_name }}</td>
                <td>{{ $compagnies->comp_code }}</td>
                <td>
                    <input type="checkbox" data-id="{{$compagnies->comp_id}}" name="comp_statut" class="js-switch" {{$compagnies->comp_statut == 1 ? 'checked' : ''}} />
                    {{-- @if ($compagnies->comp_statut == 1) 
                        <span class="btn btn-outline-success">Actif</span>
                    @else
                        <span class="btn btn-outline-danger">Inactif</span>
                    @endif --}}
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['compagnies.destroy', $compagnies->comp_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('compagnies.show', [$compagnies->comp_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('compagnies.edit', [$compagnies->comp_id]) }}" class='btn btn-default btn-xs'>
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

@section('third_party_scripts')
    <script>
        $(document).ready(function () {
            $('.js-switch').change(function() {
                let compstatut = $(this).prop('checked') == true ? 1: 0;
                let compagnieID = $(this).data('id');

                $.ajax({
                    dataType: "json",
                    type: "GET",
                    url: "{{ url('/compagnie-update-statut') }}",
                    data: {'comp_statut': compstatut, 'comp_id': compagnieID},
                    success: function(data){
                        console.log(data.message);
                       
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = '100';
                        toastr.success(data.message);
                    }
                })
            })
        })
    </script>
@endsection
