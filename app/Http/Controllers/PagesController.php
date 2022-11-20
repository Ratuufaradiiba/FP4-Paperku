<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('frontend.pages.home', compact('kategori'));
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
