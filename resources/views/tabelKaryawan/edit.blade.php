<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah</title>
    <link rel="stylesheet" href="{{asset('/css/edit.css')}}">
</head>
<body>
    <h1>Ubah Karyawan</h1>
    <form id="formKaryawan" action="/tabelKaryawan/{{$tabelKaryawan->id}}" method="POST">
        @method('put')
        @csrf
        <div id="container">
            <div>
                <div class="fm">
                    <label for="">Nama</label><br>
                    <input id="nama" type="text" name="nama" placeholder="Masukkan nama" value="{{$tabelKaryawan->nama}}">
                    <p id="error-name" class="error-message"></p><br>
                </div>
                
                <div class="fm">
                    <label for="">NIK</label><br>
                    <input id="nik" type="text" name="identification" placeholder="Masukkan NIK" value="{{$tabelKaryawan->identification}}">
                    <p id="error-nik" class="error-message"></p><br>
                </div>

                <div class="fm">
                    <label for="">Jenis Kelamin</label><br>
                    <select name="jenisKelamin" id="gender">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L" @if ($tabelKaryawan->jenisKelamin == "L") selected @endif>Laki-Laki</option>
                        <option value="P" @if ($tabelKaryawan->jenisKelamin == "P") selected @endif>Perempuan</option>
                    </select>
                    <p id="error-gender" class="error-message"></p><br>
                </div>

                <div class="fm">
                    <label for="">Alamat</label><br>
                    <textarea id="alamat" name="alamat" rows="10" placeholder="Masukkan alamat">{{$tabelKaryawan->alamat}}</textarea>
                    <p id="error-alamat" class="error-message"></p><br>
                </div>
                
                <div class="fm">
                    <label for="">Nomor Telefon</label><br>
                    <input id="number" type="text" name="telp" placeholder="Masukkan nomor telefon" value="{{$tabelKaryawan->telp}}">
                    <p id="error-number" class="error-message"></p><br>
                    <br>
                </div>
                
                <div class="fm">
                    <label for="">Usia</label><br>
                    <input id="usia" type="text" name="usia" placeholder="Masukkan usia" value="{{$tabelKaryawan->usia}}">
                    <p id="error-usia" class="error-message"></p>
                    <br>
                </div>
            </div>
            <div>
                <button id="send-btn" type="submit">Ubah</button>
            </div>
        </div>
    </form>

    <script>
        function validateName(){
            let inputName = document.querySelector("#nama");
            let valueName = inputName.value;
            let errorName = document.querySelector("#error-name");
        
            if (valueName == "") {
                errorName.innerHTML = "Nama tidak boleh kosong!";
                inputName.style.border = "2px solid red";
                return false;
            } else if(valueName.length < 5 || valueName.length > 20) {
                errorName.innerHTML = "Nama harus antara 5-20 karakter!";
                inputName.style.border = "2px solid red";
                return false;
            } else {
                errorName.innerHTML = "";
                inputName.style.border = "2px solid #850E35";
                return true;
            }
        }

        function validateUsia() {
            let inputUsia = document.querySelector("#usia");
            let valueUsia = inputUsia.value;
            let errorUsia = document.querySelector("#error-usia");
        
            if (valueUsia === "") {
            errorUsia.innerHTML = "Usia tidak boleh kosong!";
            inputUsia.style.border = "2px solid red";
            return false;
            } else if (isNaN(valueUsia)) {
            errorUsia.innerHTML = "Usia harus berupa angka!";
            inputUsia.style.border = "2px solid red";
            return false;
            } else if(valueUsia < 21){
            errorUsia.innerHTML = "Usia harus lebih besar dari 20!";
            inputUsia.style.border = "2px solid red";
            return false;
            } else {
            errorUsia.innerHTML = "";
            inputUsia.style.border = "2px solid #850E35";
            return true;
            }
        }

        function validateAlamat() {
            let inputAlamat = document.querySelector("#alamat");
            let valueAlamat = inputAlamat.value;
            let errorAlamat = document.querySelector("#error-alamat");
            console.log(valueAlamat);
        
            if (valueAlamat === "") {
            errorAlamat.innerHTML = "Alamat tidak boleh kosong!";
            inputAlamat.style.border = "2px solid red";
            return false;
            } else if(valueAlamat.length < 10 || valueAlamat.length > 40){
            errorAlamat.innerHTML = "Usia harus antara 10-40 karakter!";
            inputAlamat.style.border = "2px solid red";
            return false;
            } else {
            errorAlamat.innerHTML = "";
            inputAlamat.style.border = "2px solid #850E35";
            return true;
            }
        }

        function validateNumber() {
            let inputNumber = document.querySelector("#number");
            let valueNumber = inputNumber.value;
            let errorNumber = document.querySelector("#error-number");
        
            if (valueNumber === "") {
            errorNumber.innerHTML = "Nomor tidak boleh kosong!";
            inputNumber.style.border = "2px solid red";
            return false;
            } else if (isNaN(valueNumber)) {
            errorNumber.innerHTML = "Nomor harus berupa angka!";
            inputNumber.style.border = "2px solid red";
            return false;
            } else if(valueNumber.length < 9 || valueNumber.length > 12){
            errorNumber.innerHTML = "Nomor harus antara 9-12 karakter!";
            inputNumber.style.border = "2px solid red";
            return false;
            } else if(valueNumber.substring(0,2) != "08"){
            errorNumber.innerHTML = "Nomor harus mulai dengan 08!";
            inputNumber.style.border = "2px solid red";
            return false;
            } else {
            errorNumber.innerHTML = "";
            inputNumber.style.border = "2px solid #850E35";
            return true;
            }
        }

        function validateNik() {
            let inputNik = document.querySelector("#nik");
            let valueNik = inputNik.value;
            let errorNik = document.querySelector("#error-nik");
        
            if (valueNik === "") {
            errorNik.innerHTML = "NIK tidak boleh kosong!";
            inputNik.style.border = "2px solid red";
            return false;
            } else if (isNaN(valueNik)) {
            errorNik.innerHTML = "NIK harus berupa angka!";
            inputNik.style.border = "2px solid red";
            return false;
            } else if(valueNik.length != 16){
            errorNik.innerHTML = "NIK harus 16 karakter!";
            inputNik.style.border = "2px solid red";
            return false;
            } else {
            errorNik.innerHTML = "";
            inputNik.style.border = "2px solid #850E35";
            return true;
            }
        }

        function validateGender() {
            let inputGender = document.querySelector("#gender");
            let valueGender = inputGender.value;
            let errorGender = document.querySelector("#error-gender");
        
            if (valueGender === "") {
            errorGender.innerHTML = "Jenis Kelamin harus dipilih!";
            inputGender.style.border = "2px solid red";
            return false;
            } else {
            errorGender.innerHTML = "";
            inputGender.style.border = "2px solid #850E35";
            return true;
            }
        }

        let sendBtn = document.querySelector("#send-btn");
        sendBtn.addEventListener("click", function (e) {
            e.preventDefault();

            let formKaryawan = document.querySelector("#formKaryawan");
            let isNameValid = validateName();
            let isUsiaValid = validateUsia();
            let isAlamatValid = validateAlamat();
            let isNumberValid = validateNumber();
            let isNikValid = validateNik();
            let isGenderValid = validateGender();

            if (isNameValid && isUsiaValid && isAlamatValid && isNumberValid && isNikValid && isGenderValid) {
                console.log("submit", formKaryawan)
                formKaryawan.submit();
            }
        });

    </script>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah</title>
    <link rel="stylesheet" href="{{asset('/css/edit.css')}}">
</head>
<body>
    <h1>Ubah Karyawan</h1>
    <form action="/tabelKaryawan/{{$tabelKaryawan->id}}" method="POST">
        @method('put')
        @csrf
        <input type="text" name="nama" placeholder="Nama" value="{{$tabelKaryawan->nama}}"><br>
        <input type="text" name="identification" placeholder="NIK" value="{{$tabelKaryawan->identification}}"><br>
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
</body>
</html> --}}

