<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class ApostasCadastradas extends Controller
{

    public function index()
    {
        return view('admin.pages.apostacadastrada.aposta');
    }

  
}
