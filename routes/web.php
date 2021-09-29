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
Route::get('/', 'App\Http\Controllers\MyController@index')->name('welcome');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::post('/uploadimage', 'App\Http\Controllers\MyController@uploadimage')->middleware(['auth'])->name('uploadimage');

Route::post('/editgallerysave', 'App\Http\Controllers\MyController@editgallerysave')->middleware(['auth'])->name('editgallerysave');

Route::get('/gallery', 'App\Http\Controllers\MyController@gallery')->name('gallery');

Route::get('/upload', 'App\Http\Controllers\MyController@upload')->middleware(['auth'])->name('upload');

Route::get('/editgallery/{id}', 'App\Http\Controllers\MyController@editgallery')->middleware(['auth'])->name('editgallery');

Route::get('/deleteimage/{id}', 'App\Http\Controllers\MyController@deleteimage')->middleware(['auth'])->name('deleteimage');




//Route::get('/contactus', function () {
//    return view('contact');
//})->name('contactus');

Route::get('/contactus', 'App\Http\Controllers\MyController@contactus')->name('contactus');
Route::post('/savecontactus', 'App\Http\Controllers\MyController@savecontactus')->name('savecontactus');

Route::get('/about', 'App\Http\Controllers\MyController@about')->name('about');

Route::get('/worktable', 'App\Http\Controllers\MyController@worktable')->name('worktable');
Route::get('/work', 'App\Http\Controllers\MyController@workuser')->name('workuser');

Route::post('/work', 'App\Http\Controllers\MyController@viewwork')->name('viewwork');

Route::post('save', 'App\Http\Controllers\MyController@saveForm')->name('sendcontact');

Route::post('saveworkuser', 'App\Http\Controllers\MyController@saveworkuser')->name('saveworkuser');

Route::get('/deletework/{id}', 'App\Http\Controllers\MyController@deletework')->middleware(['auth'])->name('deletework');

Route::get('/gitpull', function () {
    \Artisan::call('app:refresh');
    \Artisan::call('cache:clear');
    
    }); 
    Route::post('/gitpull', function () {
    \Artisan::call('app:refresh');
    \Artisan::call('cache:clear');
    
    });
    