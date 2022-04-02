<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Konten extends Controller
{
    public function application ()
    {
        return view('admin/konten/application');
    }

    public function faq ()
    {
        return view('admin/konten/faq');
    }
    public function tambahfaq ()
    {
        return view('admin/konten/tambah_faq');
    }

    public function model ()
    {
        return view('admin/konten/model');
    }
    public function tambahmodel ()
    {
        return view('admin/konten/tambah_model');
    }

    public function resources ()
    {
        return view('admin/konten/resources');
    }
    public function tambahresources ()
    {
        return view('admin/konten/tambah_resources');
    }
}
