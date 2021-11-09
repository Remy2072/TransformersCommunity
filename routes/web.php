<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::latest()->get();
    return view('index',['posts'=>$posts]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
    // return redirect('/');
})->middleware(['auth'])->name('dashboard');

Route::get('/create', function () {
    return view('create');
});

Route::post('/create',function(){
    Post::create([
        'user_id' => request('user_id'),
        'content' => request('content'),
        'picture' => request('picture')
    ]);
    return redirect('/');
});

Route::get('/post',[PostController::class,'index'])->name('posts');

require __DIR__.'/auth.php';


