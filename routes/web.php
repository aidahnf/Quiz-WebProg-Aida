<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin/mahasiswa',[MahasiswaController::class, 'index']);


Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::prefix('/admin')->group(function(){
    Route::get('/home', function() {
        return view('funedu.home');
    })->name('admin.home');

    Route::get('/catmulmed', function() {
        return view('funedu.catmulmed');
    })->name('admin.catmulmed');

    Route::get('/catsofteng', function() {
        return view('funedu.catsofteng');
    })->name('admin.catsofteng');

    Route::get('/writers', [WriterController::class, 'index'])->name('admin.writers');

    Route::get('/aboutus', function() {
        return view('funedu.aboutus');
    })->name('admin.aboutus');

    // Route::get('/popular', function() {
    //     return view('funedu.popular');
    // })->name('admin.popular');

});

Route::prefix('/article')->group(function(){
    Route::get('/mulmed1', function() {
        return view('article.mulmed1');
    })->name('article.mulmed1');
    Route::get('/mulmed2', function() {
        return view('article.mulmed2');
    })->name('article.mulmed2');
    Route::get('/mulmed3', function() {
        return view('article.mulmed3');
    })->name('article.mulmed3');
    Route::get('/softeng1', function() {
        return view('article.softeng1');
    })->name('article.softeng1');
    Route::get('/softeng2', function() {
        return view('article.softeng2');
    })->name('article.softeng2');
    Route::get('/softeng3', function() {
        return view('article.softeng3');
    })->name('article.softeng3');
});
