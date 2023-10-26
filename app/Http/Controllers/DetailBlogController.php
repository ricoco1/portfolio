<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailBlogController extends Controller
{
    public function detail()
    {
        return view('detail-blog.detail-blog');
    }
    
    public function header()
    {
        return view('detail-blog.sections.header');
    }
    
    public function article()
    {
        return view('detail-blog.sections.article');
    }
}
