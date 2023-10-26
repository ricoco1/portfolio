<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPortfolioController extends Controller
{
    public function portfolio()
    {
        return view('portfolio-hasil.portfolio-hasil');
    }
    
    public function header()
    {
        return view('portfolio-hasil.sections.header');
    }
    
    public function content()
    {
        return view('portfolio-hasil.sections.content');
    }
}
