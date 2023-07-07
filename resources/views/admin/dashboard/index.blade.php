@extends('layouts.admin')

@section('content')
<div class="xl:ml-72 bg-white p-10 rounded-xl shadow">
  <h1 class="font-bold text-xl text-green-600">DASHBOARD</h1>



  <div class="overflow-auto mt-10">
    <table class="min-w-full text-left text-sm font-light">
      <thead class="border-b font-medium bg-zinc-200">
        <tr class="text-center">
          <th class="p-3 ">
            No
          </th>
          <th class="p-3 ">
            Nama
          </th>
          <th class="p-3 ">
            Status
          </th>
          <th class="p-3 ">
            Tanggal Pemilihan
          </th>

          <th class="p-3 ">Actions</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @foreach ($pemilihan as $row)
        <tr class="border-b font-semibold ">
          <td class="whitespace px-6 py-4">{{ $loop->iteration }}</td>
          <td class="whitespace px-6 py-4">{{ $row->nama }}</td>
          <td class="whitespace px-6 py-4">
            @if ($row->status == 'tidak_berlangsung')
            <p class="bg-red-500 text-white w-36 p-2 mx-auto rounded-md">Belum Berlangsung</p>
            @endif
            @if ($row->status == 'berlangsung')
            <p class="bg-green-500 text-white w-36 p-2 mx-auto rounded-md">Berlangsung</p>
            @endif
            @if($row->status == 'selesai')
            <p class="bg-green-600 text-white w-36 p-2 mx-auto rounded-md">Selesai</p>
            @endif
          </td>
          <td class="whitespace px-6 py-4">{{ $row->tanggal_pemilihan }}</td>
          <td class="whitespace px-6 py-4 flex justify-center items-center gap-1">
            @if ($row->status == 'selesai')
            <a href="{{ route('dashboard.pdf',$row->id) }}" class="bg-green-600 p-1.5 px-5 rounded text-white">Export To
              PDF</a>
            @endif

            <a href="{{ route('pemilihan.show',$row->id) }}" class="bg-blue-600 p-1.5 px-5 rounded text-white">View</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</div>
@endsection