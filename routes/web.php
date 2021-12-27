<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MAdminController;
use App\Http\Controllers\MDAdminController;
use App\Http\Controllers\MUserController;
use App\Http\Controllers\MDUserController;
use App\Http\Controllers\MMotorController;
use App\Http\Controllers\MDMotorController;
use App\Http\Controllers\MTransaksiController;
use App\Http\Controllers\MDTransaksiController;

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

// Landing Page
Route::get('/', function () {
    return view('home.index');
});

// Login Page
Route::get('/login', function () {
    return view('auth.login');
});

// Register Page
Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();
/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

/* Route::group(['middleware' => 'auth'], function () { */
    // Dashboard, Profile, Etc
    Route::view('/home', 'master.dashboard')->name('dashboard');
    Route::view('/dashboard', 'master.dashboard')->name('dashboard');
    // Route::view('/profile', 'master.profile')->name('profile');

    // Master Admin
    Route::get('/admin', [MAdminController::class, 'index']);
    Route::get('/admin/create', [MAdminController::class, 'create']);
    Route::post('/admin/store', [MAdminController::class, 'store']);
    Route::get('/admin/edit/{id}', [MAdminController::class, 'edit']);
    Route::post('/admin/update/{id}', [MAdminController::class, 'update']);
    Route::get('/admin/destroy/{id}', [MAdminController::class, 'destroy']);

    Route::get('/admin/{id}', [MAdminController::class, 'detail']);
    Route::get('/admin/detail/create', [MAdminController::class, 'detailCreate']);
    Route::post('/admin/detail/store', [MAdminController::class, 'detailStore']);
    Route::get('/admin/detail/edit/{id}', [MAdminController::class, 'detailEdit']);
    Route::post('/admin/detail/update/{id}', [MAdminController::class, 'detailUpdate']);
    Route::get('/admin/detail/destroy/{id}', [MAdminController::class, 'detailDestroy']);

    // Detail Admin
    /* Route::get('/detail_admin', [MDAdminController::class, 'index']);
    Route::get('/detail_admin/create', [MDAdminController::class, 'create']);
    Route::post('/detail_admin/store', [MDAdminController::class, 'store']);
    Route::get('/detail_admin/edit/{id}', [MDAdminController::class, 'edit']);
    Route::post('/detail_admin/update/{id}', [MDAdminController::class, 'update']);
    Route::get('/detail_admin/destroy/{id}', [MDAdminController::class, 'destroy']); */

    // Master User
    Route::get('/user', [MUserController::class, 'index']);
    Route::get('/user/create', [MUserController::class, 'create']);
    Route::post('/user/store', [MUserController::class, 'store']);
    Route::get('/user/edit/{id}', [MUserController::class, 'edit']);
    Route::post('/user/update/{id}', [MUserController::class, 'update']);
    Route::get('/user/destroy/{id}', [MUserController::class, 'destroy']);

    Route::get('/user/{id}', [MUserController::class, 'detail']);
    Route::get('/user/detail/create', [MUserController::class, 'detailCreate']);
    Route::post('/user/detail/store', [MUserController::class, 'detailStore']);
    Route::get('/user/detail/edit/{id}', [MUserController::class, 'detailEdit']);
    Route::post('/user/detail/update/{id}', [MUserController::class, 'detailUpdate']);
    Route::get('/user/detail/destroy/{id}', [MUserController::class, 'detailDestroy']);

    // Detail User
    /* Route::get('/detail_user', [MDUserController::class, 'index']);
    Route::get('/detail_user/create', [MDUserController::class, 'create']);
    Route::post('/detail_user/store', [MDUserController::class, 'store']);
    Route::get('/detail_user/edit/{id}', [MDUserController::class, 'edit']);
    Route::post('/detail_user/update/{id}', [MDUserController::class, 'update']);
    Route::get('/detail_user/destroy/{id}', [MDUserController::class, 'destroy']); */

    // Master Motor
    Route::get('/motor', [MMotorController::class, 'index']);
    Route::get('/motor/create', [MMotorController::class, 'create']);
    Route::post('/motor/store', [MMotorController::class, 'store']);
    Route::get('/motor/edit/{id}', [MMotorController::class, 'edit']);
    Route::post('/motor/update/{id}', [MMotorController::class, 'update']);
    Route::get('/motor/destroy/{id}', [MMotorController::class, 'destroy']);

    // Detail Motor
    Route::get('/motor/{id}', [MMotorController::class, 'detail']);
    Route::get('/motor/detail/create', [MMotorController::class, 'detailCreate']);
    Route::post('/motor/detail/store', [MMotorController::class, 'detailStore']);
    Route::get('/motor/detail/edit/{id}', [MMotorController::class, 'detailEdit']);
    Route::post('/motor/detail/update/{id}', [MMotorController::class, 'detailUpdate']);
    Route::get('/motor/detail/destroy/{id}', [MMotorController::class, 'detailDestroy']);

    // Detail Motor v2
    /* Route::get('/detail_motor/{id}', [MDMotorController::class, 'detail']);
    Route::get('/detail_motor/detail/create', [MDMotorController::class, 'detailCreate']);
    Route::post('/detail_motor/detail/store', [MDMotorController::class, 'detailStore']);
    Route::get('/detail_motor/detail/edit/{id}', [MDMotorController::class, 'detailEdit']);
    Route::post('/detail_motor/detail/update/{id}', [MDMotorController::class, 'detailUpdate']);
    Route::get('/detail_motor/detail/destroy/{id}', [MDMotorController::class, 'detailDestroy']); */

    // Master Transaksi
    Route::get('/transaksi', [MTransaksiController::class, 'index']);
    Route::get('/transaksi/create', [MTransaksiController::class, 'create']);
    Route::post('/transaksi/store', [MTransaksiController::class, 'store']);
    Route::get('/transaksi/edit/{id}', [MTransaksiController::class, 'edit']);
    Route::post('/transaksi/update/{id}', [MTransaksiController::class, 'update']);
    Route::get('/transaksi/destroy/{id}', [MTransaksiController::class, 'destroy']);

    // Detail Transaksi
    /* Route::get('/transaksi/{id}', [MTransaksiController::class, 'detail']);
    Route::get('/transaksi/detail/create', [MTransaksiController::class, 'detailCreate']);
    Route::post('/transaksi/detail/store', [MTransaksiController::class, 'detailStore']);
    Route::get('/transaksi/detail/edit/{id}', [MTransaksiController::class, 'detailEdit']);
    Route::post('/transaksi/detail/update/{id}', [MTransaksiController::class, 'detailUpdate']);
    Route::get('/transaksi/detail/destroy/{id}', [MTransaksiController::class, 'detailDestroy']); */

    // Detail Transaksi v2
    /* Route::get('/detail_transaksi/{id}', [MDTransaksiController::class, 'detail']);
    Route::get('/detail_transaksi/detail/create', [MDTransaksiController::class, 'detailCreate']);
    Route::post('/detail_transaksi/detail/store', [MDTransaksiController::class, 'detailStore']);
    Route::get('/detail_transaksi/detail/edit/{id}', [MDTransaksiController::class, 'detailEdit']);
    Route::post('/detail_transaksi/detail/update/{id}', [MDTransaksiController::class, 'detailUpdate']);
    Route::get('/detail_transaksi/detail/destroy/{id}', [MDTransaksiController::class, 'detailDestroy']); */
/* } */
