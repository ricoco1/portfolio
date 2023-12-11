<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function tutorial()
    {
        return view('tutorial.tutorial');
    }
    
    public function header()
    {
        return view('tutorial.sections.header');
    }
    
    public function content()
    {
        return view('tutorial.sections.content');
    }
}
