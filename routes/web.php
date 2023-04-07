<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
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
})->name("welcome");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])-> group(function() {
    Route::get('/index', function () {
        return view('index');
    })->name("home");

    Route::get('/posts', [MainController::class, 'showAddresses'])->name("allPosts");

    Route::get('/posts/newPost', function () {
        return view('posts/newPost');
    })->name('newPost');

    Route::get('/animals', [MainController::class, 'showAnimals'])->name("animals");

    Route::get('/animals/newAnimal', function () {
        return view('animals/newAnimal');
    })->name('newAnimal');

    Route::get('/animals/animalDetail', function () {
        return view('animals/animalDetail');
    })->name('animalDetail');
});


require __DIR__.'/auth.php';
