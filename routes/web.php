<?php

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
    // dd(app());
    return view('welcome');
    // Hunter::test();
});


Route::get('/about',function(){
    return view('about');
});

Route::get('/country',function(){
    return view('country');
})->middleware('country');

// Route::view('/about','about');

// Route::get('/contact',function(){
//     return view('contact');
//     // return "My roll is $roll";
//     // return redirect('/about');
// })->name('contact-us');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.us');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
