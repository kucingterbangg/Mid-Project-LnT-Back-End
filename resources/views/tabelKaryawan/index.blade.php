<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>Data Karyawan</h1>
    <table border="1">
        <tr>
            {{-- <th>INDEX</th> --}}
            <th>NAMA</th>
            <th>NIK</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th>NOMOR TELEFON</th>
            <th>USIA</th>
            <th>AKSI</th>
        </tr>

        @foreach($tabelKaryawan as $k)
            <tr>
                {{-- <td>{{$k->id}}</td> --}}
                <td>{{$k->nama}}</td>
                <td>{{$k->identification}}</td>
                <td>{{$k->jenisKelamin}}</td>
                <td>{{$k->alamat}}</td>
                <td>{{$k->telp}}</td>
                <td>{{$k->usia}}</td>
                <td id="container">
                    <a href="/tabelKaryawan/{{$k->id}}/edit" id="edit">Ubah</a>
                    <form action="/tabelKaryawan/{{$k->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Hapus" id="delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table><br><br>
    <a id="create" href="/tabelKaryawan/create">+ Tambahkan Karyawan</a>
</body>
</html>



