<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AddressController;
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

// Route::get('/index', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name("home");

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])-> group(function() {
    Route::get('/index', [MainController::class, 'showUser'])->name("account");

    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');

    Route::get('/posts', [MainController::class, 'showAddresses'])->name("allPosts");

    Route::get('/posts/newPost', function () {
        return view('posts/newPost');
    })->name('newPost');

    Route::get('/posts/{location}', [AddressController::class, 'showSpecific'])->name("postDetail");

    Route::get('/adding/newPost', function () {
        return view('adding/newPost');
    })->name('newPost');

    Route::post('adding/addPost', [AddressController::class, 'store']);

    Route::get('/deletePost/{id}', [MainController::class, "deletePost"]);

    Route::get('/animals', [MainController::class, 'showAnimals'])->name("animals");

    Route::get('/animals/{id}', [AnimalController::class, 'showSpecific'])->name("animalDetail");

    Route::get('/adding/newAnimal', function () {
        return view('adding/newAnimal');
    })->name('newAnimal');

    Route::post('adding/addAnimal', [AnimalController::class, 'store']);

    Route::get('/deleteAnimal/{id}', [MainController::class, "deleteAnimal"]);


    Route::post('/animals/filter', [AnimalController::class, 'filter'])->name('animals.filter');

    Route::post('/animals/clearFilter', [AnimalController::class, 'clearFilter'])->name('animals.clearFilter');
});

Route::middleware(['auth', 'owner'])-> group(function() {
    Route::get('/remove', [MainController::class, 'showAll'])->name("remove");
});

require __DIR__.'/auth.php';
