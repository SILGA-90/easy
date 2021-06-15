
<!-- Modal -->
<div class="modal fade" id="dayModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez un jour</h5>
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
                            <!-- Jour Field -->
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="comp_code">Jour:</label>
                                    <input type="date" name="jour" id="jour" class="form-control" placeholder="Veuillez choisir le jour">    
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

{{-- @push('page_scripts')
    <script type="text/javascript">
        $('#jour').datetimepicker({
            format: 'DD-MM-YYYY ',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush --}}