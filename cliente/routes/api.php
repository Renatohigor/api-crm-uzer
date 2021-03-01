<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\ClienteController;

/*
    Rota para acesso as funções da API, pelo navegador ou software de teste.
*/

Route::resource('v1/cliente', ClienteController::class);