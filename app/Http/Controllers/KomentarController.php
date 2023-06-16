<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $komentar = Komentar::all();

      return response()->json([
        'message' => 'Get All Komentar Successfully',
        'data' => $komentar,
        'status' => 200
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      $request->validate([
        'id_mading' => 'required',
        'nama' => 'required',
        'email' => 'required|email',
        'komentar' => 'required',
      ]);

      $komentar = Komentar::create([
        'id_mading' => $request->id_mading,
        'nama' => $request->nama,
        'email' => $request->email,
        'komentar' => $request->komentar,
      ]);

      return response()->json([
        'message' => 'Komentar Successfully created',
        'data' => $komentar,
        'status' => 200,
      ]);
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komentar $komentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Komentar $komentar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $komentar = Komentar::find($id);
        $komentar->delete();

        return response()->json([
          'message' => 'delete successfully',
          'status' => 200
        ]);
    }
}
