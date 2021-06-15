<!-- Modal -->
<div class="modal fade" id="usersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez un utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-heading text-center font-weight-bolder">
                        <i class="fa fa-book mt-1"></i>
                            Détails de l'utilisateur</h5>
                    </div>
                    <div class="panel-body" style="padding-bottom: 4px">
                        {{-- <input type="hidden" name="class_id" id="class_id" required> --}}
                        <div class="row mt-3 bordure">
                            <!-- First Name Field -->
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="lastname">Nom:</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Veuillez saisir le nom">    
                                </div>
                            </div>
                            <!-- Lastname Field -->
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="firstname">Prénom:</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Veuillez saisir le prénom">    
                                </div>
                            </div>
                            <!-- Email Field -->
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Adresse email">    
                                </div>
                            </div>
                            <!-- Mobile Field -->
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="mobile">Téléphone:</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Numéro de téléphone">    
                                </div>
                            </div>
                            <!-- Img Field -->
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
                            
                            <!-- compagnie Field -->
                            <div class="form-group col-md-6">
                                {!! Form::label('compagnies', 'Compagnie:') !!}
                                <select name="comp_id" class="form-control">
                                    <option selected>Choisir la compagnie</option>
                                    @foreach($compagnies as $compagnie)
                                        <option value="{{$compagnie->comp_id}}">{{$compagnie->comp_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Role Field -->
                            <div class="form-group col-md-6">
                                {!! Form::label('role', 'Rôle:') !!}
                                <select name="role_id" class="form-control">
                                    <option selected>Choisir le type</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->role_id}}">{{$role->title}}</option>
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
    </div>
</div>
