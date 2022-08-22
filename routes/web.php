<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;
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


//kolam
//kolam create
Route::post('kolam/set',[FirebaseController::class, 'set'])->middleware('auth');
Route::get('kolam/create',[FirebaseController::class, 'create'])->middleware('auth');
//kolam delete
Route::get('kolam/delete/{namaKolam}',[FirebaseController::class, 'delete'])->middleware('auth');
//kolam read
Route::get('read',[FirebaseController::class, 'read']);
Route::get('kolam/{namaKolam}',[FirebaseController::class, 'detail'])->middleware('auth');
Route::get('kolam/detail/{namaKolam}',[FirebaseController::class, 'detailApi'])->middleware('auth');
// kolam edit
Route::get('kolam/edit/{kodeKolam}',[FirebaseController::class, 'edit'])->middleware('auth');
Route::post('kolam/setupdate',[FirebaseController::class, 'update'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\FirebaseController::class, 'read'])->name('home')->middleware('auth');

// Notif
Route::patch('/fcmToken', [FirebaseController::class, 'updateToken'])->name('fcmToken');
Route::post('/send-notification',[FirebaseController::class,'notification'])->name('notification');