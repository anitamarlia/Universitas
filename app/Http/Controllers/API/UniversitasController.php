<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Universitas;

class UniversitasController extends Controller
{
    public function index()
    {
        $universitas = Univeritas::all();

        return response()->json($universitas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        $universitas = Universitas::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return response()->json($universitas, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        $universitas = Universitas::findOrFail($id);
        $universitas->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return response()->json($universitas);
    }

    public function destroy($id)
    {
        $universitas = Universitas::findOrFail($id);
        $universitas->delete();

        return response()->json(['message' => 'universitas deleted successfully']);
    }

    public function get()
    {
        $universitas = Universitas::all();

        return response()->json($universitas);
    }
}
