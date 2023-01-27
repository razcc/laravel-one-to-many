<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // pagina di atterraggio dopo il login
    public function index()
    {
        return view('admin.home');
    }
}
