<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadualController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

/**
 * BOOKS CONTROLLER
 *
 *
 *
 */

//terima data baru
Route::get('/book/create', [BookController::class, 'create'])->name('book-create');

 //tunjuk 1 book
Route::get('/book/{id}', [BookController::class, 'show'])->name('book-single');


//tunjuk edit book
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book-edit');

//tunjuk terima edit
Route::post('/book/{id}', [BookController::class, 'update'])->name('book-update');

//delete book
Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('book-destroy');

//tunjuk semua book
Route::get('/books', [BookController::class, 'index'])->name('book-listing');

//store data baru
Route::post('/book', [BookController::class, 'store'])->name('book-store');

//keluarkan author dengan buku
Route::get('/authors', [BookController::class, 'authors'])->name('author-listing');


// redirect
Route::redirect('/seri', '/');

// view
Route::view('/pelajar', 'pelajar'
    , ['nama' => 'Seri']
);


 //Route dengan verb khusus
 Route::get('/kelas', function () {
    return view('go');
 });

 Route::post('/kelas', function () {
    echo "<h1>POST --Kelas Programming</h1>";
 });


//parameter

 Route::get('/welcome/{nama?}',
    function($nama = 'Seri'){
    echo "<h1>Nama saya $nama</h1>";
});


Route::resource('user', UserController::class);


/**
 *GET - guna untuk papar data
 *POST - guna untuk terima dan simpan data
 *PUT - edit update
 *PATCH - edit update
 *DELETE
 *OPTION
 */

//controller

// Route::get('/jadual/{subjek}',
//     [JadualController::class, 'index']
// );


//  Route::delete('/kelas', function () {
//      //
//  });

//  Route::put('/kelas', function () {
//     //
// });

//  Route::patch('/kelas', function () {
//     //
// });

//  Route::options('/kelas', function () {
//    //
// });

// model binding
// model ada table dalam database
// use App\Models\Teacher;
// // http://aplikasi.test/techers//1
// Route::get('/techers'/{teacher},
//     function (Teacher $teacher){
//         echo "<h1>Nama guru $teacher->nama</h1>";
//     }
//     ');
// ')

// naming
// boleh guna secara {{route ('login')}}
// atau guna redirect ('login')

// Route::get('/please/login',
// [
//     AuthController::class, 'login'
// ]) ->name ('login');

//grouping namespace

// Route::prefix('admin.')->middleware('auth')->group(function(){

//     // name: admin.index
//     // url: /admin/user
//     Route::get('/user', UserController::class, 'index')->name('index');

//     // name: admin.show
//     // url: /admin/user
//     Route::get('/user/{id}', UserController::class, 'show')->name('show');

//     // name: admin.create
//     // url: /admin/user (POST)
//     Route::post('/user', UserController::class, 'create')->name('create');

//     // name: admin.edit
//     // url: /admin/user/{id}/edit
//     Route::get('/user/{id}/edit', UserController::class, 'edit')->name('edit');

//     // name: admin.update
//     // url: /admin/user/{id} (POST)
//     Route::post('/user/{id}', UserController::class, 'update')->name('update');
// });

