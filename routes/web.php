<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Patient;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/' , function(){
    return view('html.index');
})->name('home');


Route::get('articles' , function(){
    return view('html.articles');
});


Route::get('test' , function(){
    return view('html.test');
});
Route::get('/sign in' , function(){
    return view('html.Sign In');
});
Route::get('/signUp' , function(){
    return view('html.Sign UP');
})->name('signUp');

Route::get('blog', [PostController::class, 'index'] );
Route::get('blog page/{id}', [CommentController::class, 'show'] );
Route::get('doctors' , [DoctorController::class, 'index']);
Route::get('doctors/search' , [DoctorController::class, 'search'])->name('doctors.search');
Route::post('Patientdash' , [PatientController::class, 'PostRegisteration'])->name('patient.data');
Route::get('Patientdash' , [PatientController::class, 'PostRegisteration']);
Route::post('loginhome' , [PatientController::class, 'postLogin'])->name('patient.login');



Auth::routes();
Route::resource('posts', PostController::class );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
