<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\includeController;
use App\Http\Controllers\tuitionController;

Route::get('/',[
    includeController::class,
    'includeView'                           // project main page
])->name('includeView');

<<<<<<< Updated upstream
//tuition fees str
Route::get('/add-tuition-fees',[
    tuitionController::class,
    'tuitionFromView'                        // Tuition fees from page
])->name('tuitionFromView');

//tuition fees end
=======
Route::get('/new-admission',[
    includeController::class,
    'newAdmissionView'
])->name('newAdmissionView');
>>>>>>> Stashed changes
