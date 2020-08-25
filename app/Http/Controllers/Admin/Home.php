<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class Home extends Controller
{

   // private $repository;
  /*  public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }*/
 
    public function index()
    {
        return view('admin.pages.home.dashboard');
    }

  
}
