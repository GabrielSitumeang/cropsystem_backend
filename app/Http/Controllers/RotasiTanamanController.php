<?php

namespace App\Http\Controllers;

use App\Models\RotasiTanaman;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class RotasiTanamanController extends Controller
{
    public function index()
    {
        $rotasi = RotasiTanaman::latest()->paginate(10);
        
        return view('rotasi.index',compact('rotasi'))
            ->with('i', (request()->input('page', 1) - 1) * 10);


    }

    public function create()
    {
        $tanaman = Tanaman::get();
        
        $jenisinformasiOptions = [
            'Sesudah' => 'Sesudah',
            'Sebelum' => 'Sebelum',
        ];

        return view('rotasi.create', compact('jenisinformasiOptions'), compact('tanaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenisInformasi' => 'required',
            'namatanaman' => 'required',
            'isi' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('gambar_tanaman')) {
            $destinationPath = 'gambar_tanaman/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar_tanaman'] = "$profileImage";
        }
    
        RotasiTanaman::create($input);
     
        return redirect()->route('rotasi.index')
                        ->with('sukses','Data berhasil ditambahkan.');
    }


    public function show(RotasiTanaman $rotasi)
    {
        return view('rotasi.show',compact('rotasi'));
    }


    public function edit($id)
    {
        $tanaman = Tanaman::get();
        $rotasi = RotasiTanaman::find($id);
        $jenisinformasiOptions = [
            'Sesudah' => 'Sesudah',
            'Sebelum' => 'Sebelum',
        ];
        return view('rotasi.edit', compact('rotasi', 'jenisinformasiOptions', 'tanaman'));
    }


    public function update(Request $request, RotasiTanaman $rotasi)
    {
        $request->validate([
            'jenisInformasi' => 'required',
            'namatanaman' => 'required',
            'isi' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('gambar_tanaman')) {
            $destinationPath = 'gambar_tanaman/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar_tanaman'] = "$profileImage";
        }else{
            unset($input['gambar_tanaman']);
        }
          
        $rotasi->update($input);
    
        return redirect()->route('rotasi.index')
                        ->with('sukses','Data berhasil diupdate');
    }
  

    public function destroy(RotasiTanaman $rotasi)
    {
        $rotasi->delete();
     
        return redirect()->route('rotasi.index')
                        ->with('sukses','Data berhasil dihapus');
    }
}
