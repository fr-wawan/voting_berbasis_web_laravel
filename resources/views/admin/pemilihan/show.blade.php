@extends('layouts.admin')

@section('content')
<div class="xl:ml-72 bg-white p-10 rounded-xl shadow">

  @if (session()->has('success'))
  <div class="bg-green-600 mb-5 text-white rounded-lg p-3">
    {{ session('success') }}
  </div>
  @endif


  <div class="mb-10">
    <a href="/dashboard"
      class="bg-green-600 text-white p-3 rounded-md text-sm px-5 outline hover:outline-1 hover:outline-green-700 hover:text-green-700 transition-all duration-300 ease-in-out hover:bg-white font-semibold">Back</a>
  </div>

  <h1 class="font-bold text-xl text-green-600 uppercase">LIST Kandidat</h1>


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

          <th class="p-3 ">Jumlah Voting</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @foreach ($kandidatWithCount as $row)
        <tr class="border-b font-semibold ">
          <td class="whitespace px-6 py-4">{{ $loop->iteration }}</td>
          <td class="whitespace px-6 py-4"><img src="/storage/{{ $row->image }}" alt="" width="50"></td>
          <td class="whitespace px-6 py-4">{{ $row->nama }}</td>
          <td class="whitespace px-6 py-4">{{ $row->pemilihan->nama }}</td>
          <td class="whitespace px-6 py-4 ">
            {{ $row->votings_count }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</div>
@endsection