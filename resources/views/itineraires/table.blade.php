<div class="table-responsive">
    <div class="panel">
        <div class="panel-body">
            <div class="wait" id="wait"></div>
        </div>
    </div>
    <table class="table" id="itineraires-table">
        <thead>
            <tr>
                <th>Statut</th>
                <th>Départ</th>
                <th>Arrivée</th>
                <th>Jour</th>
                <th>Heure de départ</th>
                <th>Bus</th>
                <th>Prix</th>
                {{-- <th>Compagnie</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($itineraires as $itineraires)
            <tr>
                <td>
                    <input type="checkbox" data-id="{{$itineraires->it_id}}" name="comp_statut" class="js-switch" {{$itineraires->it_statut == 1 ? 'checked' : ''}} />
                    {{-- @if ($itineraires->it_statut == 1)
                        <span class="btn btn-outline-success">Actif</span>
                    @else
                        <span class="btn btn-outline-danger">Inactif</span>
                    @endif --}}
                </td>
                <td>{{optional($itineraires->departcity)->dcity_name}}</td>
                <td>{{optional($itineraires->arrivalcity)->acity_name}}</td>
                <td>{{optional($itineraires->days)->jour->format('D d M Y')}}</td>
                <td>{{optional($itineraires->times)->departtime}}</td>
                <td>{{optional($itineraires->bus)->bus_number}} {{optional($itineraires->bus)->bus_type}} {{optional($itineraires->bus)->bus_marque}}</td>
                <td>{{optional($itineraires->prices)->price}} fcfa</td>
                {{-- <td>{{ $itineraires->comp_id }}</td> --}}
                <td width="120">
                    {!! Form::open(['route' => ['itineraires.destroy', $itineraires->it_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('itineraires.show', [$itineraires->it_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('itineraires.edit', [$itineraires->it_id]) }}" class='btn btn-default btn-xs'>
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
                let itstatut = $(this).prop('checked') == true ? 1: 0;
                let itID = $(this).data('id');

                $.ajax({
                    dataType: "json",
                    type: "GET",
                    url: "{{ url('/itineraire-update-statut') }}",
                    data: {'it_statut': itstatut, 'it_id': itID},
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