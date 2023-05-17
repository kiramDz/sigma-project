<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

// Untuk mengarahkan ke bagian halama
Route::get('/', function () {
    return view('hero');
});

// Route::get('/testimonial', function (){
//     return view('testimonial');
// } );

// Menentukan bahwa ini adalah route dengan metode HTTP GET yang dituju ke URL '/testimonial'. Ketika URL ini diakses, route ini akan ditangani.
// Mengacu pada method 'card' yang ada di dalam kelas 'DataController'. Method ini akan dieksekusi saat route diakses.
// Memberikan nama 'testimonial' kepada route ini.
Route::get('/testimonial',[DataController::class, 'card'])->name('testimonial');

Route::get('/contact', function (){
    return view('contact');
} );

Route::get('/create', function(){
    return view('blog.create');
});
Route::get('/view/{id}', [DataController::class, 'view'])->name('view.data');


Route::post('/store', [DataController::class, 'store'])->name('store');
