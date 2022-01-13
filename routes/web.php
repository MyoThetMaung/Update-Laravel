<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\User;


Route::get('', [BlogController::class, 'index']);


Route::get('blogs/{blog:filename}', [BlogController::class, 'showBlog']);





