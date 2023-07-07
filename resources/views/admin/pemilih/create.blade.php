@extends('layouts.admin')

@section('content')
<div class="bg-white ml-72 p-10 mb-10 rounded shadow">


  <h1 class="font-semibold uppercase border-b pb-5 text-lg text-green-600">Tambah Pemilih</h1>
  <form action="/pemilih" class="mt-5" method="post" enctype="multipart/form-data">
    @csrf
    <div class="block my-5">
      <label for="name">Nama Lengkap</label>
      <input type="text" name="name" id="name"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">

      @error('name')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="block my-5">
      <label for="email">Email</label>
      <input type="email" name="email" id="email"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">

      @error('email')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="block my-5">
      <label for="no_ktp">No Ktp</label>
      <input type="number" name="no_ktp" id="no_ktp"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">
      @error('no_ktp')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="block my-5">
      <label for="alamat">Alamat </label>
      <div class="mt-2">
        <textarea name="alamat" id="alamat"
          class=" border focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg "
          rows="5"></textarea>

        @error('alamat')
        <div class="text-red-600 mt-3">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>

    <div class="flex gap-5">
      <div class="block my-5 w-full">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
          class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">
        @error('tanggal_lahir')
        <div class="text-red-600 mt-3">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="block my-5 w-full box-content">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select type="text" name="jenis_kelamin" id="jenis_kelamin"
          class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-2 box-content rounded-lg">
          <option value="pria">Pria</option>
          <option value="wanita">Wanita</option>
        </select>


        @error('jenis_kelamin')
        <div class="text-red-600 mt-3">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>

    <div class="block my-5 w-full">
      <label for="password">Password</label>
      <input type="password" name="password" id="password"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">
      @error('password')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="block my-5 w-full">
      <label for="password_confirmation">Password</label>
      <input type="password" name="password_confirmation" id="password_confirmation"
        class="border mt-2 focus:border-gray-300 focus:outline focus:outline-green-500  border-gray-200 block w-full p-1.5 rounded-lg">
      @error('password')
      <div class="text-red-600 mt-3">
        {{ $message }}
      </div>
      @enderror
    </div>


    <div class="flex gap-3 items-center">
      <a href="{{ route('pemilih.index') }}"
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