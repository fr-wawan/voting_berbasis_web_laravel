<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Pemilihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KandidatController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $kandidat = Kandidat::with('pemilihan')->paginate(10);
    return view('admin.kandidat.index', compact('kandidat'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $pemilihan = Pemilihan::all();
    return view('admin.kandidat.create', compact('pemilihan'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'image' => 'required|image|file|max:2048',
      'nama' => 'required',
      'pemilihan_id' => 'required',
      'deskripsi' => 'required',
    ]);


    $validatedData["image"] = $request->file("image")->store("kandidat", "public");

    Kandidat::create($validatedData);

    return redirect()->route('kandidat.index')->with(['success' =>  'Data Berhasil Disimpan']);
  }

  /**
   * Display the specified resource.
   */
  public function show(Kandidat $kandidat)
  {
  }
  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Kandidat $kandidat)
  {
    $pemilihan = Pemilihan::all();

    return view('admin.kandidat.edit', compact('kandidat', 'pemilihan'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Kandidat $kandidat)
  {
    $validatedData = $request->validate([
      'image' => 'image|file|max:2048',
      'nama' => 'required',
      'pemilihan_id' => 'required',
      'deskripsi' => 'required',
    ]);

    if ($request->file('image')) {
      if ($kandidat->image) {
        Storage::delete($kandidat->image);
      }
      $validatedData["image"] = $request->file("image")->store("kandidat", "public");
    }

    $kandidat->update($validatedData);

    return redirect()->route('kandidat.index')->with(['success' =>  'Data Berhasil Disimpan']);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Kandidat $kandidat)
  {
    Storage::disk('local')->delete('public/' . $kandidat->image);
    Kandidat::destroy($kandidat->id);

    return redirect()->route('kandidat.index')->with(['success' =>  'Data Berhasil Dihapus']);
  }
}
