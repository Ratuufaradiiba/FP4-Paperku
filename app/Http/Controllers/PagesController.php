<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function postdetail()
    {
        return view('frontend.pages.postdetail');
    }

    public function upload()
    {
        return view('frontend.pages.upload');
    }
}
