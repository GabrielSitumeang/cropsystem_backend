<?php
namespace App\Http\Controllers;

use App\Models\Komunitas;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomunitasController extends Controller
{
    // Menampilkan daftar informasi dengan status "request"
    public function index()
    {
        $informasi = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
            ->select(
                'posts.id',
                'posts.body',
                'posts.created_at',
                'users.name',
                DB::raw('COUNT(comments.id) as jumlah_komentar')
            )
            ->groupBy('posts.id', 'posts.body', 'posts.created_at', 'users.name')
            ->get();
        return view('komunitas.index', compact('informasi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function delete($id)
    {
        
    }

    // Menampilkan detail informasi
    public function show($id)
    {
        $informasi = Komunitas::findOrFail($id);
        return view('komunitas.show', compact('informasi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // Mengubah status dari "request" menjadi "approve"
    public function approve($id)
    {
        $informasi = Komunitas::findOrFail($id);
        $informasi->status = 'approve';
        $informasi->save();
        // return $informasi;
        return redirect()->route('komunitas.index')->with('success', 'Informasi berhasil di-approve.');
    }
}
