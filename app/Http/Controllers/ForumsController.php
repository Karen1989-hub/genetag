<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumsController extends Controller
{
    public function showForumsPage(){
        return view('forums');
    }
}
