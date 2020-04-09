<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicController extends Controller
{
    public function penyiaran()
    {
        return view('academic.penyiaran');
    }

    public function manajemen()
    {
        return view('academic.manajemen');
    }

    public function akuntansi()
    {
        return view('academic.akuntansi');
    }

    public function sistemInformasi()
    {
        return view('academic.sistem-informasi');
    }

    public function teknologiInformasi()
    {
        return view('academic.teknologi-informasi');
    }
}
