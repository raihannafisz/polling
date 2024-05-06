<?php

use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ProfileController;

Route::get('/', [ViewController::class, 'welcome']);
Route::get('/search', [PollController::class, 'search']);

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/home', [ViewController::class, 'index'])->name('home');

    Route::get('/polls', [PollController::class,'index']);
    Route::get('/polls/{id}', [PollController::class,'show']); // untuk melakukan polling dengan menampilkan poll yang dipilih
    Route::get('/polls/make', [PollController::class, 'make']);
    Route::post('/polls/store', [PollController::class, 'store']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
