<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ThreadRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\inscription;
use App\Models\threadlist;

class ThreadController extends Controller
{
    public function index()
    {
        $user = inscription::select('id', 'name', 'username', 'pseudo')->where('id', auth()->id())->first();
        $threads = threadlist::orderBy('created_at', 'desc')->get();
        $newThread = threadlist::where('id', auth()->id())->first();
        if ($newThread) {
            $newThread->pseudo = $user->pseudo;
            $newThread->save();
        }
        return view('thread', ['user' => $user, 'threads' => $threads]);
    }

    public function posted(ThreadRequest $ThreadRequest)
    {
        $user = inscription::select('id', 'name', 'username', 'pseudo')->where('id', auth()->id())->first();
        $threads = threadlist::orderBy('created_at', 'desc')->get();
        $newThread = new threadlist();
        $newThread->pseudo = $user->pseudo; 
        $newThread->thread = $ThreadRequest->input('thread');
        $user->threadlists()->save($newThread);
        return redirect()->route('thread');
    }

    public function supp($id)
    {
        $user = inscription::select('id', 'name', 'username', 'pseudo')->where('id', auth()->id())->first();
        $delThread = threadlist::find($id);

        if ($user->pseudo == $delThread->pseudo){
            $delThread->delete();    
            return redirect()->route('thread');
        }
        else{
            return redirect()->route('thread')->with('error', 'Vous n\'êtes pas autorisé à supprimer ce post.');
        }
    }
    
}
