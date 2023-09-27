@extends('template')

@section('titre')
    Modifier votre profil
@endsection

@section('contenu')
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <p><span class="bg-dark bg-gradient p-2 rounded-3 fw-bold fs-3 text-light text-center d-grid gap-2 col-6 mx-auto">
            Changer vos informations
        </span></p>
        <div class="tab-content py-5 px-4 mx-5 border border-3 border-dark bg-gradient rounded-4">
            <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form class="form" action="{{ route('profil') }}" method="post">
                    @csrf 
                    <div class="form-outline mb-4">
                        <input type="text" id="registerName" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror"/>
                        <label class="form-label" for="registerName">Nom</label>
                        @if($errors->has('name'))
                        <div class="alert alert-danger">
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        </div>
                        @endif
                    </div>
            
                    <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" value="{{ old('username') }}" name="username" class="form-control @error('username') is-invalid @enderror"/>
                        <label class="form-label" for="registerUsername">Prénoms</label>
                        @if($errors->has('username'))
                        <div class="alert alert-danger">
                            <p class="help is-danger">{{ $errors->first('username') }}</p>
                        </div>
                        @endif
                    </div>
                   
                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror"/>
                        <label class="form-label" for="registerEmail">Adresse mail</label>
                        @if($errors->has('email'))
                        <div class="alert alert-danger">
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        </div>
                        @endif
                    </div>
                   
                    <div class="form-outline mb-4">
                        <input type="text" id="registerPseudo" value="{{ old('pseudo') }}" name="pseudo" class="form-control @error('pseudo') is-invalid @enderror"/>
                        <label class="form-label" for="registerPseudo">Pseudonyme</label>
                        @if($errors->has('pseudo'))
                        <div class="alert alert-danger">
                            <p class="help is-danger">{{ $errors->first('pseudo') }}</p>
                        </div>
                        @endif
                    </div>
                    
                    <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" name="password" class="form-control @error('password') is-invalid @enderror"/>
                        <label class="form-label" for="registerPassword">Mot de passe</label>
                        @if($errors->has('password'))
                        <div class="alert alert-danger">
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        </div>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-outline-dark mb-3 d-grid gap-2 col-sm-3 col-md-6 mx-auto">Valider</button>
                </form>
            </div> 
        </div>
    </div>
@endsection