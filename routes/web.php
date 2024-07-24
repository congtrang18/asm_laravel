<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\QLTKController;
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

Route::get('/', [TrangChuController::class, 'index'])->name('trangchu');
Route::get('/find', [TrangChuController::class, 'find'])->name('find');


Route::get('form-dang-ky', [UserController::class, 'formdangky'])->name('form-dang-ky');
Route::post('dang-ky', [UserController::class, 'store'])->name('dang-ky');

Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::post('changpassword', [UserController::class, 'changepassword'])->name('changpassword');


Route::get('my-acount', [UserController::class, 'myacount'])->name('myacount');


Route::get('formlogin', [UserController::class, 'create'])->name('formlogin');
Route::get('profile',function(){
    return view('client.profile.index');
});



Route::get('detail/{id}/{slug}', [DetailController::class, 'index'])->name('detail');
Route::post('comment', [DetailController::class, 'comment'])->name('comment');
Route::get('showform')->name('showform');
// Route::get('admin', function () {
// });
Route::prefix('admin')->middleware('authadmin')
    ->as('admin.')
    ->group(function () {
        Route::get("/", function () {
            return view('admin.dashboard');
        });
        Route::resource('tag', TagController::class);
        Route::resource('post', PostController::class);
        Route::get('user',[QLTKController::class,'index'])->name('user');
        Route::get('user/update',[QLTKController::class,'update']);
        Route::get('user/destroy/{id}',[QLTKController::class,'destroy'])->name('user.destroy');


    });
