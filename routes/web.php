<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\LegalNoticeController;
use App\Http\Controllers\InternshipsJobsController;

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

Route::get('/', [AppController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');

Route::get('/internships-jobs', [InternshipsJobsController::class, 'index'])->name('internships-jobs');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('send');

Route::get('/legal-notice', [LegalNoticeController::class, 'index'])->name('legal-notice');

Route::get('change/lang', [LangController::class, 'lang_change'])->name('LangChange');