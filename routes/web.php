<?php

use Illuminate\Support\Facades\Route;
use App\Models\Elektronik;
use App\Models\Karyawan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ElektronikController;

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
    return view('index', []);
})->name('index')->middleware('auth');;

Route::get('/home', function () {
    return view('home', [
        "elektroniks" => Elektronik::all(),
        "karyawans" => Karyawan::all()
    ]);
})->middleware('auth');

Route::get('/login', function () {
    return view('login', [AuthController::class, 'loginView'], [
        'title' => 'Halaman Login'
    ]);
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post(
    '/action-register',
    [AuthController::class, 'actionRegister']
);

Route::get('/login', [
    AuthController::class,
    'loginView'
])->name("login");

Route::post(
    '/action-login',
    [AuthController::class, 'actionLogin']
);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('create', [ElektronikController::class, 'create'])->name('create')->middleware('auth');

Route::post('store', [ElektronikController::class, 'store'])->name('store')->middleware('auth');

Route::get('/show/{id}', [ElektronikController::class, 'show'])->name('show')->middleware('auth');
