<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Contracts\Container\CircularDependencyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get(uri: '/cliente', action: [ClienteController:: class, 'listar']);