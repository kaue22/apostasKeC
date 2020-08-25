<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class Create extends Controller
{

    public function index()
    {
        return view('admin.pages.home.create');
    }

  
}
