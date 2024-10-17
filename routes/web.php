<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Admin;
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
});
Route::get('/', [Home::class, 'index']); 
Route::get('/about', [Home::class, 'about']);
Route::get('/academics', [Home::class, 'academics']); 
Route::get('/admissions', [Home::class, 'admissions']); 
Route::get('/blog', [Home::class, 'blog']); 
Route::get('/contact', [Home::class, 'contact']); 

Route::get('/admin/registrationForm', [Admin::class, 'showRegistrationForm']); 
