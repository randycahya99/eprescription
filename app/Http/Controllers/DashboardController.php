<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ObatAlkes;
use App\Models\Signa;
use App\Models\ResepRacikan;
use App\Models\ResepNonRacikan;

class DashboardController extends Controller
{
    // Menampilkan Halaman Dashboard
    public function Dashboard()
    {
        return view('admin/dashboard');
    }
}
