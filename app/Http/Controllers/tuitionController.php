<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tuitionController extends Controller
{
    public function tuitionFromView(){
        return view('tuition.tuitionFeesFrom');   // Tuition fees from page
    }
}
