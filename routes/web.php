<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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

Route::get('/',[PostController::class,'index'])->name('home');

Route::get('posts/{post:slug}',[PostController::class,'show']);
Route::post('posts/{post:slug}/comment',['PostCommentsController','store']);



Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');
Route::post('logout',[SessionController::class,'destroy'])->middleware('auth');

Route::get('authors/{author:username}', function(User $author){

    return view('posts.index',[
        'posts' => $author->posts,
        ]);
});

Route::get('ping',function(){
    $mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
	'apiKey' => config('services.mailchimp.key'),
	'server' => 'us14'
]);

$response = $mailchimp->ping->get();
ddd($response);
});