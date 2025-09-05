<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\DashboardController;

Route::middleware('auth')->group(function () {
    // All the routes inside this group require the user to be logged in.
    //
    // Dashboard - single action controller
    Route::get('/', DashboardController::class)->name('dashboard');
    //
});
