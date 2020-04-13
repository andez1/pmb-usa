<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        return view('landing.home');
    }

    public function about() {
        return view('landing.about');
    }

    public function admission_info() {
        return view('landing.admission-info');
    }

    public function academic_info() {
        return view('landing.academic-info');
    }

    public function academic_program() {
        return view('landing.academic-program');
    }

    public function academic_guide() {
        return view('landing.academic-guide');
    }

    public function study_guide() {
        return view('landing.study-guide');
    }
}