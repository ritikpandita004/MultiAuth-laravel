<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboadController extends Controller
{
    public function Dashboard()
    {
        return view('Dashboard');
    }
}
