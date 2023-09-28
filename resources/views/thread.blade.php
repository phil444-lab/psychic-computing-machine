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
                        <img src=" " class="bg-dark rounded-circle" height="150" width="150" /> 
                        @if($user)
                            <span class="name mt-3">{{ $user->name }} {{ $user->username }}</span>
                            <span class="idd">{{ $user->pseudo }}</span>
                            <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                <span><i class="bi bi-person-fill"></i></span>  
                                <span class="idd1">{{ $user->id }}</span> 
                            </div>
                        @endif
                        <div class=" d-flex mt-4">
                            <a href="{{ route('profil') }}" class="btn btn-dark bg-gradient">Modifier le profil</a>
                        </div> 
                        <div class="text mt-3">
                            <button type="button" class="btn btn-dark bg-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-plus"></i>AJOUTER
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
                                                <input type="text" name="thread" class="form-control" placeholder="Nouveau message"/>
                                                <button type="submit" class="btn btn-dark mt-4"><i class="bi bi-send-fill"></i></button>
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


            <div class="col-12 col-md-8 mt-5">
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @foreach ($threads as $newThread)
                    <div class="card bg-dark bg-gradient mb-3">
                        <div class="card-body p-2 p-sm-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <h6><strong class="text-light fs-4">{{ $newThread->pseudo }}</strong></h6>
                                <form method="POST" action="{{ route('supp_post', ['id' => $newThread->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light bg-gradient">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>    
                            </div>
                            <p class="text-light">
                                <span><i class="bi bi-check-all"></i></span>
                                <span class="ms-3">{{ $newThread->thread }}</span>
                            </p>
                            <p class="text-light text-end fw-light fs-6">Posté le, <em class="text-light">{{ $newThread->created_at->format('d/m/Y à H:i') }}</em></p>
                        </div>
                    </div>
                @endforeach    
            </div>
        </div>
    </div>
@endsection