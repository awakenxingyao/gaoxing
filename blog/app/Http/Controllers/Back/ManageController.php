<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageController extends Controller
{
    //
    public function dashboard()
    {
        return view('Back.dashboard');
    }
}
