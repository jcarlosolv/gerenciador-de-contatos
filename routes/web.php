<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;

Route::get("/", function() {return redirect("/contatos");});

Route::resource("/contatos", ContatosController::class);