<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class Pontos extends Controller
{

    public function index()
    {
        return view('admin.pages.pontos.total');
    }

  
}
