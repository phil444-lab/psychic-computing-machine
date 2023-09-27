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
}