@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-20 bg-white p-10 rounded-xl shadow">

  @if (session()->has('success'))
  <div class="bg-green-600 mb-5 text-white rounded-lg p-3">
    {{ session('success') }}
  </div>
  @endif


  <div class="mb-10">
    <a href="{{ route('voting.index') }}"
      class="bg-green-600 text-white p-3 rounded-md text-sm px-5 outline hover:outline-1 hover:outline-green-700 hover:text-green-700 transition-all duration-300 ease-in-out hover:bg-white font-semibold">Back</a>
  </div>

  @if(count($voting) > 0)
  <h1 class="text-2xl mb-10 font-bold text-center">Kamu Telah Voting Di Pemilihan Ini</h1>
  @else
  <h1 class="font-bold text-xl text-green-600">LIST KANDIDAT</h1>




  <div class="overflow-auto mt-10">
    <form method="post" action="{{ route('voting.vote',$pemilihan->id) }}" onsubmit="return confirm('Are You Sure?')"
      class="mt-2">

      @csrf
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
          @foreach ($pemilihan->kandidat as $row)
          <tr class="border-b font-semibold ">
            <td class="whitespace px-6 py-4">{{ $loop->iteration }}</td>
            <td class="whitespace px-6 py-4"><img src="/storage/{{ $row->image }}" class="mx-auto" alt="" width="50">
            </td>
            <td class="whitespace px-6 py-4">{{ $row->nama }}</td>
            <td class="whitespace px-6 py-4">{{ $row->pemilihan->nama }}</td>
            <td class="whitespace px-6 py-4 flex justify-center items-center gap-1 mt-4">
              <input hidden type="radio" name="voting" id="{{ $row->id }}" value="{{ $row->id }}">
              <label
                class="border border-green-600 p-1.5 px-5 rounded duration-300 transition-all ease-in-out text-green-600 cursor-pointer hover:bg-green-600 hover:text-white "
                for="{{ $row->id }}" style="">Vote</label>
            </td>
          </tr>
          @endforeach
          <tr class="font-semibold">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="whitespace px-6 py-4 flex gap-5 justify-center items-center">
              <p>Kirim Voting : </p>
              <button type="submit" class="bg-blue-600 p-1.5 px-5 rounded text-white">Send Vote</button>
            </td>
          </tr>
        </tbody>
      </table>


    </form>
  </div>

  @endif
</div>
@endsection