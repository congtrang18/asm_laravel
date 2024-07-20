<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[TrangChuController::class,'index'])->name('trangchu');
Route::get('/find',[TrangChuController::class,'find'])->name('find');


Route::post('sign-up',[UserController::class,'store'])->name('sign-up');


Route::get('detail/{id}/{slug}', [DetailController::class,'index'])->name('detail');
// Route::get('admin', function () {
// });
Route::prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::get("/",function(){
    return view('admin.dashboard');

        });
        Route::resource('tag', TagController::class);
        Route::resource('post', PostController::class);

    });
