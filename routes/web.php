<?php

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

use App\Http\Controllers\ImageController;


Route::get('dropzone', [ImageController::class, 'index']);

Route::post('dropzone/upload_image', [ImageController::class,'upload_image'])->name('dropzone.upload_image');

Route::get('dropzone/fetch_image', [ImageController::class,'fetch_image'])->name('dropzone.fetch_image');

Route::get('dropzone/delete_image', [ImageController::class,'delete_image'])->name('dropzone.delete_image');