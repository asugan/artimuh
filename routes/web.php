<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

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
    return view('index');
});
Route::get('/postekle',[ImageUploadController::class,'addImage'])->name('images.add');
Route::get('/hakkimizda', function () {
    return view('hakkimizda');
});
Route::get('/iletisim', function () {
    return view('iletisim');
});
Route::get('/belgeler', function () {
    return view('belgeler');
});

Route::get('/{postdata}/postedit', [ImageUploadController::class, 'edit']);
Route::put('/{postdata}/postedit', [ImageUploadController::class, 'update']);
Route::delete('{postdata}/postedit', [ImageUploadController::class, 'destroy'])->name('delete');


Route::get('/calismalarimiz',[ImageUploadController::class,'viewImage'])->name('images.view');

Route::get('/{postdata}', [ImageUploadController::class, 'show']);

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');