<?php

namespace App\Http\Controllers;

use App\Models\Mading;
use Illuminate\Http\Request;

class MadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $mading = Mading::all();

      return response()->json([
        'message' => 'Get All Mading Successfully',
        'data' => $mading,
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
          'judul' => 'required',
          'deskripsi' => 'required',
          'gambar' => 'required',
        ]);

        $mading = Mading::create([
          'id_mading' => $request->id_mading,
          'judul' => $request->judul,
          'deskripsi' => $request->deskripsi,
          'gambar' => $request->deskripsi,
        ]);

        return response()->json([
        'message' => 'Komentar Successfully created',
        'data' => $mading,
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
    public function show(Mading $mading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mading $mading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mading $mading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mading $mading)
    {
        //
    }
}
