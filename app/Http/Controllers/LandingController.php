<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }

    public function teaservideo()
    {
        return view('landing.teaservideo');
    }

    public function marketing()
    {
        return view('landing.marketing');
    }

    public function pelatihan()
    {
        return view('landing.pelatihan');
    }

    public function faq()
    {
        return view('landing.faq');
    }
}
