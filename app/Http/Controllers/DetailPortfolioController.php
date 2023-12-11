<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailPortfolioController extends Controller
{
    public function detail()
    {
        return view('detail-portfolio.detail-portfolio');
    }
    
    public function header()
    {
        return view('detail-portfolio.sections.header');
    }
    
    public function article()
    {
        return view('detail-portfolio.sections.article');
    }
    public function index()
    {
        $response = Http::withoutVerifying()->get('https://berita-indo-api.vercel.app/v1/cnn-news');
        $hasil = $response->json();

        return view('detail-portfolio.detail-portfolio', ['hasil' => $hasil]);
    }
     
}
