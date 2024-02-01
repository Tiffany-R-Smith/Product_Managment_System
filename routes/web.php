<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/previous', function () {
    return redirect()->back();
})->name('previous');

Route::get('/scheduleA', [ProductController::class, 'displayProducts'])->name('scheduleA');
Route::get('/collegeProducts', [ProductController::class, 'collegeProducts'])->name('collegeProducts');
Route::get('/athleisureProducts', [ProductController::class, 'athleisureProducts'])->name('athleisureProducts');
Route::get('/entertainmentProducts', [ProductController::class, 'entertainmentProducts'])->name('entertainmentProducts');
Route::get('/militaryProducts', [ProductController::class, 'militaryProducts'])->name('militaryProducts');
Route::get('/mlbProducts', [ProductController::class, 'mlbProducts'])->name('mlbProducts');
Route::get('/nbaProducts', [ProductController::class, 'nbaProducts'])->name('nbaProducts');
Route::get('/nflProducts', [ProductController::class, 'nflProducts'])->name('nflProducts');
Route::get('/nhlProducts', [ProductController::class, 'nhlProducts'])->name('nhlProducts');
Route::get('/genericProducts', [ProductController::class, 'genericProducts'])->name('genericProducts');
Route::get('/personalizationProducts', [ProductController::class, 'personalizationProducts'])->name('personalizationProducts');

Route::get('/admin/products/{product}', [ProductController::class, 'show'])->name('admin.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group (function(){
    Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});//End Group Admin Middleware

Route::middleware(['auth', 'role:agent'])->group (function(){
    Route::get('/agent/dashboard',[AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
});//End Group Agent Middleware



require __DIR__.'/auth.php';
