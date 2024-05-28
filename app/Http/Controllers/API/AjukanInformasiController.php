<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AjukanInformasi;
use Illuminate\Http\Request;

class AjukanInformasiController extends Controller
{
    public function index()
    {
        return AjukanInformasi::all();
    }

    public function store(Request $request)
    {
        $informasi = AjukanInformasi::create($request->all());
        return response()->json($informasi, 201);
    }

    public function show($id)
    {
        return AjukanInformasi::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $informasi = AjukanInformasi::findOrFail($id);
        $informasi->update($request->all());
        return response()->json($informasi, 200);
    }

    public function destroy($id)
    {
        AJukanInformasi::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
