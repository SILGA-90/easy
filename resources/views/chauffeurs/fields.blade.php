<!-- Modal -->
<div class="modal fade" id="chaufModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez un chauffeur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Lastname Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('lastname', 'Nom:') !!}
                        {!! Form::text('lastname', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                    <!-- Firstname Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('firstname', 'Prénom:') !!}
                        {!! Form::text('firstname', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                    <!-- Old Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('old', 'Âge:') !!}
                        {!! Form::number('old', null, ['class' => 'form-control']) !!}
                    </div>
                     <!-- Gender Field -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <fieldset>
                                <legend>Genre</legend>
                                <table style="width: 100%;marginy-top:14px">
                                    <tr style="border-bottom:1px solid #ccc;">
                                        <td>
                                            <label for="">
                                                <input type="radio" name="gender" id="gender" value="0">
                                                Masculin
                                            </label>
                                            <label for="">
                                                <input type="radio" name="gender" id="genre" value="1">
                                                Féminin 
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>
                    </div>
                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                   <!-- Phone Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('phone', 'Téléphone:') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Nationality Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('nationality', 'Nationalité:') !!}
                        {!! Form::text('nationality', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                    <!-- No Cnib Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('no_CNIB', 'Numero CNIB:') !!}
                        {!! Form::text('no_CNIB', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                    <!-- Chauf Statut Field -->
                    <div class="form-group col-sm-6">
                        <div class="form-check">
                            {!! Form::hidden('statut', 0, ['class' => 'form-check-input']) !!}
                            {!! Form::checkbox('statut', '1', null, ['class' => 'form-check-input']) !!}
                            {!! Form::label('statut', 'Statut', ['class' => 'form-check-label']) !!}
                        </div>
                    </div>
                    <!-- Image Field -->
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="form-group form-group-login">
                            <table style="">
                                <tbody>
                                    <tr>
                                        <td class="image">
                                            {!!Html::image('assets/images/user.jpg', null, ['class'=>'comp_image', 'id'=>'showImage'])!!}
                                            <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; background: #ddd;">
                                           <input type="button" name="browse_file" id="browse_file" class="form-control btn-choose btn btn-outline-dark" value="choisir">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Id Field -->
                    <div class="form-group col-md-12">
                        {!! Form::label('compagnies', 'Compagnie:') !!}
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
