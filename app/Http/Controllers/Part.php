<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Part extends Controller
{
    public function index ()
    {
        return view('admin/konten/part');
    }
    public function detail1 ()
    {
        return view('admin/konten/detailpart1');
    }
    public function detail2 ()
    {
        return view('admin/konten/detailpart2');
    }
    public function detail3 ()
    {
        return view('admin/konten/detailpart3');
    }
}
