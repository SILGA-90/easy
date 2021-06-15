
<!-- Modal -->
<div class="modal fade" id="itModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez un nouveau trajet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-heading text-center font-weight-bolder">
                        <i class="fa fa-book mt-1"></i>
                    </div>
                    <div class="panel-body" style="padding-bottom: 4px">
                        <div class="row mt-3 bordure">

                            <!-- Comp Id Field -->
                            <div class="form-group col-md-12">
                                {!! Form::label('comp_id', 'Compagnie:') !!}
                                <select name="comp_id" class="form-control">
                                    <option selected>Choisir la compagnie</option>
                                    @foreach($compagnies as $compagnie)
                                        <option value="{{$compagnie->comp_id}}">{{$compagnie->comp_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Departcity Id Field -->
                            <div class="form-group col-md-6">
                                {!! Form::label('departcity_id', 'Lieu de départ:') !!}
                                <select name="departcity_id" class="form-control">
                                    <option selected>Choisir le lieu de départ</option>
                                    @foreach($departcity as $departcit)
                                        <option value="{{$departcit->departcity_id}}">{{$departcit->dcity_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Arrivalcity Id Field -->
                            <div class="form-group col-md-6">
                                {!! Form::label('arrivalcity_id', 'Lieu d\'arrivée:') !!}
                                <select name="arrivalcity_id" class="form-control">
                                    <option selected>Choisir le lieu d'arrivée</option>
                                    @foreach($arrivalcity as $arrivalcit)
                                        <option value="{{$arrivalcit->arrivalcity_id}}">{{$arrivalcit->acity_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Day Id Field -->
                            <div class="form-group col-md-6">
                                {!! Form::label('day_id', 'Jour de départ:') !!}
                                <select name="day_id" class="form-control">
                                    <option selected>Choisir le jour</option>
                                    @foreach($days as $day)
                                        <option value="{{$day->day_id}}">{{$day->jour->format('D d M Y')}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Time Id Field -->
                            <div class="form-group col-md-6">
                                {!! Form::label('time_id', 'Heure de départ:') !!}
                                <select name="time_id" class="form-control">
                                    <option selected>Choisir l'heure de départ</option>
                                    @foreach($times as $time)
                                        <option value="{{$time->time_id}}">{{$time->departtime}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Bus Id Field -->
                            <div class="form-group col-md-6">
                                {!! Form::label('bus_id', 'Car:') !!}
                                <select name="bus_id" class="form-control">
                                    <option selected>Choisir le car</option>
                                    @foreach($bus as $bu)
                                        <option value="{{$bu->bus_id}}">{{$bu->bus_number}} {{$bu->bus_type}} {{$bu->bus_marque}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Price Id Field -->
                            <div class="form-group col-md-6">
                                {!! Form::label('price_id', 'Prix:') !!}
                                <select name="price_id" class="form-control">
                                    <option selected>Choisir le prix</option>
                                    @foreach($prices as $price)
                                        <option value="{{$price->price_id}}">{{$price->price}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- It Statut Field -->
                            <div class="form-group col-sm-12">
                                <div class="form-check">
                                    {!! Form::hidden('it_statut', 0, ['class' => 'form-check-input']) !!}
                                    {!! Form::checkbox('it_statut', '1', null, ['class' => 'form-check-input']) !!}
                                    {!! Form::label('it_statut', 'Statut', ['class' => 'form-check-label']) !!}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
