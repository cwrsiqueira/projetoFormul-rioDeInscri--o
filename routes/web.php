<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignupController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('signup', [SignupController::class, 'index'])->name('signup');
Route::get('direito-de-imagem', [SignupController::class, 'direito_imagem'])->name('direito-de-imagem');
Route::get('autorizacao-pais', [SignupController::class, 'autorizacao_pais'])->name('autorizacao-pais');
Route::get('pagamento', [SignupController::class, 'pagamento'])->name('pagamento');
Route::post('registrar', [SignupController::class, 'registrar'])->name('registrar');
Route::get('register', function () {
    return redirect()->route('login');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/detalhar/{id}', [DashboardController::class, 'detalhar'])->name('detalhar');
    Route::put('/change_status/{id}', [DashboardController::class, 'change_status'])->name('change_status');
});