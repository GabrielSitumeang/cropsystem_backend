<?php
namespace App\Http\Controllers;

use App\Models\AjukanInformasi;
use Illuminate\Http\Request;

class AjukanInformasiController extends Controller
{
    // Menampilkan daftar informasi dengan status "request"
    public function index()
    {
        $informasi = AjukanInformasi::where('status', 'request')->get();
        return view('ajukan.index', compact('informasi'));
    }

    // Menampilkan detail informasi
    public function show($id)
    {
        $informasi = AjukanInformasi::findOrFail($id);
        return view('ajukan.show', compact('informasi'));
    }

    // Mengubah status dari "request" menjadi "approve"
    public function approve($id)
    {
        $informasi = AjukanInformasi::findOrFail($id);
        $informasi->status = 'approve';
        $informasi->save();

        return redirect()->route('ajukan.index')->with('success', 'Informasi berhasil di-approve.');
    }
}
