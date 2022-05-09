<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\Example\SecondController;
use App\Http\Controllers\LearnController;
use Illuminate\Http\Request;

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


Route::get('/about',function(Request $Request){
    //$token = $Request->session()->token();
    
    // $token = csrf_token();
    
    // dd($token);
    
    // return view('about');
    // return response("About Page");
    
    return view('about');
    
    
})->name('about.us');

Route::get('/country',function(){
    return view('country');
})->middleware('country');




// student store route
Route::post('student/store',[FirstController::class,'studentStore'])->name('student.store');

Route::get('/testone',[SecondController::class,'test']);

// laravel
Route::get('/laravel',[FirstController::class,'laravel'])->name('laravel');

Route::get('/test',function(Request $request){
    // set session
    // $request->session()->put('email','bhbuonsd3@gmail.com');
    // session(['username','Bhubon']);
    
    
});
Route::get('/all',function(Request $request){
    // get all session data
    return $request->session()->all();
    // $request->session()->flush();
});

// store contact route
Route::post('store/contact',[FirstController::class,'store'])->name('store.contact');



// Route::view('/about','about');

// Route::get('/contact',function(){
//     return view('contact');
//     // return "My roll is $roll";
//     // return redirect('/about');
// })->name('contact-us');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact.us');

// laravel 7
// Route::get('/contact', 'Example/FirstController@index')->name('contact.us');

// laravel 8
Route::get('/contact', [FirstController::class,'index'])->name('contact.us');

// invokable route
Route::get('/country',[FirstController::class,'country'])->name('country')->middleware('country');


// Route::get('/test',LearnController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
