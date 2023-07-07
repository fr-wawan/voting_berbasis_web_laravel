<?php

namespace App\Http\Controllers;

use App\Models\Pemilihan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PemilihController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $pemilih = User::paginate(10);
    return view('admin.pemilih.index', compact('pemilih'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.pemilih.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'no_ktp' => 'required|unique:users',
      'alamat' => 'required',
      'tanggal_lahir' => 'required',
      'jenis_kelamin' => 'required',
      'password' => 'required|confirmed'
    ]);

    User::create($validatedData);

    return redirect()->route('pemilih.index')->with(['success' =>  'Data Berhasil Disimpan']);
  }

  /**
   * Display the specified resource.
   */
  public function show()
  {
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(User $pemilih)
  {
    return view('admin.pemilih.edit', compact('pemilih'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, User $pemilih)
  {
    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users,email,' . $pemilih->id,
      'no_ktp' => 'required|unique:users,no_ktp,' . $pemilih->id,
      'alamat' => 'required',
      'tanggal_lahir' => 'required',
      'jenis_kelamin' => 'required',
    ]);



    $pemilih->update($validatedData);


    return redirect()->route('pemilih.index')->with(['success' =>  'Data Berhasil Disimpan']);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $pemilih)
  {
    User::destroy($pemilih->id);

    return redirect()->route('pemilih.index')->with(['success' =>  'Data Berhasil Dihapus']);
  }
}
