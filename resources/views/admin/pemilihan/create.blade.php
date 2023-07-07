@extends('layouts.admin')

@section('content')
<div class="bg-white ml-72 p-10 rounded shadow">


  <h1 class="font-semibold uppercase border-b pb-5 text-lg text-green-600">Tambah Pemilihan</h1>
  <form action="/pemilihan" class="mt-5" method="post">
    @csrf
    <div class="block my-5">
      <label for="nama">Nama Pemilihan</label>
      <input type="text" name="nama" id="nama"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">

      @error('nama')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="block my-5">
      <label for="status">Status Pemilihan</label>
      <select type="text" name="status" id="status"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">
        <option value="tidak_berlangsung">Tidak Berlangsung</option>
        <option value="berlangsung">Berlangsung</option>
        <option value="selesai">Selesai</option>
      </select>


      @error('status')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="block my-5 mb-10 ">
      <label for="tanggal_pemilihan">Tanggal Pemilihan</label>
      <input type="date" name="tanggal_pemilihan" id="tanggal_pemilihan"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">
    </div>

    <div class="flex gap-3 items-center ">
      <a href="{{ route('pemilihan.index') }}"
        class="bg-green-700 outline hover:outline-1 hover:outline-green-700 hover:text-green-700 transition-all duration-300 ease-in-out hover:bg-white text-white p-2 px-5 rounded-md">Back</a>
      <button type="submit"
        class="bg-green-600 outline hover:outline-1 hover:outline-green-600 hover:text-green-600 transition-all duration-300 ease-in-out hover:bg-white text-white p-2 px-4 rounded-md">Submit</button>
    </div>
  </form>
</div>
@endsection