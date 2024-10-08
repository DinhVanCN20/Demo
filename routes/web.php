<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Models\UserGame;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Route::get('/', function () {
//     return view('tintuc.index');
// })->name('index');
// Route::get('/dashboard', [Admin::class, 'test'])-> middleware('admin')->name('dashboard');

            /*Cổng tin tức*/
Route::get('/', [NewsController::class, 'index'])->name('index');
Route::get('/sukien', [NewsController::class, 'sukien']);
Route::get('/thongtin', function () {
    return view('tintuc.thongtin');
});
Route::get('/napthe', function () {
    return view('user.napthe');
});

Route::get('/tintuc', [NewsController::class, 'tintuc']);

/*USER đăng nhập đk tài khoản*/
Route::get('/dangky',[UserController::class, 'dangky']);
Route::post('/dangky', [UserController::class, 'dangky_post']);
Route::get('/dangnhap',[UserController::class, 'dangnhap'])->name('dangnhap');
Route::post('/dangnhap',[UserController::class, 'dangnhapUser'])->name('dangnhap-user');
Route::get('/logoutUser', [UserController::class, 'logout']);

/*ADMIN quản lý user*/
Route::get('/test/list', [Admin::class, 'post_list'])->name('list')-> middleware('admin');

Route::get('/test/editUser/{id}',[Admin::class, 'editUser'])->name('edit');
Route::post('/test/editUser/{id}',[Admin::class, 'editUser_post']);

Route::get('/delete/{id}',[Admin::class, 'deleteUser'])->name('user.delete');

/*ADMIN quản lý tin tức*/
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::get('/test', [Admin::class, 'test'])-> middleware('admin');
Route::get('/test/add', [Admin::class, 'test_add'])-> middleware('admin');
Route::post('/test/add', [Admin::class, 'test_add']);
Route::get('/test/edit/{id}', [Admin::class, 'test_edit']);
Route::post('/test/edit/{id}', [Admin::class, 'test_edit']);
Route::get('/admin/post/delete/{id}', [Admin::class, 'post_delete']);
Route::post('/admin/post/delete/{id}', [Admin::class, 'post_delete']);

/*ADMIN quản lý sự kiện*/
Route::get('/test/event', [Admin::class, 'event_add'])-> middleware('admin');
Route::post('/test/event', [Admin::class, 'event_add']);
Route::get('/test/event/edit/{id}', [Admin::class, 'event_edit']);
Route::post('/test/event/edit/{id}', [Admin::class, 'event_edit']);
Route::get('/test/event/delete/{id}', [Admin::class, 'event_delete']);
Route::post('/test/event/delete/{id}', [Admin::class, 'event_delete']);  

/*ADMIN đăng nhập đk tk, đăng xuất*/
Route::get('/admin', [Admin::class, 'admin'])->name('signin');
Route::post('/admin', [Admin::class, 'adminLogin'])->name('Login');
Route::get('/admin/signup', [Admin::class, 'signup'])->name('signup');
Route::post('/admin/signup', [Admin::class, 'signup_post']);
Route::get('/logout', [Admin::class, 'logout']);


require __DIR__.'/auth.php';
