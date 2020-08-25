<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class CadastraAposta extends Controller
{

    public function index()
    {
        return view('admin.pages.cadastraaposta.cadastra');
    }
    public function create()
    {
        echo ("TO AQUI");
        return view('admin.pages.cadastraaposta.create');
    }
}
