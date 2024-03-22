<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarksController extends Controller
{
    public function showBookmarksPage(){
        return view('bookmarks');
    }
}
