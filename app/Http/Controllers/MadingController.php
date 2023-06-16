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
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $image = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move('images', $image);

        $mading = Mading::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => url('images/' . $image),
        ]);

        return response()->json([
            'message' => 'Mading Successfully created',
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
    public function show($id)
    {
      $mading = Mading::find($id);

      if(!$mading) {
        return response()->json([
        'message' => 'Get Failed',
        'status' => 400,
      ]);
      }

      $madingWithComments = Mading::with('komentars')->find($id);

      return response()->json([
        'message' => 'Get Successfully',
        'data' => $madingWithComments,
        'status' => 200,
      ]);
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
    public function destroy($id)
    {
        $mading = Mading::find($id);
        $mading->delete();

        return response()->json([
          'message' => 'delete successfully',
          'status' => 200
        ]);
    }
}
