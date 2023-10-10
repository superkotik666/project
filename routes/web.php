<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\TemplateSecController;


Route::get('/', [TemplateController::class, 'index'])->name('templates');

Route::get('/content1', [TemplateController::class, 'template1'])->defaults('view', 'templates.template1')->name('content1');

Route::get('/content2', [TemplateSecController::class, 'template2'])->name('content2');

Route::post('/update-text1', [TemplateController::class, 'updateText'])->name('update-text1');

Route::post('/update-text2', [TemplateSecController::class, 'updateText'])->name('update-text2');

Route::get('/modal', [BlockController::class, 'index'])->name('modal');

Route::post('/content1', [TemplateController::class, 'updateContent'])->name('content1.update');
Route::post('/content2', [TemplateSecController::class, 'updateContent'])->name('content2.update');







