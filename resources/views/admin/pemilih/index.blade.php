@extends('layouts.admin')

@section('content')
<div class="xl:ml-72 bg-white p-10 rounded-xl shadow">

  @if (session()->has('success'))
  <div class="bg-green-600 mb-5 text-white rounded-lg p-3">
    {{ session('success') }}
  </div>
  @endif


  <h1 class="font-bold text-xl text-green-600">LIST PEMILIH</h1>

  <div class="mt-10">
    <a href="{{ route('pemilih.create') }}"
      class="bg-green-600 text-white p-3 rounded-md text-sm px-3 outline hover:outline-1 hover:outline-green-700 hover:text-green-700 transition-all duration-300 ease-in-out hover:bg-white ">Create
      Pemilih</a>
  </div>

  <div class="overflow-auto mt-10">
    <table class="min-w-full text-left text-sm font-light border">
      <thead class="border-b font-bold bg-zinc-200">
        <tr class="text-center">
          <th class="p-3 ">
            No
          </th>
          <th class="p-3 ">
            Nama Lengkap
          </th>
          <th class="p-3 ">
            No KTP
          </th>
          <th class="p-3 ">
            Jenis Kelamin
          </th>

          <th class="p-3 ">Actions</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @foreach ($pemilih as $row)
        @if($row->is_admin == 0)
        <tr class="border-b font-semibold ">
          <td class="whitespace px-6 py-4">{{ $loop->iteration }}</td>
          <td class="whitespace px-6 py-4">{{ $row->name }}</td>
          <td class="whitespace px-6 py-4">
            {{ $row->no_ktp }}
          </td>
          <td class="whitespace px-6 py-4">{{ ucfirst($row->jenis_kelamin) }}</td>
          <td class="whitespace px-6 py-4 flex justify-center items-center gap-1">
            <a href="{{ route('pemilih.edit',$row->id) }}" class="bg-blue-600 p-1.5 px-5 rounded text-white">Edit</a>
            <form method="post" action="{{ route('pemilih.destroy',$row->id) }}"
              onsubmit="return confirm('Are You Sure?')">
              @method('delete')
              @csrf
              <button type="submit" class="bg-red-600 p-1.5 px-5 rounded text-white">Delete</button>
            </form>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>


</div>
@endsection