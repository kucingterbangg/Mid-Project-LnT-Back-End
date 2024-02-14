<form action="/tabelKaryawan/{{$tabelKaryawan->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{$tabelKaryawan->nama}}"><br>
    <input type="text" name="identification" placeholder="Nomor ID" value="{{$tabelKaryawan->identification}}"><br>
    <select name="jenisKelamin" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if ($tabelKaryawan->jenisKelamin == "L") selected @endif >Laki-Laki</option>
        <option value="P" @if ($tabelKaryawan->jenisKelamin == "P") selected @endif >Perempuan</option>
    </select><br>
    <textarea name="alamat" rows="10">{{$tabelKaryawan->alamat}}</textarea><br>
    <input type="text" name="telp" placeholder="Nomor Telefon" value="{{$tabelKaryawan->telp}}"><br>
    <input type="text" name="usia" placeholder="Usia" value="{{$tabelKaryawan->usia}}"><br>
    <input type="submit" name="submit" value="Update">
</form>