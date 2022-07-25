<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// === FRONTEND ===
Route::get('',[App\Http\Controllers\Frontend::class,'index']);
Route::get('/cv',[App\Http\Controllers\Frontend::class,'cv']);
// === FRONTEND ===

// === ALL DATA ===
Route::get('/portfolio',[App\Http\Controllers\Frontend::class,'all_port']);
Route::get('/pengalaman',[App\Http\Controllers\Frontend::class,'all_pengalaman']);
Route::get('/service',[App\Http\Controllers\Frontend::class,'all_service']);
// === ALL DATA ===

// === ADMIN ===
Route::get('/admin',[App\Http\Controllers\Admin::class,'index']);
// === ADMIN ===

// === ABOUT ===
Route::get('/admin/about',[App\Http\Controllers\Admin::class,'about']);
Route::get('/admin/about/tambah_about',[App\Http\Controllers\Abouts::class,'tambah_about']);
Route::post('/about/insert',[App\Http\Controllers\Abouts::class,'insert']);
Route::get('/admin/about/edit_about/{id}',[App\Http\Controllers\Abouts::class,'edit_about']);
Route::post('/about/edit/{id}',[App\Http\Controllers\Abouts::class,'edit']);
Route::get('/admin/about/delete/{id}',[App\Http\Controllers\Abouts::class,'delete']);
// === ABOUT ===

// === PORTFOLIO ===
Route::get('/admin/portfolio',[App\Http\Controllers\Admin::class,'portfolio']);
Route::get('/admin/portfolio/tambah_portfolio',[App\Http\Controllers\Portfolios::class,'tambah_portfolio']);
Route::post('/portfolio/insert',[App\Http\Controllers\Portfolios::class,'insert']);
Route::get('/admin/portfolio/edit_portfolio/{id}',[App\Http\Controllers\Portfolios::class,'edit_portfolio']);
Route::post('/portfolio/edit/{id}',[App\Http\Controllers\Portfolios::class,'edit']);
Route::get('/admin/portfolio/delete/{id}',[App\Http\Controllers\Portfolios::class,'delete']);
// === PORTFOLIO ===

// === PENGALAMAN ===
Route::get('/admin/pengalaman',[App\Http\Controllers\Admin::class,'pengalaman']);
Route::get('/admin/pengalaman/tambah_pengalaman',[App\Http\Controllers\Pengalamans::class,'tambah_pengalaman']);
Route::post('/pengalaman/insert',[App\Http\Controllers\Pengalamans::class,'insert']);
Route::get('/admin/pengalaman/edit_pengalaman/{id}',[App\Http\Controllers\Pengalamans::class,'edit_pengalaman']);
Route::post('/pengalaman/edit/{id}',[App\Http\Controllers\Pengalamans::class,'edit']);
Route::get('/admin/pengalaman/delete/{id}',[App\Http\Controllers\Pengalamans::class,'delete']);
// === PENGALAMAN ===

// === SERVICE ===
Route::get('/admin/service',[App\Http\Controllers\Admin::class,'service']);
Route::get('/admin/service/tambah_service',[App\Http\Controllers\Services::class,'tambah_service']);
Route::post('/service/insert',[App\Http\Controllers\Services::class,'insert']);
Route::get('/admin/service/edit_service/{id}',[App\Http\Controllers\Services::class,'edit_service']);
Route::post('/service/edit/{id}',[App\Http\Controllers\Services::class,'edit']);
Route::get('/admin/service/delete/{id}',[App\Http\Controllers\Services::class,'delete']);
// === SERVICE ===

// === CAROUSEL ===
Route::get('/admin/carousel',[App\Http\Controllers\Admin::class,'carousel']);
Route::get('/admin/carousel/tambah_carousel',[App\Http\Controllers\carousels::class,'tambah_carousel']);
Route::post('/carousel/insert',[App\Http\Controllers\carousels::class,'insert']);
Route::get('/admin/carousel/edit_carousel/{id}',[App\Http\Controllers\carousels::class,'edit_carousel']);
Route::post('/carousel/edit/{id}',[App\Http\Controllers\carousels::class,'edit']);
Route::get('/admin/carousel/delete/{id}',[App\Http\Controllers\carousels::class,'delete']);
// === CAROUSEL ===

// === SKILL ===
Route::get('/admin/skill',[App\Http\Controllers\Admin::class,'skill']);
Route::get('/admin/skill/tambah_skill',[App\Http\Controllers\Skills::class,'tambah_skill']);
Route::post('/skill/insert',[App\Http\Controllers\Skills::class,'insert']);
Route::get('/admin/skill/edit_skill/{id}',[App\Http\Controllers\Skills::class,'edit_skill']);
Route::post('/skill/edit/{id}',[App\Http\Controllers\Skills::class,'edit']);
Route::get('/admin/skill/delete/{id}',[App\Http\Controllers\Skills::class,'delete']);
// === SKILL ===

// === PERSONAL INFO ===
Route::get('/admin/personal_info',[App\Http\Controllers\Admin::class,'personal_info']);
Route::get('/admin/personal_info/tambah_personal_info',[App\Http\Controllers\personal_infos::class,'tambah_personal_info']);
Route::post('/personal_info/insert',[App\Http\Controllers\personal_infos::class,'insert']);
Route::get('/admin/personal_info/edit_personal_info/{id}',[App\Http\Controllers\personal_infos::class,'edit_personal_info']);
Route::post('/personal_info/edit/{id}',[App\Http\Controllers\personal_infos::class,'edit']);
Route::get('/admin/personal_info/delete/{id}',[App\Http\Controllers\personal_infos::class,'delete']);
// === PERSONAL INFO ===

// === PROGRAM ===
Route::get('/admin/program',[App\Http\Controllers\Admin::class,'program']);
Route::get('/admin/program/tambah_program',[App\Http\Controllers\programs::class,'tambah_program']);
Route::post('/program/insert',[App\Http\Controllers\programs::class,'insert']);
Route::get('/admin/program/edit_program/{id}',[App\Http\Controllers\programs::class,'edit_program']);
Route::post('/program/edit/{id}',[App\Http\Controllers\programs::class,'edit']);
Route::get('/admin/program/delete/{id}',[App\Http\Controllers\programs::class,'delete']);
// === PROGRAM ===

// === CONTACT ===
Route::get('/admin/contact',[App\Http\Controllers\Admin::class,'contact']);
Route::post('/contact/insert',[App\Http\Controllers\contacts::class,'insert']);
Route::get('/admin/contact/delete/{id}',[App\Http\Controllers\contacts::class,'delete']);
// === CONTACT ===

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
