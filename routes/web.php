<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\ThreadController; 
use App\Http\Controllers\ProfilController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/thread', [ThreadController::class, 'index'])->name('thread');
Route::post('/thread', [ThreadController::class, 'posted']);
Route::delete('/thread/{id}', [ThreadController::class, 'supp'])->name('supp_post');

Route::get('/profil', [ProfilController::class, 'showProfil'])->name('profil');
Route::post('/profil', [ProfilController::class, 'modifier']);




