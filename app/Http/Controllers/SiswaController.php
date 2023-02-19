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

    public function store(Request $request)
    {
        $add=new Siswa;
        $add->name=$request->name;
        $add->jenis_kelamin=$request->jenis_kelamin;
        $add->tempat_lahir=$request->tempat_lahir;
        $add->tanggal_lahir=$request->tanggal_lahir;
        $add->agama=$request->agama;
        $add->alamat=$request->alamat;
        $add->save();
        return back();
    }

    public function delete($id)
    {
        $data= Siswa::find($id);
        $data->delete();
        // return response()->json(['status' => 'Siswa Berhasil di hapus!']); 
        return redirect('/siswa');
    }
}
