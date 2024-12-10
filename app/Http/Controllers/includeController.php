<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class includeController extends Controller
{
    public function includeView(){
        return view('includePage');
    }
}
