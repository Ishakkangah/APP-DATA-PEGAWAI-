<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::latest()->paginate(4);
        return view('pegawai.index', compact('pegawais'));
    }

     // FUNGSI INI AKAN MENCARI DATA PEGAWAI
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawais =  Pegawai::latest()
		->where('name','like',"%".$cari . "%")
		->paginate(3);
 
    		// mengirim data pegawai ke view index
        return view('pegawai.index', compact('pegawais'));
 
	}
 
    // TAMPILKAN DETAIL DATA PEGAWAI
    public function show(Pegawai $pegawai)
    {
        $pegawai = Pegawai::where('id', $pegawai->id)->firstOrFail();
        return view('pegawai.show', compact('pegawai'));
    }


    // BUAT DATA PEGAWAI BARU
    public function create()
    {   
        $golongans = Golongan::get();
        return view('pegawai.create', compact('golongans'));
    }

    // DATA AKAN DI KIRIM KE DATABASE
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'golongan' => 'required',
        ]);
       $pegawai = new Pegawai();
       $pegawai->name = $request->name;
       $pegawai->golongan_id = $request->golongan;
       $pegawai->nip = $request->nip;
       $pegawai->alamat = $request->alamat;
       $pegawai->save();

       session()->flash('success', 'Data berhasil dimasukan');
       return redirect()->to('/');
    }


    // EDIT DATA PEGAWAI
    function edit(Pegawai $pegawai){
        $golongans = Golongan::get();
        return view('pegawai.edit', compact('pegawai', 'golongans'));
    }

    // DATA PEGAWAI DI UPDATE 
    function update(Pegawai $pegawai, Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'golongan' => 'required',
        ]);

        $attr['name'] = $request->name;
        $attr['golongan_id'] = $request->golongan;
        $attr['nip'] = $request->nip;
        $attr['pegawai'] = $request->pegawai;

        $pegawai->update($attr);
        
        session()->flash('success', 'Data berhasil di edit');
        return redirect()->to('/');
    }

    // HAPUS DATA PEGAWAI
    function delete( Pegawai $pegawai){
        $pegawai->delete();
        session()->flash('success', 'Data berhasil di hapus');
        return redirect()->to('/');
    }
}
