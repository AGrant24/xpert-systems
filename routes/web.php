<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;

use App\Models\Client;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/** Client routes */
Route::post('/client/addclient', [ClientController::class, 'AddClient'])->name('store.client');
Route::get('/client/all', [ClientController::class, 'AllClient'])->name('all.client');
// Client's unique page
Route::get('/client/{id}', [ClientController::class, 'ViewClient'])->name('client.view');
// Clients data update
