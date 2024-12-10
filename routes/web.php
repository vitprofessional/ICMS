<?php

use Illuminate\Support\Facades\Route;

use Apps\Http\Contorllers\includeController;

Route::get('/icms',[
    includeController::class,
    'includeView',
])->name('includeView');