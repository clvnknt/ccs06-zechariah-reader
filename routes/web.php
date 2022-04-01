<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZechariahController;

Route::get('/', [ZechariahController::class, 'index']);
Route::get('/chapter/{chapter_number}', [ZechariahController::class, 'readByChapter']);
Route::get('all-chapters', [ZechariahController::class, 'readAllChapters']);