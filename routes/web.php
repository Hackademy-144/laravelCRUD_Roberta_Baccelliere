<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;


Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/plans', [PublicController::class,'plans'])->name('plans');
Route::get('/contact', [PublicController::class,'contact'])->name('contact');
Route::post('/contact/submit', [PublicController::class,'submit'])->name('contact.submit');


Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');
Route::get('/article/show{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/update{article}', [ArticleController::class, 'update'])->name('article.update')->middleware('auth');

Route::put('/article/edit{article}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
Route::delete('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/user/article/{user}', [ArticleController::class,'getArtByUser'])->name('article.user');

Route::delete('/user/delete', [PublicController::class, 'userDelete'])->name('user.delete');
