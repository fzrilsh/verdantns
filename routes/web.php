<?php

use App\Http\Middleware\MaintenanceMode;
use Illuminate\Support\Facades\Route;

Route::middleware(MaintenanceMode::class)->get('/', function () {
    return view('welcome');
});
