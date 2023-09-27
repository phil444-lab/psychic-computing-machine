@extends('template')

@section('titre')
    Thread
@endsection

@section('retour')
    <a href="{{ route('login') }}" class="btn bg-light text-dark position-relative ms-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Retour vers la page de connexion">Retour</a>
@endsection

@section('contenu')
    <div class="container align-items-center">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card p-4">
                    <div class=" image d-flex flex-column justify-content-center align-items-center"> 
                        <button class="btn btn-secondary"> <img src=" " height="100" width="100" /></button> 
                        @if($user)
                            <span class="name mt-3">{{ $user->name }}</span>
                            <span class="name">{{ $user->username }}</span>
                            <span class="idd">{{ $user->pseudo }}</span>
                            <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                <span><i class="bi bi-person-fill"></i></span>  
                                <span class="idd1">{{ $user->id }}</span> 
                            </div>
                        @endif
                        <div class=" d-flex mt-2">
                            <a href="{{ route('profil') }}" class="btn btn-dark bg-gradient">Modifier le profil</a>
                        </div> 
                        <div class="text mt-3">
                            <button type="button" class="btn btn-dark bg-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                AJOUTER
                            </button>
                        </div> 
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nouveau Post</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form" action="{{ route('thread') }}" method="post" name="message">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="thread" class="form-control" placeholder="New message"/>
                                                <button type="submit" class="btn btn-dark mt-4">Ajouter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-3 mt-5 icons d-flex flex-row justify-content-center align-items-center"> 
                            <span class="bg-dark bg-gradient p-1 rounded-3 text-light">ThreadsApp</span>
                        </div> 
                    </div>        
                </div>
            </div>


            <div class="col-12 col-md-8 mt-4">
                <div class="card p-4">
                    @foreach ($threads as $newThread)
                        <div class="card bg-dark bg-gradient mb-2">
                            <div class="card-body p-2 p-sm-3">
                                <h6><strong class="text-light fs-4">{{ $newThread->pseudo }}</strong></h6>
                                <p class="text-light">
                                    <span><i class="bi bi-caret-right-fill"></i></span>
                                    <span class="ms-3">{{ $newThread->thread }}</span>
                                </p>
                                <p class="text-light text-end fw-light fs-6">Posté le, <em class="text-light">{{ $newThread->created_at->format('d/m/Y à H:i') }}</em></p>
                            </div>
                        </div>
                    @endforeach    
                </div>
            </div>
        </div>
    </div>
@endsection