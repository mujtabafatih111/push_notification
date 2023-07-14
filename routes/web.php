<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Jobs\SentEmailJob;

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
Route::get('sentE', function(){

    $details['email'] = 'mujtabafatih111@gmail.com';

    dispatch(new SentEmailJob($details));

    dd('done');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/view', [App\Http\Controllers\HomeController::class, 'view'])->name('view');
Route::get('/master', [App\Http\Controllers\HomeController::class, 'master'])->name('master');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/save-token', [App\Http\Controllers\HomeController::class, 'saveToken'])->name('save-token');
Route::post('/send-notification', [App\Http\Controllers\HomeController::class, 'sendNotification'])->name('send.notification');

Route::get('/category', function () {

    // $categ=App\Models\Category::orderBy('name','ASC')
    // ->with('subcategory')
    // ->get();

    $brand = App\Models\Product::with('brand')
        ->get();

    $category = App\Models\Product::with('category')
        ->get();

    $scategory = App\Models\Product::with('subcategory')
        ->get();

    dd($scategory);




})->name('category');
