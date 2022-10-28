<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use App\Models\Elektronik;
use App\Models\Karyawan;
use App\Models\Saham;
use Illuminate\Http\Request;

class ElektronikController extends Controller
{
    public function create()
    {
        return view('create', ["karyawans" => Karyawan::all()]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_barang' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
            'jenis' => 'required|string|max:100',
            'karyawan_id' => 'required'

        ]);

        Elektronik::create($validateData);

        return redirect('/')->with('success', 'Data  berhasil ditambah');
    }

    public function show(Elektronik $id)
    {
        return view('show', [
            'title' => 'Elektronik',
            'elektronik' => $id
        ]);
    }
}
