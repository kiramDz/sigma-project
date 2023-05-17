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

Route::get('/', function () {
    return view('hero');
});

// Route::get('/testimonial', function (){
//     return view('testimonial');
// } );

Route::get('/testimonial',[DataController::class, 'card'])->name('testimonial');

Route::get('/contact', function (){
    return view('contact');
} );

Route::get('/create', function(){
    return view('blog.create');
});
Route::get('/view/{id}', [DataController::class, 'view'])->name('view.data');


Route::post('/store', [DataController::class, 'store'])->name('store');
