<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SocialLoginController;

Route::post('social-login', [SocialLoginController::class, 'login']);
