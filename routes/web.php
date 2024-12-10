<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\includeController;

Route::get('/',[
    includeController::class,
    'includeView'
])->name('includeView');