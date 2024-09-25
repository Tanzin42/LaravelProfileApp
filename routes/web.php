<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Route with required 'id' parameter
Route::get('/profile/{id}', [ProfileController::class, 'index']);

