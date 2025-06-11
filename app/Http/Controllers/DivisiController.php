<?php
namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = Divisi::all();
        return view('divisi.index', compact('divisi'));
    }

    public function create()
    {
        return view('divisi.create');
    }

    public function store(Request $request)
    {
        Divisi::create($request->all());
        return redirect()->route('divisi.index');
    }

    public function edit($id)
    {
        $divisi = Divisi::findOrFail($id);
        return view('divisi.edit', compact('divisi'));
    }

    public function update(Request $request, $id)
    {
        Divisi::findOrFail($id)->update($request->all());
        return redirect()->route('divisi.index');
    }

    public function destroy($id)
    {
        Divisi::findOrFail($id)->delete();
        return redirect()->route('divisi.index');
    }
}

        ?>
