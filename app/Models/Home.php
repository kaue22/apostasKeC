<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    public function index()
    {
        return view('admin.pages.home.dashboard');
    }
}
