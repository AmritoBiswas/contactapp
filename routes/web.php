<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;

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


Route::get('/', WelcomeController::class);

Route::controller(ContactController::class)->group(function(){
    Route::get("/contacts", 'ContactController')->name('contacts.index');
    Route::get('id/{id}', 'show')->name('contacts.show');   
    Route::get("/contacts/creates", 'create')->name('contacts.creates'); 
    Route::get('/companies/{name?}','companies');
});

