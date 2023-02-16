<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa= Siswa::all();
        return view('member.siswa', compact(['siswa']));
    }

    public function update(Request $request)
    {
        $sis= Siswa::findOrFail($request->sis_id);
        $sis->update($request->all());
        return back();
    }
}
