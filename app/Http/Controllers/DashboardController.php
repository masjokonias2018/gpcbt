<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index(){
        $jumlah = Siswa::count();
        return view('admin.dashboard', compact('jumlah'));
    }
}
