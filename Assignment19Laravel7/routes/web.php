<?php


use App\Http\Controllers\homeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeController::class,'Page']);