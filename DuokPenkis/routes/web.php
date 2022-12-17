<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\PrekeController;
use App\Http\Controllers\ProfileController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('/kategorija')->group(function() {    
    Route::get('/create', [KategorijaController::class, 'create'])->name('kategorija.create');
    Route::get('/', [KategorijaController::class, 'index'])->name('kategorija.index');
    Route::get('/{id}', [KategorijaController::class, 'show'])->name('kategorija.show');
    Route::post('/', [KategorijaController::class, 'store'])->name('kategorija.store');
    Route::get('/edit/{id}', [KategorijaController::class, 'edit'])->name('kategorija.edit');
    Route::patch('/{id}', [KategorijaController::class, 'update'])->name('kategorija.update');
    Route::delete('/{id}', [KategorijaController::class, 'destroy'])->name('kategorija.destroy');
});


//Route::resource('blog', KategorijaController::class);
Route::prefix('/')->group(function() {
    Route::get('/create', [PrekeController::class, 'create'])->name('preke.create');
    Route::get('/', [PrekeController::class, 'index'])->name('preke.index');
    Route::get('/{id}', [PrekeController::class, 'show'])->name('preke.show');
    Route::post('/', [PrekeController::class, 'store'])->name('preke.store');
    Route::get('/edit/{id}', [PrekeController::class, 'edit'])->name('preke.edit');
    Route::patch('/{id}', [PrekeController::class, 'update'])->name('preke.update');
    Route::delete('/{id}', [PrekeController::class, 'destroy'])->name('preke.destroy');
});

//Route::match(['GET', 'POST'], '/blog', [KategorijaController::class, 'index']);
//Route::any('/blog', [KategorijaController::class, 'index']);


//Return a view
//Route::view('/blog', 'Kategorija.index', ['name' => 'hihi']);

//Fallback route
Route::fallback(FallbackController::class);



    //     Schema::create('preke', function (Blueprint $table) {
    //         $table->string('pavadinimas')->unique();
    //         $table->double('kaina');
    //         $table->text('aprasymas')->nullable();
    //         $table->string('nuotrauka');
    //         $table->integer('kiekis')->nullable();
    //         $table->integer('dydis');
    //         $table->string('prekiniszenklas');
    //         $table->integer('spalva')->nullable();
    //         $table->integer('lytis')->nullable();
    //         $table->integer('bukle')->nullable();
    //         $table->integer('medziagos_tipas')->nullable();
    //     });
