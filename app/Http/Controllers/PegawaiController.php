<?php
namespace App\Http\Controllers;

use App\Models\JatahCuti;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class JatahCutiController extends Controller
{
    public function index()
    {
        $jatah = JatahCuti::with('pegawai')->get();
        return view('jatah.index', compact('jatah'));
    }

    public function create()
    {
        $pegawai = Pegawai::all();
        return view('jatah.create', compact('pegawai'));
    }

    public function store(Request $request)
    {
        JatahCuti::create($request->all());
        return redirect()->route('jatah.index');
    }

    public function edit($id)
    {
        $jatah = JatahCuti::findOrFail($id);
        $pegawai = Pegawai::all();
        return view('jatah.edit', compact('jatah', 'pegawai'));
    }

    public function update(Request $request, $id)
    {
        JatahCuti::findOrFail($id)->update($request->all());
        return redirect()->route('jatah.index');
    }

    public function destroy($id)
    {
        JatahCuti::findOrFail($id)->delete();
        return redirect()->route('jatah.index');
    }
}

        ?>
