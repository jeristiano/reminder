<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Livewire\Counter;
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
    return view('welcome');
});

Route::get('/counter', [TestController::class,'index']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





Route::get('publish', [HomeController::class, 'index'])->name('publish');
Route::post('publish', [HomeController::class, 'create'])->name('publish.create');
Route::get('mail/{mail}', [HomeController::class, 'mail']);
Route::get('subscribe', [HomeController::class, 'subscribe']);


Route::get('content/{tag?}', [ContentController::class, 'index'])->name('content');
Route::get('content/{id}/edit', [ContentController::class, 'edit'])->name('content.edit');
Route::put('content/{id}', [ContentController::class, 'update'])->name('content.update');
Route::get('content/delete/{id}', [ContentController::class, 'delete'])->name('content.delete');



Route::get('tags', [TagController::class, 'index'])->name('tags');
Route::get('tags/create', [TagController::class, 'create'])->name('tags.create');
Route::post('tags/create', [TagController::class, 'create'])->name('tags.create');
Route::get('tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');;
Route::put('tags/{tag}', [TagController::class, 'update'])->name('tags.save');;
Route::get('tags/{tag}/delete', [TagController::class, 'delete'])->name('tags.delete');;

//订阅

Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions');
Route::get('subscriptions/create', [SubscriptionController::class, 'create'])->name('subscriptions.create');
Route::post('subscriptions/create', [SubscriptionController::class, 'create'])->name('subscriptions.create');
Route::get('subscriptions/{sub}/edit', [SubscriptionController::class, 'edit'])->name('subscriptions.edit');;
Route::put('subscriptions/{sub}', [SubscriptionController::class, 'update'])->name('subscriptions.save');;
Route::get('subscriptions/{sub}/delete', [SubscriptionController::class, 'delete'])->name('subscriptions.delete');;

//预览邮件
Route::get('preview/{id}', [HomeController::class, 'preview'])->name('preview');
