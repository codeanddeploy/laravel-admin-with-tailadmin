<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        return view('admin.dashboard.index', [
            'pageTitle' => 'Dashboard'
        ]);
    }

    public function test() 
    {
        return view('admin.dashboard.test');
    }
}
