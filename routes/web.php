<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailPortfolioController;
use App\Http\Controllers\DetailBlogController;
use App\Http\Controllers\MyPortfolioController;
use App\Http\Controllers\TutorialController;



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

// Route::get('/', function () {
//     return view('welcome');
// });
//menampilkan halaman portfolio
Route::get('/', [PortfolioController::class, 'about']);
Route::get('/service', [PortfolioController::class, 'service']);
Route::get('/portfolio', [PortfolioController::class, 'portfolio']);
Route::get('/tutorial', [PortfolioController::class, 'tutorial']);
Route::get('/contact', [PortfolioController::class, 'contact']);

//menampilkan halaman detail portfolio
Route::get('/detail-portfolio', [DetailPortfolioController::class, 'detail']);
Route::get('/header', [DetailPortfolioController::class, 'header']);
Route::get('/article', [DetailPortfolioController::class, 'article']);

//menampilkan halaman detail blog
Route::get('/detail-blog', [DetailBlogController::class, 'detail']);
Route::get('/header', [DetailBlogController::class, 'header']);
Route::get('/article', [DetailBlogController::class, 'article']);

//menampilkan halaman portfolio
Route::get('/my-portfolio', [MyPortfolioController::class, 'portfolio']);
Route::get('/header', [MyPortfolioController::class, 'header']);
Route::get('/content', [MyPortfolioController::class, 'content']);

//menampilkan halaman tutorial
Route::get('/tutorial', [TutorialController::class, 'tutorial']);
Route::get('/header', [TutorialController::class, 'header']);
Route::get('/content', [TutorialController::class, 'content']);

//simpan data pesan
Route::post('/submitform',[ContactController::class,'message_process']);

Route::get('/detail-portfolio', [DetailPortfolioController::class, 'index']);