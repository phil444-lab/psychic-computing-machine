@extends('template')

@section('titre')
    Connexion
@endsection

@section('retour')
    <a href="{{ route('register') }}" class="btn bg-light text-dark position-relative ms-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Retour vers la page d'inscription">Retour</a>
@endsection

@section('contenu')
    <div class="container align-items-center">
        <div class="row gy-4">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <p><span class="bg-dark bg-gradient p-2 rounded-3 fw-bold fs-3 text-light text-center d-grid gap-2 col-6 mx-auto">
                    Connectez-vous !
                </span></p>
                <div class="tab-content py-5 px-4 mx-5 border border-3 border-dark bg-gradient rounded-4">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form class="form" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-outline mb-5">
                                <input type="text" id="loginPseudo" value="{{ old('pseudo') }}" name="pseudo" class="form-control @error('pseudo') is-invalid @enderror"/>
                                <label class="form-label" for="loginPseudo">Pseudonyme</label>
                                @if($errors->has('pseudo'))
                                <div class="alert alert-danger">
                                    <p class="help is-danger">{{ $errors->first('pseudo') }}</p>
                                </div>
                                @endif
                            </div>

                            <div class="form-outline mb-5">
                                <input type="password" id="loginPassword" name="password" class="form-control @error('password') is-invalid @enderror"/>
                                <label class="form-label" for="loginPassword">Mot de passe</label>
                                @if($errors->has('password'))
                                <div class="alert alert-danger">
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                </div>
                                @endif
                            </div>
                            
                            <button type="submit" class="btn btn-outline-dark mt-5 mb-3 d-grid gap-2 col-sm-3 col-md-6 mx-auto">Connexion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection