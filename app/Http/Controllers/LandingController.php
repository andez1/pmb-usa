<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }

    public function teaser_video_pembelajaran()
    {
        return view('landing.teaser-video-pembelajaran');
    }

    public function beasiswa()
    {
        return view('landing.beasiswa');
    }

    public function kenapa_usa()
    {
        return view('landing.kenapa-usa');
    }

    public function keunggulan_usa()
    {
        return view('landing.keunggulan-usa');
    }

    public function pelatihan_bersertifikasi()
    {
        return view('landing.pelatihan-bersertifikasi');
    }

    public function faq()
    {
        return view('landing.faq');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function sejarah()
    {
        return view('landing.sejarah');
    }

    public function admission_info()
    {
        return view('landing.admission-info');
    }

    public function academic_info()
    {
        return view('landing.academic-info');
    }

    public function academic_program()
    {
        return view('landing.academic-program');
    }

    public function academic_guide()
    {
        return view('landing.academic-guide');
    }

    public function study_guide()
    {
        return view('landing.study-guide');
    }

    public function keunggulan_lulusan()
    {
        return view('landing.keunggulan-lulusan');
    }

    public function struktur_organisasi()
    {
        return view('landing.struktur-organisasi');
    }

    public function visi_misi()
    {
        return view('landing.visi-misi');
    }

    public function greetings_rector()
    {
        return view('landing.greetings-rector');
    }
}
