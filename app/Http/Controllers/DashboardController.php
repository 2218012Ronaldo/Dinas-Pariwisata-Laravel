<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketWisata;

class DashboardController extends Controller
{
    public function index()
    {
        $paketCount = PaketWisata::count();
        return view('dashboard', compact('paketCount'));
    }
}
