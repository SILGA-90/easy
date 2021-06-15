<div class="table-responsive">
    <div class="panel">
        <div class="panel-body">
            <div class="wait" id="wait"></div>
        </div>
    </div>
    <table class="table" id="buses-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Marque</th>
                <th>Numéro</th>
                <th>Type</th>
                <th>Capacité</th>
                <th>Chauffeur</th>
                <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($buses as $bus)
            <tr>
                <td><img src="{{asset('bus_images/' .$bus->image)}}" alt="" class="rounded-circle" width="50" height="50" style="border-radius: 50%; vertical-align:middle;"></td>
                <td>{{ $bus->bus_marque }}</td>
                <td>{{ $bus->bus_number }}</td>
                <td>{{ $bus->bus_type }}</td>
                <td>{{ $bus->total_place }} places</td>
                <td>{{optional($bus->chauffeurs)->lastname}} {{optional($bus->chauffeurs)->firstname}}</td>
                <td>
                    <input type="checkbox" data-id="{{$bus->bus_id}}" name="bus_statut" class="js-switch" {{$bus->bus_statut == 1 ? 'checked' : ''}} />
                    {{-- @if ( $bus->bus_statut == 1)
                        <span class="btn btn-outline-success">Actif</span>
                    @else
                        <span class="btn btn-outline-danger">Inactif</span>
                    @endif --}}
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['buses.destroy', $bus->bus_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('buses.show', [$bus->bus_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('buses.edit', [$bus->bus_id]) }}" class='btn btn-default btn-xs'>
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
                let bustatut = $(this).prop('checked') == true ? 1: 0;
                let busID = $(this).data('id');

                $.ajax({
                    dataType: "json",
                    type: "GET",
                    url: "{{ url('/bus-update-statut') }}",
                    data: {'bus_statut': bustatut, 'bus_id': busID},
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