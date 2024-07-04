<?php
use App\Models\erreur;
use App\Http\Controllers\homecontroller;
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

Route::get('/',[homecontroller::class,'index'])->name('paccueil');

Route::get('/page1',[homecontroller::class,'home'])->name('page1');


Route::post('/page1',[homecontroller::class,'store'])->name('perreur');
Route::get('/rechercher', [homecontroller::class,'rechercher'])->name('rechercher');
