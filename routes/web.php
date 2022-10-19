<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontsite\DetailEventController;
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AddEventController;
use App\Http\Controllers\Frontsite\SuccessAddController;

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

Route::resource('/',LandingController::class); 
Route::resource('Add-Event', AddEventController::class);
Route::resource('Add/success', SuccessAddController::class);


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

   
    Route::resource('Detail-Event', DetailEventController::class);
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
