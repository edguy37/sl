<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function publication(Publication $publication)
    {
        return view('publication', compact('publication'));
    }
}
