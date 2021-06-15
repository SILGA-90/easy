<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <div class="text-center" >
                <img class="profile-user-img img-fluid img-circle"
                    src="{{asset('users_images/' .$users->img)}}"
                    alt="User profile picture" width="50" height="50" style="border-radius: 50%; width: 150px; height:150px; vertical-align: middle;">
            </div>

            <h3 class="profile-username text-center">{{$users->lastname}} {{$users->firstname}}</h3>

            <p class="text-muted text-center">
                 @if ($users->role_id == 1)
                    <span>Super Admin</span>
                @elseif ($users->role_id == 2)
                    <span>Agent</span>
                @else
                    <span>Client</span>
                @endif
            </p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                <b>Téléphone: </b> <a class="float-right">{{$users->mobile}}</a>
                </li>
                <li class="list-group-item">
                <b>Email: </b> <a class="float-right">{{$users->email}}</a>
                </li>
            </ul>

            <a href="" data-toggle="modal" data-target="#emailModal" class="btn btn-primary btn-block"><b>Envoyez un mail</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-7">
        <div class="card">
            <div class="card-header p-2">
            <ul class="nav nav-pills  justify-content-between">
                <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Information détaillée</a></li>
                <li  class=" nav-item "><a class="nav-link active" href="{{ route('users.edit', [$users->id]) }}">Mettre à jour</a></li>
            </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="timeline">
                <form class="form-horizontal">
                    <div class="container">
                    <div class="row">
                    
                    <label for="inputName" class="col-sm-6 col-form-label p-3">Nom</label>
                    <div class="col-sm-6 p-3">
                        <input type="text" class="form-control border-0" id="inputName" readonly value="{{$users->lastname}}">
                    </div>
                    
                    
                    
                    <label for="inputName" class="col-sm-6 col-form-label p-3">Prénom</label>
                    <div class="col-sm-6 p-3">
                        <input type="text" class="form-control border-0 " id="inputName" readonly value="{{$users->firstname}}">
                    </div>
                    
                    
                    <label for="inputEmail" class="col-sm-6 col-form-label p-3">Email</label>
                    <div class="col-sm-6 p-3">
                        <input type="text" class="form-control border-0" id="inputEmail" readonly value="{{$users->email}}">
                    </div>

                    <label for="inputmobile" class="col-sm-6 col-form-label p-3">Téléphone</label>
                    <div class="col-sm-6 p-3">
                        <input type="text" class="form-control border-0" id="inputmobile" readonly value="{{$users->mobile}}">
                    </div>
                    
                    <label for="inputName2" class="col-sm-6 col-form-label p-3">Date d'enregistrement</label>
                    <div class="col-sm-6 p-3">
                        <input type="text" class="form-control border-0" id="inputName2"  value="{{ Auth::user()->created_at->format('D d M Y') }}" readonly>
                    </div>
                    </div>
                    </div>
                    
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Envoyer un email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <form class="mt-8 space-y-6" action=" {{route('sendEmail')}}" method="POST">
           
                @csrf
                <div class="shadow-sm -space-y-px mb-3">
                    <div>
                        <label for="emailAddress">Email Address: </label>
                        <input class="form-control" name="emailAddress" type="email" required class="border-none" placeholder="Email Address" value="{{$users->email}}">
                    </div>
                </div>

                <div class="shadow-sm -space-y-px mb-3">
                    <div>
                        <label for="message">Message :</label>
                        <textarea name="message" type="text" required  placeholder="Message" class="form-control" rows="6"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success">Envoyez le mail</button>
            </form>
        </div>
    </div>
</div>





{{-- <!-- Lastname Field -->
<div class="col-sm-12">
    {!! Form::label('lastname', 'Lastname:') !!}
    <p>{{ $users->lastname }}</p>
</div>

<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $users->firstname }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $users->email }}</p>
</div>

<!-- Role Field -->
<div class="col-sm-12">
    {!! Form::label('role', 'Role:') !!}
    <p>{{ $users->role }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', 'Img:') !!}
    <p>{{ $users->img }}</p>
</div>

<!-- Mobile Field -->
<div class="col-sm-12">
    {!! Form::label('mobile', 'Mobile:') !!}
    <p>{{ $users->mobile }}</p>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $users->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $users->password }}</p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $users->remember_token }}</p>
</div>
 --}}
