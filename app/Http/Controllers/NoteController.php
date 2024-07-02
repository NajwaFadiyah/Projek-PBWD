<?php

namespace App\Http\Controllers;

use App\Models\notes;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    function index()
    {
        $data = notes::orderBy('no', 'desc')->paginate();
        return view('notes')->with('data', $data);
    }

    function create()
    {
        return view('create_prodi');
    }

    function store(Request $request)
    {

        $data = [
            'no' => $request->no,
            'judul' => $request->id_prodi,
            'alamat' => $request->nama_prodi,
            'deskripsi' => $request->himpunan_mahasiswa,
        ];
        notes::create($data);
        return REDIRECT()->to('notes')->with('success', 'Berhasil menambahkan data');
    }
}
