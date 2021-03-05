<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Mail\MailDeliver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');
Route::get('/home', function () {
    return view('home');
})->name('home');



Route::get('publish', [HomeController::class, 'index'])->name('publish');
Route::post('publish', [HomeController::class, 'create'])->name('publish.create');
Route::get('mail/{mail}', [HomeController::class, 'mail']);
Route::get('subscribe', [HomeController::class, 'subscribe']);

Route::get('tags', [TagController::class, 'index'])->name('tags');
Route::get('tags/create', [TagController::class, 'create'])->name('tags.create');
Route::post('tags/create', [TagController::class, 'create'])->name('tags.create');
Route::get('tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');;
Route::get('tags/{tag}/delete', [TagController::class, 'delete'])->name('tags.delete');;
Route::get('tags/{tag}', [TagController::class, 'show'])->name('tags.show');;

//预览邮件
Route::get('preview', [HomeController::class, 'preview']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
