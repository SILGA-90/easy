<!-- Modal -->
<div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez un prix</h5>
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
                            <!-- Price Field -->
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="price">Prix:</label>
                                    <input type="number" name="price" id="price" class="form-control" placeholder="Veuillez entrer un prix">    
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