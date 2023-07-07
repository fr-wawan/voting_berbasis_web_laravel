@extends('layouts.admin')

@section('content')
<div class="bg-white ml-72 p-10 rounded shadow">

  <h1 class="font-semibold uppercase border-b pb-5 text-lg text-green-600">Tambah Kandidat</h1>
  <form action="/kandidat" class="mt-5" method="post" enctype="multipart/form-data">
    @csrf
    <div class="block my-5">
      <label for="image">Image Kandidat</label>
      <input type="file" name="image" id="image"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">

      @error('image')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="block my-5">
      <label for="nama">Nama Kandidat</label>
      <input type="text" name="nama" id="nama"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">

      @error('nama')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="block my-5">
      <label for="pemilihan_id">Kandidat Pemilihan</label>
      <select type="text" name="pemilihan_id" id="pemilihan_id"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">
        @foreach ($pemilihan as $row)
        <option value="{{ $row->id }}">{{ $row->nama }}</option>
        @endforeach
      </select>


      @error('pemilihan_id')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="block my-5 mb-10">
      <label for="deskripsi">Deskripsi Pemilihan</label>
      <div class="mt-2">
        <textarea name="deskripsi" id="deskripsi"
          class=" border focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg "
          rows="5"></textarea>

        @error('deskripsi')
        <div class="text-red-600 mt-3">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>

    <div class="flex gap-3 items-center">
      <a href="{{ route('kandidat.index') }}"
        class="bg-green-700 outline hover:outline-1 hover:outline-green-700 hover:text-green-700 transition-all duration-300 ease-in-out hover:bg-white text-white p-2 px-5 rounded-md">Back</a>
      <button type="submit"
        class="bg-green-600 outline hover:outline-1 hover:outline-green-600 hover:text-green-600 transition-all duration-300 ease-in-out hover:bg-white text-white p-2 px-4 rounded-md">Submit</button>
    </div>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
<script>
  tinymce.init({selector:'textarea'});
</script>
@endsection