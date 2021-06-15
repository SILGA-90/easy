
<!-- Modal -->
<div class="modal fade" id="compModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez une compagnie</h5>
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
                             <!-- Comp Name Field -->
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="comp_name">Nom de la compagnie:</label>
                                    <input type="text" name="comp_name" id="comp_name" class="form-control" placeholder="Veuillez saisir le nom">    
                                </div>
                            </div>
                            <!-- Comp Code Field -->
                            <div class="col-md-12 mt-2">
                                <div class="form-group ">
                                    <label for="comp_code">Code de la compagnie:</label>
                                    <input type="text" name="comp_code" id="comp_code" class="form-control"  placeholder="Veuillez entrer le code">    
                                </div>
                            </div>
                            <!-- Comp Statut Field -->
                            <div class="form-group">
                                <div class="form-check">
                                    {!! Form::hidden('comp_statut', 0, ['class' => 'form-check-input']) !!}
                                    {!! Form::checkbox('comp_statut', '1', null, ['class' => 'form-check-input']) !!}
                                    {!! Form::label('comp_statut', 'Statut', ['class' => 'form-check-label']) !!}
                                </div>
                            </div>
                            <!-- Image Field -->
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="form-group form-group-login">
                                    <table style="">
                                        <tbody>
                                            <tr>
                                                <td class="image">
                                                    {!!Html::image('assets/images/of.png', null, ['class'=>'comp_image', 'id'=>'showImage'])!!}
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
