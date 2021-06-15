<div class="table-responsive">
    <div class="panel">
        <div class="panel-body">
            <div class="wait" id="wait"></div>
        </div>
    </div>
    <table class="table" id="chauffeurs-table">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Genre</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Nationalité</th>
                <th>CNIB</th>
                <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($chauffeurs as $chauffeurs)
            <tr>
                <td><img src="{{asset('chauffeur_images/' .$chauffeurs->image)}}" alt="" class="rounded-circle" width="50" height="50" style="border-radius: 50%; vertical-align:middle;"></td>
                <td>{{ $chauffeurs->lastname }}</td>
                <td>{{ $chauffeurs->firstname }}</td>
                <td>{{ $chauffeurs->old }}</td>
                <td> 
                    @if ($chauffeurs->gender == 0)
                        <span>Masculin</span>
                    @else
                        <span>Féminin</span>
                    @endif
                </td>
                <td>{{ $chauffeurs->email }}</td>
                <td>{{ $chauffeurs->phone }}</td>
                <td>{{ $chauffeurs->nationality }}</td>
                <td>{{ $chauffeurs->no_CNIB }}</td>
                <td>
                    <input type="checkbox" data-id="{{$chauffeurs->chauf_id}}" name="statut" class="js-switch" {{$chauffeurs->statut == 1 ? 'checked' : ''}} />
                    {{-- @if($chauffeurs->statut == 1)        
                        <span class="btn btn-outline-success">Actif</span>
                    @else
                        <span class="btn btn-outline-danger">Inactif</span>
                    @endif --}}
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['chauffeurs.destroy', $chauffeurs->chauf_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('chauffeurs.show', [$chauffeurs->chauf_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('chauffeurs.edit', [$chauffeurs->chauf_id]) }}" class='btn btn-default btn-xs'>
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
                let chaufstatut = $(this).prop('checked') == true ? 1: 0;
                let chaufID = $(this).data('id');

                $.ajax({
                    dataType: "json",
                    type: "GET",
                    url: "{{ url('/chauffeur-update-statut') }}",
                    data: {'statut': chaufstatut, 'chauf_id': chaufID},
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
