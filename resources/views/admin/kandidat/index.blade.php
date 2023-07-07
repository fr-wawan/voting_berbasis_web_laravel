@extends('layouts.admin')

@section('content')
<div class="xl:ml-72 bg-white p-10 rounded-xl shadow">

  @if (session()->has('success'))
  <div class="bg-green-600 mb-5 text-white rounded-lg p-3">
    {{ session('success') }}
  </div>
  @endif


  <h1 class="font-bold text-xl text-green-600">LIST Kandidat</h1>

  <div class="mt-10">
    <a href="{{ route('kandidat.create') }}"
      class="bg-green-600 text-white p-3 rounded-md text-sm px-3 outline hover:outline-1 hover:outline-green-700 hover:text-green-700 transition-all duration-300 ease-in-out hover:bg-white ">Create
      Kandidat</a>
  </div>

  <div class="overflow-auto mt-10">
    <table class="min-w-full text-left text-sm font-light border">
      <thead class="border-b font-bold bg-zinc-200">
        <tr class="text-center">
          <th class="p-3 ">
            No
          </th>
          <th class="p-3 ">
            Image
          </th>
          <th class="p-3 ">
            Nama Kandidat
          </th>
          <th class="p-3 ">
            Nama Pemilihan
          </th>

          <th class="p-3 ">Actions</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @foreach ($kandidat as $row)
        <tr class="border-b font-semibold ">
          <td class="whitespace px-6 py-4">{{ $loop->iteration }}</td>
          <td class="whitespace px-6 py-4"><img src="storage/{{ $row->image }}" alt="" width="50"></td>
          <td class="whitespace px-6 py-4">{{ $row->nama }}</td>
          <td class="whitespace px-6 py-4">{{ $row->pemilihan->nama }}</td>
          <td class="whitespace px-6 py-4 flex justify-center items-center gap-1 mt-4">
            <a href="{{ route('kandidat.edit',$row->id) }}" class="bg-blue-600 p-1.5 px-5 rounded text-white">Edit</a>
            <form method="post" action="{{ route('kandidat.destroy',$row->id) }}"
              onsubmit="return confirm('Are You Sure?')">
              @method('delete')
              @csrf
              <button type="submit" class="bg-red-600 p-1.5 px-5 rounded text-white">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</div>
@endsection