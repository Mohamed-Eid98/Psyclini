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



Route::get('/' , function(){
    return view('html.index');
})->name('home');


Route::get('articles' , function(){
    return view('html.articles');
});
Route::get('games' , function(){
    return view('html.games');
})->name('games');
Route::get('game1' , function(){
    return view('html.game1');
})->name('game1');
Route::get('game2' , function(){
    return view('html.game2');
})->name('game2');
Route::get('tests' , function(){
    return view('html.tests');
})->name('tests');
Route::get('test1' , function(){
    return view('html.test1');
})->name('test1');
Route::get('test2' , function(){
    return view('html.test2');
})->name('test2');
Route::get('test3' , function(){
    return view('html.test3');
})->name('test3');
Route::get('test4' , function(){
    return view('html.test4');
})->name('test4');


Route::get('test' , function(){
    return view('html.test');
});
Route::get('/sign in' , function(){
    return view('html.Sign In');
})->name('signin');
Route::get('/signin doctor' , function(){
    return view('html.Sign In doctor');
})->name('doctor.signin');
Route::get('/signUp' , function(){
    return view('html.Sign UP');
})->name('signUp');

Route::get('blog', [PostController::class, 'index'] )->name('blog');
Route::post('blog', [PostController::class, 'store'] )->middleware('isPatient')->name('posts.store');
Route::get('blog/search', [PostController::class, 'search'] )->name('post.search');

Route::get('blogPage/{id}', [CommentController::class, 'show'] )->name('blog.page');
//Route::get('comment post/{id}', [CommentController::class, 'store']);
Route::get('doctors' , [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/doctor/profile/' , [DoctorController::class, 'show_profile'])->name('doctor.profile');
Route::get('doctors/profile/book' , [DoctorController::class, 'book'])->middleware('isPatient')->name('book.store');
Route::get('doctors/search' , [DoctorController::class, 'search'])->name('doctors.search');
Route::post('Patientdash' , [PatientController::class, 'PostRegisteration'])->name('patient.data');
Route::get('Patientdash' , [PatientController::class, 'PostRegisteration']);
Route::post('loginhome' , [PatientController::class, 'postLogin'])->name('patient.login');
Route::post('doctorlogin' , [DoctorController::class, 'postLogin'])->name('doctor.login');



Auth::routes();


//dashboard of doctor

// Route::middleware(['isDoctor'])->group(function () {

Route::get('doctor-index', [DoctorController::class, 'doctor_index'])->name('doctor.index');
Route::get('requests status', function(){
    return view('doctor-dashboard.requests status');
})->name('doctor.status');
Route::get('requests modifications', function(){
    return view('doctor-dashboard.request modifications');
})->name('doctor.modifications');
Route::get('create post', [DoctorController::class, 'create_post'])->name('doctor.post');
Route::get('publish article', function(){
    return view('doctor-dashboard.publish article');
})->name('doctor.article');
    
// });








