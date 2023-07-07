<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')


  <style>
    table {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    table td,
    table th {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    table tr:hover {
      background-color: #ddd;
    }

    table th {
      padding-top: 12px;
      padding-bottom: 12px;
      background-color: #04AA6D;
      color: white;
    }
  </style>
</head>

<body>


  <table class="border-b">
    <tr>
      <th>No</th>
      <th>Gambar Kandidat</th>
      <th>Nama Pemilihan</th>
      <th>Nama Kandidat</th>
      <th>Jumlah Voting</th>
    </tr>
    <tr>
      @foreach ($kandidatWithCount as $row)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td><img src="storage/{{ $row->image }}" alt="" width="50"></td>
      <td>{{ $pemilihan->nama }}</td>

      <td>{{ $row->nama }}</td>
      <td>{{ $row->votings_count }}</td>
    </tr>
    @endforeach
    </tr>
  </table>


</body>

</html>