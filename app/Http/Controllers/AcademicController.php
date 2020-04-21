<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicController extends Controller
{
    // Manajemen Kontemporer
    public function manajemenKontemporer()
    {
        return view('academic.manajemen-kontemporer.home');
    }

    public function manajemenKontemporer_profil()
    {
        return view('academic.manajemen-kontemporer.profil');
    }

    public function manajemenKontemporer_kurikulum()
    {
        return view('academic.manajemen-kontemporer.kurikulum');
    }

    public function manajemenKontemporer_prospek()
    {
        return view('academic.manajemen-kontemporer.prospek-karir');
    }

    public function manajemenKontemporer_dosen()
    {
        return view('academic.manajemen-kontemporer.dosen');
    }

    public function manajemenKontemporer_keunggulan()
    {
        return view('academic.manajemen-kontemporer.keunggulan');
    }

    public function manajemenKontemporer_capaian_pembelajaran_lulusan()
    {
        return view('academic.manajemen-kontemporer.capaian-pembelajaran-lulusan');
    }

    public function manajemenKontemporer_profil_lulusan()
    {
        return view('academic.manajemen-kontemporer.profil-lulusan');
    }


    // Sistem Informasi
    public function sistemInformasi()
    {
        return view('academic.sistem-informasi.home');
    }

    public function sistemInformasi_profil()
    {
        return view('academic.sistem-informasi.profil');
    }

    public function sistemInformasi_kurikulum()
    {
        return view('academic.sistem-informasi.kurikulum');
    }

    public function sistemInformasi_prospek()
    {
        return view('academic.sistem-informasi.prospek-karir');
    }

    public function sistemInformasi_dosen()
    {
        return view('academic.sistem-informasi.dosen');
    }

    public function sistemInformasi_keunggulan()
    {
        return view('academic.sistem-informasi.keunggulan');
    }

    public function sistemInformasi_capaian_pembelajaran_lulusan()
    {
        return view('academic.sistem-informasi.capaian-pembelajaran-lulusan');
    }

    public function sistemInformasi_profil_lulusan()
    {
        return view('academic.sistem-informasi.profil-lulusan');
    }

    // Penyiaran dan Komunikasi Digital

    public function penyiarandankomunikasidigital()
    {
        return view('academic.penyiaran-dan-komunikasi-digital.home');
    }

    public function penyiarandankomunikasidigital_kurikulum()
    {
        return view('academic.penyiaran-dan-komunikasi-digital.kurikulum');
    }

    public function penyiarandankomunikasidigital_prospek()
    {
        return view('academic.penyiaran-dan-komunikasi-digital.prospek-karir');
    }

    public function penyiarandankomunikasidigital_dosen()
    {
        return view('academic.penyiaran-dan-komunikasi-digital.dosen');
    }

    public function penyiarandankomunikasidigital_keunggulan()
    {
        return view('academic.penyiaran-dan-komunikasi-digital.keunggulan');
    }

    // Teknologi Informasi

    public function akuntansi()
    {
        return view('academic.akuntansi');
    }

    public function teknologiInformasi()
    {
        return view('academic.teknologi-informasi');
    }
}
