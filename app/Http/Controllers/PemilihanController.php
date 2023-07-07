<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Pemilihan;
use Illuminate\Http\Request;

class PemilihanController extends Controller
{
  /**
   * Display a listing of the resource.
   */


  public function index()
  {
    $pemilihan = Pemilihan::paginate(10);
    return view('admin.pemilihan.index', compact('pemilihan'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.pemilihan.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'nama' => 'required',
      'status' => 'required',
      'tanggal_pemilihan' => 'required',
    ]);

    Pemilihan::create($validatedData);

    return redirect()->route('pemilihan.index')->with(['success' =>  'Data Berhasil Disimpan']);
  }

  /**
   * Display the specified resource.
   */
  public function show(Pemilihan $pemilihan)
  {

    $kandidatWithCount = $pemilihan->kandidat()->withCount('votings')->get();
    return view('admin.pemilihan.show', compact('kandidatWithCount', 'pemilihan'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Pemilihan $pemilihan)
  {
    return view('admin.pemilihan.edit', compact('pemilihan'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Pemilihan $pemilihan)
  {
    $validatedData = $request->validate([
      'nama' => 'required',
      'status' => 'required',
      'tanggal_pemilihan' => 'required',
    ]);

    $pemilihan->update($validatedData);

    return redirect()->route('pemilihan.index')->with(['success' =>  'Data Berhasil Diupdate']);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Pemilihan $pemilihan)
  {
    Pemilihan::destroy($pemilihan->id);

    return redirect()->route('pemilihan.index')->with(['success' =>  'Data Berhasil Dihapus']);
  }
}
