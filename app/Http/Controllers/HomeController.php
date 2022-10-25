<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriMotor;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $kategori = KategoriMotor::all();
        return view('landing', compact('title', 'kategori'));
    }
}
