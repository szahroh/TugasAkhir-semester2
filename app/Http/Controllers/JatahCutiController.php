<?php
namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Divisi;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::with('divisi')->get();
        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        $divisi = Divisi::all();
        return view('pegawai.create', compact('divisi'));
    }

    public function store(Request $request)
    {
        Pegawai::create($request->all());
        return redirect()->route('pegawai.index');
    }

    public function edit($nip)
    {
        $pegawai = Pegawai::findOrFail($nip);
        $divisi = Divisi::all();
        return view('pegawai.edit', compact('pegawai', 'divisi'));
    }

    public function update(Request $request, $nip)
    {
        Pegawai::findOrFail($nip)->update($request->all());
        return redirect()->route('pegawai.index');
    }

    public function destroy($nip)
    {
        Pegawai::findOrFail($nip)->delete();
        return redirect()->route('pegawai.index');
    }
}

        ?>
