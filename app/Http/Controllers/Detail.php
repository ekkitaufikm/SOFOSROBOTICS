<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail extends Controller
{
    public function detail1 ()
    {
        return view('detail1');
    }

    public function detail2 ()
    {
        return view('detail3');
    }
}
