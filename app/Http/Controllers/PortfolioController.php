<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function about()
    {
        return view('portfolio.about');
    }
    
    public function service()
    {
        return view('portfolio.sections.service');
    }
    
    public function portfolio()
    {
        return view('portfolio.sections.portfolio');
    }
    
    public function tutorial()
    {
        return view('portfolio.sections.tutorial');
    }
    
    public function contact()
    {
        return view('portfolio.sections.contact');
    } 
}
