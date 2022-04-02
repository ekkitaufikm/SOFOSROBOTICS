<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function users ()
    {
        return view('admin/user/user');
    }

    public function tambahusers ()
    {
        return view('admin/user/tambah_user');
    }

    public function role ()
    {
        return view('admin/user/role');
    }

    public function tambahrole ()
    {
        return view('admin/user/tambah_role');
    }
}
