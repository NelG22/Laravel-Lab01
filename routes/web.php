<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;

// Registration routes
Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

// Login routes
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');

// Logout route
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Notes resource routes
Route::resource('notes', NoteController::class);

// Homepage route
Route::get('/', function () {
    return view('welcome');
});
