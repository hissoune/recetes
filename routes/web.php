<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\welcomecontroller;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [welcomecontroller::class,'index'])->name('home');
// In routes/web.php

// Route::resource('/welcome', WelcomeController::class);

// Add a custom search route within the 'welcome' resource
Route::get('/welcome/search', [WelcomeController::class, 'search'])->name('welcome.search');
Route::get('/welcome/show/{recete}', [WelcomeController::class, 'show'])->name('welcome.show');
// Route::get('/recetes/show/{recete}', [welcomecontroller::class,'show'])->name('welcome.show');

Route::get('/dashboard',[WelcomeController::class, 'statistique'] )->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/recetes', RecetsController::class);

});

require __DIR__.'/auth.php';
