<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Administrator;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Gallery;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Home;
use App\Http\Controllers\Services;

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

// $users = DB::select('select * from comentarios');

Route::get('/', [Home::class, 'index']);
Route::get('/home', [Home::class, 'index'])->name('home');

Route::get('about', [About::class, 'index'])->name('about');

Route::get('gallery', [Gallery::class, 'index'])->name('gallery');

Route::get('services', [Services::class, 'index'])->name('services');
Route::get('services/delete/{servicio}', [Services::class, 'delete']);

Route::get('contact', [Contact::class, 'index'])->name('contact');
Route::post('contact', [Contact::class, 'send']);

Route::get('administrator', [Administrator::class, 'index'])->name('administrator');
Route::post('administrator', [Administrator::class, 'update']);
Route::post('administrator/service', [Administrator::class, 'add_service']);
Route::post('administrator/gallery', [Administrator::class, 'add_gallery']);
Route::get('gallery/delete/{foto}', [Gallery::class, 'delete']);
Route::get('administrator/ShowGallery', [Gallery::class, 'galleryAdmin'])->name('galleryAdmin');
Route::get('administrator/ShowServices', [Services::class, 'servicesAdmin'])->name('servicesAdmin');


