<?php
namespace App\Http\Controllers;

use App\Models\PengajuanCuti;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PengajuanCutiController extends Controller
{
    public function index()
    {
        $cuti = PengajuanCuti::with('pegawai')->get();
        return view('cuti.index', compact('cuti'));
    }

    public function create()
    {
        $pegawai = Pegawai::all();
        return view('cuti.create', compact('pegawai'));
    }

    public function store(Request $request)
    {
        PengajuanCuti::create($request->all());
        return redirect()->route('cuti.index');
    }

    public function edit($id)
    {
        $cuti = PengajuanCuti::findOrFail($id);
        $pegawai = Pegawai::all();
        return view('cuti.edit', compact('cuti', 'pegawai'));
    }

    public function update(Request $request, $id)
    {
        PengajuanCuti::findOrFail($id)->update($request->all());
        return redirect()->route('cuti.index');
    }

    public function destroy($id)
    {
        PengajuanCuti::findOrFail($id)->delete();
        return redirect()->route('cuti.index');
    }
}
 ?>
