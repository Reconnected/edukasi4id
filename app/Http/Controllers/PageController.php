<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index'); // Make sure this matches your view's path
    }
    
    public function profil()
    {
        return view('profil'); // Make sure this matches your view's path
    }

    public function layanan()
    {
        return view('layanan'); // Make sure this matches your view's path
    }

    public function kontak()
    {
        return view('kontak'); // Make sure this matches your view's path
    }

    public function pelatihan()
    {
        return view('pelatihan'); // Make sure this matches your view's path
    }

    public function LMS()
    {
        return view('LMS'); // Make sure this matches your view's path
    }

    public function mitra()
    {
        return view('mitra'); // Make sure this matches your view's path
    }

    public function perusahaan()
    {
        return view('perusahaan'); // Make sure this matches your view's path
    }

    public function akademi()
    {
        return view('akademi'); // Make sure this matches your view's path
    }

    public function konsultan()
    {
        return view('konsultan'); // Make sure this matches your view's path
    }

    public function website_sekolah()
    {
        return view('website_sekolah'); // Make sure this matches your view's path
    }
}
