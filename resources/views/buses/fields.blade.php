<!-- Modal -->
<div class="modal fade" id="busModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez un bus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Bus Marque Field -->     
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="bus_marque">Marque: </label>
                            <input type="text" name="bus_marque" id="bus_marque" class="form-control" placeholder="Veuillez saisir la marque">    
                        </div>
                    </div>

                    <!-- Bus Number Field -->
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="bus_number">Numéro: </label>
                            <input type="text" name="bus_number" id="bus_number" class="form-control" placeholder="Veuillez entrer le numéro">    
                        </div>
                    </div>

                    <!-- Bus Type Field -->
                     <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="bus_type">Type: </label>
                            <input type="text" name="bus_type" id="bus_type" class="form-control" placeholder="Veuillez entrer le type">    
                        </div>
                    </div>

                    <!-- Total Place Field -->
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="total_place">Capacité: </label>
                            <input type="text" name="total_place" id="total_place" class="form-control" placeholder="Veuillez saisir la capacité">    
                        </div>
                    </div>

                     <!-- Bus Statut Field -->
                    <div class="form-group col-sm-6">
                        <div class="form-check">
                            {!! Form::hidden('bus_statut', 0, ['class' => 'form-check-input']) !!}
                            {!! Form::checkbox('bus_statut', '1', null, ['class' => 'form-check-input']) !!}
                            {!! Form::label('Statut', 'Statut', ['class' => 'form-check-label']) !!}
                        </div>
                    </div>

                    <!-- Image Field -->
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="form-group form-group-login">
                            <table style="">
                                <tbody>
                                    <tr>
                                        <td class="image">
                                            {!!Html::image('assets/images/comp.png', null, ['class'=>'comp_image', 'id'=>'showImage'])!!}
                                            <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; background: #ddd;">
                                            <input type="button" name="browse_file" id="browse_file" class="form-control btn-choose btn btn-outline-dark" value="choose">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Chauf Id Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('chauf_id', ' Chauffeur: ') !!}
                        <select name="chauf_id" class="form-control">
                            <option selected>Choisir le chauffeur</option>
                            @foreach($chauffeurs as $chauffeur)
                                <option value="{{$chauffeur->chauf_id}}">{{$chauffeur->lastname}} {{$chauffeur->firstname}}</option>
                            @endforeach
                        </select>  
                    </div>
                    
                    <!-- Comp Id Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('comp_id', ' Compagnie: ') !!}
                        <select name="comp_id" class="form-control">
                            <option selected>Choisir la compagnie</option>
                            @foreach($compagnies as $compagnie)
                                <option value="{{$compagnie->comp_id}}">{{$compagnie->comp_name}}</option>
                            @endforeach
                        </select>  
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
