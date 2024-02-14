<a href="/tabelKaryawan/create">Tambahkan Karyawan</a>
<table border="1">
    <tr>
        <th>INDEX</th>
        <th>NAMA</th>
        <th>ID</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
        <th>NOMOR TELEFON</th>
        <th>USIA</th>
        <th>AKSI</th>
    </tr>

    @foreach($tabelKaryawan as $k)
        <tr>
            <td>{{$k->id}}</td>
            <td>{{$k->nama}}</td>
            <td>{{$k->identification}}</td>
            <td>{{$k->jenisKelamin}}</td>
            <td>{{$k->alamat}}</td>
            <td>{{$k->telp}}</td>
            <td>{{$k->usia}}</td>
            <td>
                <a href="/tabelKaryawan/{{$k->id}}/edit">Edit</a>
                <form action="/tabelKaryawan/{{$k->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
