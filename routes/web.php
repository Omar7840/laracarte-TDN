<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Mail\ContactMessageMail;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('pages/about', [PageController::class, 'about'])->name('pages.about');
Route::get('/test-mail', [ContactController::class, 'store']);
/* Route::get('/test-mail', function(){
    return new ContactMessageMail('Omar', 'nana@gmail.com', 'Bonsoir, comment vous allez');
}); */

Route::get('/contacts', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');
