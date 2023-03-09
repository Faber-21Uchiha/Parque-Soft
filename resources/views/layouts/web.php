<?php
use App\Http\Controllers\RegistrosProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});